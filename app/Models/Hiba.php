<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiba extends Model
{
    use HasFactory;

    public function terem() {
        $this->belongsTo(Terem::class);
    }
}
