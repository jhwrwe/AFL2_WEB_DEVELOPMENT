<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['id', 'name', 'majors', 'CV', 'Hobys', 'age', 'gender', 'addition'];

    public static function index()
    {
        return self::all();
    }

    public static function showschools($id)
    {
        return self::find($id);
    }
}
