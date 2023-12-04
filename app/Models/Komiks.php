<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Komiks extends Model
{
    use HasFactory; 
    //    protected $guarded = ['id'];
    protected $table = 'komiks';
    protected $fillable = ['judul', 'subjudul', 'deskripsi', 'category_id', 'chapter_id', 'jumlah_ch', 'created_at', 'cover'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function chapters()
    {
        return $this->hasMany(Chapters::class, 'komik_id'); 
    }
}
