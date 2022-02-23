<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiba extends Model
{
    use HasFactory;

    public function terem() {
        return $this->belongsTo(Terem::class);
    }

    protected $fillable = ['felhasznalo','hiba','terem_id'];

    protected $visible = ['felhasznalo','hiba','terem_id'];
}
