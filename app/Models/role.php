<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = ['ID_Roles', 'Email', 'Password', 'Nama_Role'];
    public $timestamps = false;
}
