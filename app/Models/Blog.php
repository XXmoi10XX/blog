<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //デーブル名
    protected $table = "blogs";

    // 可変項目
    protected $fillable = 
    [
        'title',
        'content'
    ];
}
