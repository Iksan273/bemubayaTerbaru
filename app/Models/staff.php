<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'nrp',
        'fakultas',
        'pilihan1',
        'alasan1',
        'pilihan2',
        'alasan2',
        'idline',
        'nohp',
        'cv',
        'ktm',
        'fotodiri',
        'portofolio',
    ];
}
