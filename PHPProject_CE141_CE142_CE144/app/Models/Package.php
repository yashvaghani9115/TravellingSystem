<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'Package';
    public $timestamps = FALSE;
    protected $fillable = [
        'name','price','nights','inclusions','img','description','city_id',
    ];
}