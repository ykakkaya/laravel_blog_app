<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function commentsOk()
    {
        return $this->hasMany(Comment::class)->where('status', 1);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
