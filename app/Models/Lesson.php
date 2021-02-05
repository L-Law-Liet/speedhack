<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'min', 'file', 'program_id'];
    public function program(){
        return $this->belongsTo(Program::class);
    }
}
