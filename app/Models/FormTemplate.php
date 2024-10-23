<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'message', // Add email field
        'image1',
        'image2',
        'image3',
        'image4',
        'pdf_path',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
