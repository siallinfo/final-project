<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public static $unit;

    public static function newUnit($requeat)
    {
        self::$unit = new Unit();
        self::$unit->name           = $requeat->name;
        self::$unit->description    = $requeat->description;
        self::$unit->status         = $requeat->status;
        self::$unit->save();
    }
    public static function updateUnit($requeat, $id)
    {
        self::$unit = Unit::find($id);
        self::$unit->name           = $requeat->name;
        self::$unit->description    = $requeat->description;
        self::$unit->status         = $requeat->status;
        self::$unit->save();
    }
    public static function deleteUnit($id)
    {
        self::$unit = Unit::find($id);
        self::$unit->delete();
    }
}
