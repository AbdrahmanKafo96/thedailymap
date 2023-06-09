<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ["type_name" , "cat_id"];
    public function categroy()
    {
        return $this->belongsTo(Category::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
