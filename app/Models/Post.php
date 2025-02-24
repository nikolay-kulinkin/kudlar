<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','content','category_id','status'];

    public function isPublished()
    {
        return $this->status?'Published':'Not published';
    }
}
