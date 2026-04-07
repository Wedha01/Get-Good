<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karakters extends Model
{
    use HasFactory;


    protected $fillable = [
        'file',
        'description',
        'banner',
        'relic',
        'relicdescription',
        'relic2',
        'relicdescription2pcs',
        'planetaryset',
        'planetarysetdescription',
        'lightcone',
        'lightconedescription'
    ];
}
