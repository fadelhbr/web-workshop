<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'employee_id',
        'position',
        'email',
        'phone',
        'address',
        'join_date',
        'is_active'
    ];

    // Relationship dengan users jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship dengan inventory
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}