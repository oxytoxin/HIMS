<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    
    public function roomBoyFloor()
    {
        return $this->belongsTo(Floor::class,'room_boy_assigned_floor_id');
    }

    public function roomBoyRoom()
    {
        return $this->belongsTo(Room::class,'room_boy_cleaning_room_id');
    }

    public function cleaningHistories()
    {
        return $this->hasMany(CleaningHistory::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'branch_id',
        'name',
        'email',
        'password',
        'last_transaction_at',
        'branch_name',
        'room_boy_cleaning_room_id',
        'room_boy_assigned_floor_id',
        'selected_room_ids'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
