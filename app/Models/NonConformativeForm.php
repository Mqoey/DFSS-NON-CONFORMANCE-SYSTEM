<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonConformativeForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inspector()
    {
        return $this->belongsTo(Inspector::class);
    }

    public function inspectoradmin()
    {
        return $this->belongsTo(InspectorAdmin::class, 'inspector_admin_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
