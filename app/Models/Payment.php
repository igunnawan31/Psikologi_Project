<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email', // Add email field
        'payment_method',
        'bukti_pembayaran',
        'pdf_path',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
