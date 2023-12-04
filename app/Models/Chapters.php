<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    use HasFactory;

    protected $fillable = ['judul_ch', 'total_page', 'komik_id'];
    protected $table = 'chapters';

    public function komiks()
    {
        return $this->belongsTo(Komiks::class, 'komik_id');
    }   
    public function images()
    {
        return $this->hasMany(Images::class, 'chapter_id');
    }
}
