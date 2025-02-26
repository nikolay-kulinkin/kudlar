<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // public function latestPost()
    // {
    //     return $this->hasOne(Post::class)->latestOfMany();
    // }

    // public function oldestPost()
    // {
    //     return $this->hasOne(Post::class)->oldestOfMany();
    // }

    // public function latestActivePost()
    // {
    //     return $this->hasOne(Post::class)->ofMany([
    //       'id'=>'max'  
    //     ],function(Builder $query){
    //         $query->where('status',1)
    //               ->where('id','<>',3);
    //     });
    // }
}
