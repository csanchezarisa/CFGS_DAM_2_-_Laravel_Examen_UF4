<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasca extends Model
{

    protected $fillable = ['name', 'completed', 'description', 'projecte_id'];

    use HasFactory;

    public function projecte() {
        return $this->belongsTo(Projecte::class);
    }
}
