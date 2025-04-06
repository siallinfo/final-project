<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    private static $banner, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'image/banner/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newBanner($request)
    {
        self::$banner = new Banner();
        self::$banner->category_id  = $request->category_id;
        self::$banner->description  = $request->description;
        self::$banner->image        = self::getImageUrl($request);
        self::$banner->status       = $request->status;
        self::$banner->save();
    }
    public static function updateBanner($request, $id)
    {
        self::$banner = Banner::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$banner->image))
            {
                unlink(self::$banner->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$banner->image;
        }
        self::$banner->category_id  = $request->category_id;
        self::$banner->description  = $request->description;
        self::$banner->image        = self::$imageUrl;
        self::$banner->status       = $request->status;
        self::$banner->save();
    }
    public static function deleteBanner($id)
    {
        self::$banner = Banner::find($id);
        if (file_exists(self::$banner->image))
        {
            unlink(self::$banner->image);
        }
        self::$banner->delete();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
