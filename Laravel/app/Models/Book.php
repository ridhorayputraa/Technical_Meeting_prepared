<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    // Epoch UNIX timestamps
    public function getCreatedAttribute($value) {
        return Carbon::parse($value)->timestamp;
    }

    public function GetPicture(){
        return url('') . Storage::url($this->attributes['thumbnail']);
    }

    public function users(){
      return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function author(){
      return $this->hasOne(Author::class, 'id', 'author_id');
    }

    public function genre(){
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }

    

}
