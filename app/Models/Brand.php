<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Detection\Cache\delete;
use function Laravel\Prompts\select;

class Brand extends Model
{
    use HasFactory;

    private static $brand, $image, $imageName, $imageUrl, $directory, $extension;

    public static function newBrand($request)
    {
        self::$brand                = new Brand();
        self::$brand->name          = $request->name;
        self::$brand->description   = $request->description;
        self::$brand->status        = $request->status;
        self::$brand->save();

    }
    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::find($id);
        self::$brand->name          = $request->name;
        self::$brand->description   = $request->description;
        self::$brand->status        = $request->status;
        self::$brand->save();
    }

    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        self::$brand->delete();
    }
}
