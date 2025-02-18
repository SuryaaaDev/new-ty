<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //ditambahkan karena error tidak bisa membuat data dengan factory
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $with = ['penulis', 'category']; //buat eanger loading

    use HasFactory; //ditambahkan karena error tidak bisa membuat data dengan factory
    //
    protected $fillable = ['slug', 'judul', 'penulis', 'category', 'isi'];

    public function penulis(): BelongsTo //relasi supaya nama penulis nya sesuai dengan nama user (RELASI ANTAR MODEL)
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo //satu posts untuk atau punya satu kategori
    {
        return $this->belongsTo(Category::class);
    }
    
}
