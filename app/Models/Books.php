<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Books extends Model
{
    use HasFactory, Notifiable;

    public static function index()
    {
        return Books::all();
    }

    public static function getById($id)
    {
        return Books::where("id", $id)->first();
    }
}
