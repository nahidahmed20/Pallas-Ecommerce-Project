<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
use App\Models\Customer;

class Order extends Model
{
    private static $order;
    use HasFactory;

    public static function customerNewOrder($request, $id)
    {
        self::$order                    = new Order();
        self::$order ->customer_id       = $id;
        self::$order ->order_total       = Session::get('order_total');
        self::$order ->tax_total         = Session::get('tax_total');;
        self::$order ->shipping_total    = Session::get('shipping_total');;
        self::$order ->order_date        = date('Y-m-d');
        self::$order ->order_timestamp   = strtotime(date('Y-m-d'));
        self::$order ->delivery_address  = $request->delivery_address;
        self::$order ->payment_method    = $request->payment_method;
        self::$order ->save();

        return self::$order;
    }
    public static function updateOrder($request, $id)
    {
        self::$order = Order::find($id);

        if ($request->order_status == 'Pending')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
        }
        elseif ($request->order_status == 'Processing')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
            self::$order->delivery_address  = $request->delivery_address;
            self::$order->courier_id        = $request->courier_id;
        }
        elseif ($request->order_status == 'Complete')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
            self::$order->payment_amount    = self::$order->order_total;
            self::$order->payment_date      = date('Y-m-d');
            self::$order->payment_timestamp = strtotime(date('Y-m-d'));
        }
        elseif($request->order_status == 'Cancel')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
        }
        self::$order->save();
    }

    public static function deleteOrder($id)
    {
        self::$order = Order::find($id);
        self::$order->delete();
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}