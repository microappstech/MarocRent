<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{

    use HasFactory, Notifiable;
 /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'PostId';
    protected $incrementing = true;

    protected $fillable = [
        "title",
        "description",
        "typePost"
    ];
}
