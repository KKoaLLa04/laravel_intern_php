<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'posts';
    protected $fillable = ['title', 'description', 'content'];

    public function Category(){
        return $this->belongsTo(
            Category::class,
            'cate_id',
            'id'
        );
    }

    public function users(){
        return $this->belongsTo(
            User::class,
            'user_id',
            'id'
        );
    }

}
