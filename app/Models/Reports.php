<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function book()
    {
        return $this->belongsTo(Books::class, 'book_id');
    }

    protected $table = 'exchange_requests';

    protected $fillable = [
        'user_id',
        'book_id',
        'reason',
        'description'
    ];
}
