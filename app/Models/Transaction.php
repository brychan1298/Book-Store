<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = "false";
    public $guarded = ["id"];

    public function Book(){
        return $this->belongsTo(Book::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
