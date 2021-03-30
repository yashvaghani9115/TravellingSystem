<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookPackage extends Model
{
    use HasFactory;
    protected $table = 'BookPackage';
    public $timestamps = TRUE;
    protected $fillable = [
        'name','user_id','price','departure_date','package_id',
    ];
    public function package()
    {
        return $this->belongsTo('App\Models\package');
    }
}