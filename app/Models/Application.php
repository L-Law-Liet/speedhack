<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ApplicationStatus;

class Application extends Model
{
    use HasFactory;
    protected $appends = ['resource_url'];

    protected $fillable = [
       'name',
       'phone',
       'email',
       'status_id'
    ];

    public function status()
    {
        return $this->belongsTo('App\Models\ApplicationStatus', 'status_id');
    }


    public function getResourceUrlAttribute()
    {
      return url('/admin/applications/' . $this->getKey());
    }
}
