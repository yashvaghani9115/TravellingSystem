<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'City';
    public $timestamps = FALSE;
    protected $fillable = [
        'name','img_path','cover_img','description'
    ];
}