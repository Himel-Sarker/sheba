<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Storage::url("doctors/".$value),
        );
    }
}
