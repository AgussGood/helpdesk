<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Priorities extends Model
{
    protected $fillable = [
        'nama_prioritas',
    ];

    public function tikets()
    {
        return $this->hasMany(Tiket::class);
    }
}
