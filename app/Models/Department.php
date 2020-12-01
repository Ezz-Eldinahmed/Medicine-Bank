<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'number', 'manger'];

    public function employees()
    {
        return $this->hasMany(Employees::class);
    }
}
