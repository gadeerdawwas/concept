<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function getimageAttribute($value) {
        return 'upload/Services/' . $value;
    }

    public function ImagesProject()
    {
        return $this->hasMany(Images::class);
    }
}
