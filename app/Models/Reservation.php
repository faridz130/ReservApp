<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Table;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'tel_number',
        'table_id',
        'res_date',
        'guest_number',
    ];

    protected $dates = [
        'res_date',
    ];

    public function table(){
        return $this->belongsTo(Table::class);
    }

}
