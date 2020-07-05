<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table="Artikel";
    protected $primaryKey="id";
    protected $fillable=['id','judul','isi','slug','tag'];
}
