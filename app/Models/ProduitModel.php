<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitModel extends Model
{
    
    protected $table = 'contact';

    protected $fillable =  [ 'FirstName', 'LastName', 'Email', 'Phone'];

    public $timestamps=false;

}
