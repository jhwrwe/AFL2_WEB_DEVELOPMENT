<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $fillable =['id_apply','id_school_apply','id_teacher_apply','status'];
    public function schools()
    {
        return $this->belongsToMany(Schools::class, 'apply_school', 'id_apply', 'id_school');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teachers::class, 'apply_teacher', 'id_apply', 'id_teacher');
    }
}
