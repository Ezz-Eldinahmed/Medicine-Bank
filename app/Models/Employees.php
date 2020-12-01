<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable = ['email','name', 'age', 'salary', 'position', 'experience', 'joinDate', 'department_id'];

    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
}
