<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function stayingHour()
    {
        return $this->belongsTo(StayingHour::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
