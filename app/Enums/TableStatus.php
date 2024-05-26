<?php

namespace App\Enums;

enum TableStatus: string{
    case Tertunda = 'pending';
    case Tersedia = 'available';
    case TidakTersedia = 'unavailable';
}
