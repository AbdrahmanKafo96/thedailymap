<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = [ 'title' , 'description' ,'lat','lng' ,'image1_path' ,
    'image2_path' , 'image3_path' ,'user_id' ,'type_id'];
    protected $dates = ['deleted_at'];
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function type()
    {
        return $this->hasOne(Type::class);
    }
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class , 'favorites');
    }
}
