<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CountdownBanner extends Model
{
    protected static $countdownBanner, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'image/Countdown-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function createNewCountdownBanner($request)
    {
        self::$countdownBanner = new CountdownBanner();
        self::$countdownBanner->product_id      = $request->product_id;
        self::$countdownBanner->title           = $request->title;
        self::$countdownBanner->discount_text   = $request->discount_text;
        self::$countdownBanner->description     = $request->description;
        self::$countdownBanner->image           = self::getImageUrl($request);
        self::$countdownBanner->end_date        = $request->end_date;
        self::$countdownBanner->status          = $request->status;
        self::$countdownBanner->save();
    }
    public static function updateCountdownBanner($request, $id)
    {
        self::$countdownBanner = CountdownBanner::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$countdownBanner->image))
            {
                unlink(self::$countdownBanner->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$countdownBanner->image;
        }
        self::$countdownBanner->title           = $request->title;
        self::$countdownBanner->discount_text   = $request->discount_text;
        self::$countdownBanner->description     = $request->description;
        self::$countdownBanner->image           = self::$imageUrl;
        self::$countdownBanner->end_date        = $request->end_date;
        self::$countdownBanner->save();
    }
    public static function deleteCountdownBanner($id)
    {
        self::$countdownBanner = CountdownBanner::find($id);
        if (file_exists(self::$countdownBanner->image))
        {
            unlink(self::$countdownBanner->image);
        }
        self::$countdownBanner->delete();
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
