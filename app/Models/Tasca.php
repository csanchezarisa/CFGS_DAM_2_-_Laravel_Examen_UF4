<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasca extends Model
{
    use HasFactory;

    public function projecte() {
        return $this->belongsTo(Projecte::class);
    }
}
