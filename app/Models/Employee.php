<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'contract_id', 
        'position_id',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
