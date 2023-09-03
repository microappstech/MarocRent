<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Rents extends Model
{
    use HasFactory , Notifiable;
    public $incrementing  = true;

    protected $primaryKey ="RentId";
    protected $fillable = [
        "title",
        "adresse",
        "description",
        "price",
        "daily",
        "monthly",
        "MainImage"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
