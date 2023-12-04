<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'slug', 'created_at'];
    protected $table = 'categories';

    public function komiks()
    {
        return $this->hasMany(Komiks::class);
    }
}
    