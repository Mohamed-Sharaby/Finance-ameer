<?php

namespace App\Http\Controllers\Admin;

use App\Exports\OrdersExport;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;


class OrderController extends Controller
{


    public function index()
    {
        return view('admin.orders.index', [
            'orders' => Order::latest()->paginate(7)
            //->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        //return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */
    public function store(AdminRequest $request)
    {
//        User::create($request->validated());
//        return redirect(route('admin.orders.index'))->with('success', 'Admin Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return
     */
    public function edit($id)
    {
//        return view('admin.orders.edit', [
//            'order' => Order::findOrFail($id),
//        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return
     */
    public function update(AdminRequest $request, User $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return 'Done';
    }


    public function export()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }
}
