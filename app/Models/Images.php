<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'chapter_id'];
    protected $table = 'images';
    // protected $foreignKey =  'chapter_id';
    public $timestamps = false;
    public function chapter()
    {
        return $this->belongsTo(Chapters::class, 'chapter_id');
    }
}
