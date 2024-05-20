<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'active'
    ];

    public function book(){
        return $this->HasMany(Book::class);
    }
}   

