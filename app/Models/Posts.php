<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function children()
    {
        return $this->hasMany(Posts::class, 'previous_post_id', 'id');
    }
}
