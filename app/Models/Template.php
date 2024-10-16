<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    // Define the table name if it's different from the model's plural form
    protected $table = 'templates';

    // Specify which fields are mass assignable
    protected $fillable = ['namatemplate', 'pathtemplate', 'deskripsitemplate', 'title'];

    // You can define any relationships here if needed for recursion
}
