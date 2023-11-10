<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'courses', 'criteria', 'aboutcourse'];

    public static function index()
    {
        return self::all();
    }

    public static function showschools($id)
    {
        return self::find($id);
    }
}
