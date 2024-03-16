<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    private static $customer;
    use HasFactory;

    public static function newCustomer($request)
    {
        self::$customer             = new Customer();
        self::$customer->first_name = $request->first_name;
        self::$customer->last_name  = $request->last_name;
        self::$customer->email      = $request->email;
        self::$customer->mobile     = $request->mobile;
        if ($request->password)
        {
            if ($request->password == $request->confirm_password)
            {
                self::$customer->password = bcrypt($request->password);
            }
        }
        else
        {
            self::$customer->password   = bcrypt($request->mobile);
        }
        self::$customer->save();
        return self::$customer;
    }
}
