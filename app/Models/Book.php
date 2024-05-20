<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'name',
        'isbn',
        'value'
    ];

    public function store(){
        return $this->belongsTo(Store::class);
    }
}   
