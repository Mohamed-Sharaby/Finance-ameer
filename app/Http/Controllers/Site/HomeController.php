<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveOrderRequest;
use App\Models\Order;
use App\Models\OrderColor;
use App\Models\Theme;
use App\Notifications\NewOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Stripe\Charge;
use Stripe\Exception\CardException;
use Stripe\Stripe;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.main.index');
    }

    public function form()
    {
        $themes = Theme::all();
        return view('site.form.index', compact('themes'));
    }

    public function stripe(SaveOrderRequest $request)
    {
        $this->validate($request, $request->rules(), $request->messages());

        DB::beginTransaction();

        $order = Order::create([
            'option_type' => $request->option_type,
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_phone' => $request->user_phone,
            'user_country' => $request->user_country,
            'width' => $request->width,
            'height' => $request->height,
            'length' => $request->length,
            'image' => $request->image,
            'option_price' => $request->option_type == 'room' ? '1500' : '2500',
            'floor_plan' => $request->floor_plan,
            'theme_id' => $request->theme_id == 'another' ? null : $request->theme_id,
            'another_theme' => $request->another_theme,
            'implementation' => $request->implementation,
            'is_paid' => 0,
        ]);
        foreach ($request->colors as $color) {
            OrderColor::create([
                'order_id' => $order->id,
                'color' => $color
            ]);
        }
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        $stripe = new \Stripe\StripeClient(config('stripe.STRIPE_SECRET'));

        $response = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'AED',
                        'product_data' => [
                            'name' => ucfirst($request->option_type),
                            'metadata' => ['order_id' => $order->id]
                        ],
                        'unit_amount' => $request->option_type == 'room' ? (1500 * 100) : (2500 * 100),
                    ],
                    'quantity' => 1,
                ],
            ],
            ['metadata' => [
                'order_id' => $order->id,
                'user_name' => $order->user_name
            ]
            ],
            'mode' => 'payment',

            'success_url' => route('site.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('site.cancel'),
        ]);

        // dd($response->metadata->order_id);
        if (isset($response->id) && $response->id != '') {

            DB::commit();
            return redirect($response->url);
        } else {
            //session()->flush();
            return redirect()->route('site.cancel');
        }

    }

    public function success(Request $request)
    {
        DB::beginTransaction();
        $stripe = new \Stripe\StripeClient(config('stripe.STRIPE_SECRET'));
        $response = $stripe->checkout->sessions->retrieve($request->session_id);

        $order = Order::findOrFail($response->metadata->order_id);
        $order->update(['is_paid' => 1]);
        ///////////////////////////////////////
        $htmlView = view('invoice', compact('order'))->render();
        $pdf = PDF::loadHtml($htmlView)->setPaper('A4');
        $pdf->setOptions([
            'isPhpEnabled' => true,
            'isHtml5ParserEnabled' => true,
            'timeout' => 300,
            'dpi' => 150,
            'defaultFont' => 'arial',
            'isFontSubsettingEnabled' => true,
        ]);
        // Save the PDF to the storage path
        $pdf->save(storage_path('app/public/invoices/invoice_' . $order->id . '.pdf'));
        /////////////////////////////////////////

//        if (isset($request->session_id)) {
//            $stripe = new \Stripe\StripeClient(config('stripe.STRIPE_SECRET'));
//            $response = $stripe->checkout->sessions->retrieve($request->session_id);
//
//            // Generate PDF from HTML
//            DB::commit();
//            return redirect()->route('site.index')->with('success', 'Payment Done Successfully');
//
//        }
        DB::commit();
        return redirect()->route('site.form')->with('success', 'Payment Done Successfully');
//        else {
//
//            return redirect()->route('site.cancel');
//        }
    }

    public function cancel()
    {
        return redirect()->route('site.form')->with('error', 'Something went wrong . Please try again');
    }


}



//$htmlView = view('invoice', compact('order'))->render();
//$pdf = PDF::loadHtml($htmlView)->setPaper('A4');
//$pdf->setOptions([
//    'isPhpEnabled' => true,
//    'isHtml5ParserEnabled' => true,
//    'timeout' => 300,
//    'dpi' => 150,
//    'defaultFont' => 'arial',
//    'isFontSubsettingEnabled' => true,
//
//]);
//// Save the PDF to the storage path
//$pdf->save(storage_path('app/public/invoices/invoice_' . $order->id . '.pdf'));
//// Send email with pdf attachment
////Notification::route('mail', $order->user_email)->notify(new NewOrder($order));
//Mail::to($order->user_email)->send(new \App\Mail\NewOrderMail($order));
