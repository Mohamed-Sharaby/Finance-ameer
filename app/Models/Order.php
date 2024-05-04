<?php

namespace App\Models;

use App\Http\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory,HasImage;

    protected static function booted()
    {
        static::deleting(function ($model) {
            // Delete Sender Images
            if ($model->s_passport) {
                $image = str_replace(url('/') . '/storage/', '', $model->s_passport);
                deleteImage('uploads', $image);
            }
            if ($model->s_eid) {
                $image = str_replace(url('/') . '/storage/', '', $model->s_eid);
                deleteImage('uploads', $image);
            }
            if ($model->s_salary) {
                $image = str_replace(url('/') . '/storage/', '', $model->s_salary);
                deleteImage('uploads', $image);
            }
            // Delete Receiver Images
            if ($model->r_passport) {
                $image = str_replace(url('/') . '/storage/', '', $model->r_passport);
                deleteImage('uploads', $image);
            }
            if ($model->r_eid) {
                $image = str_replace(url('/') . '/storage/', '', $model->r_eid);
                deleteImage('uploads', $image);
            }
            if ($model->r_salary) {
                $image = str_replace(url('/') . '/storage/', '', $model->r_salary);
                deleteImage('uploads', $image);
            }




        });
    }


    protected $fillable = [

        's_first_name',
        's_last_name',
        's_zip',
        's_address',
        's_city',
        's_state',
        's_dob',
        's_email',
        's_phone',
        's_passport',
        's_eid',
        's_salary',
        's_type',

        'r_first_name',
        'r_last_name',
        'r_zip',
        'r_address',
        'r_city',
        'r_state',
        'r_dob',
        'r_email',
        'r_phone',
        'r_passport',
        'r_eid',
        'r_salary',
        'r_type',

        'amount',
        'description',
        'type',
        'notes',


    ];
}
