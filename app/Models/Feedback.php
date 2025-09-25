<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'ticket_id',
        'user_id',
        'rating',
        'komentar',
    ];

    public function tikets()
    {
        return $this->belongsTo(Tiket::class, 'ticket_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
