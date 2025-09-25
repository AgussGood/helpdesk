<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    public function tikets()
    {
        return $this->hasMany(Tiket::class);
    }
}

