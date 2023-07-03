<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticketing extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'noktp',
        'ticket_id',
        'status',
    ];
}
