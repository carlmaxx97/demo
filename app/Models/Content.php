<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
