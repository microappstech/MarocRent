<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rents extends Model
{
    use HasFactory;

    protected $primaryKey ="RentId";
    protected $incrementing  = true;
    protected $fillable = [
        "title",
        "adresse",
        "description",
        "price",
        "daily",
        "monthly"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
