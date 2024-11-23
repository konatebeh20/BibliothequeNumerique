<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Vehicule extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function famille(){
        return $this->belongsTo(Famille::class);
    }

}
