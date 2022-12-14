<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectorAdmin extends Model
{
    use HasFactory;

    protected $guided = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
