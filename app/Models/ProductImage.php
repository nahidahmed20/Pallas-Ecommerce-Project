<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Detection\Cache\delete;

class ProductImage extends Model
{
    use HasFactory;
    private static $productImage, $productOtherImages, $image, $imageName, $imageUrl, $extension, $directory;

    public static function newProductImage($otherImages, $id)
    {
        foreach ($otherImages as $otherImage) {
            self::$extension    = $otherImage->getClientOriginalExtension();
            self::$imageName    = rand(10000, 50000).'.'.self::$extension;
            self::$directory    = 'upload/product-other-images/';
            $otherImage->move(self::$directory, self::$imageName);
            self::$imageUrl     = self::$directory.self::$imageName;

            self::$productImage             = new ProductImage();
            self::$productImage->product_id = $id;
            self::$productImage->image      = self::$imageUrl;
            self::$productImage->save();
        }
    }

    public static function updateProductOtherImage($otherImages, $id)
    {
        self::deleteProductOtherImage($id);
        self::newProductImage($otherImages, $id);
    }

    public static function deleteProductOtherImage($id)
    {
        self::$productOtherImages = ProductImage::where('product_id',$id)->get();
        foreach (self::$productOtherImages as $productOtherImage)
        {
            if (file_exists($productOtherImage->image))
            {
                unlink($productOtherImage->image);
            }
            $productOtherImage->delete();
        }
    }
}
