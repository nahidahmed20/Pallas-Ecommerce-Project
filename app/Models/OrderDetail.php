<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;
use Cart;

class OrderDetail extends Model
{
    private static $orderDetail, $orderDetails;
    use HasFactory;

    public static function newOrderDetail($id)
    {
        foreach (Cart::content() as $item)
        {
            self::$orderDetail                     = new OrderDetail();
            self::$orderDetail->order_id           = $id;
            self::$orderDetail->product_id         = $item->id;
            self::$orderDetail->product_name       = $item->name;
            self::$orderDetail->product_price      = $item->price;
            self::$orderDetail->product_quantity   = $item->qty;
            self::$orderDetail->save();

            Cart::remove($item->rowId);
        }
    }
    public static function deleteOrderDetail($id)
    {
        self::$OrderDetails = OrderDetail::where('order_id', $id)->get();
        foreach (self::$orderDetails as $orderDetail) {
            $orderDetail->delete();
        }

    }
}
