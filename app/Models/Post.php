<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    public function post_content()
    {
        return $this->hasOne(Content::class);
    }
}
