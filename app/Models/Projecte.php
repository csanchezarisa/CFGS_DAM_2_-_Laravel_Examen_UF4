<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecte extends Model
{

    protected $fillable = ['name'];

    use HasFactory;

    public function tasca() {
        return $this->hasMany(Tasca::class);
    }
}
