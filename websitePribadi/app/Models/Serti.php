<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serti extends Model
{
    use HasFactory;
    protected $table = "serti";
    protected $fillable = ['jenissertifikat', 'judulsertifikat', 'gambarsertifikat'];
}
