<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = [
        'class_id',
        'teacher_id',
        'day',
        'time',
        
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
	}
	public function class()
    {
        return $this->belongsTo(Grade::class,'class_id');
	}
}
