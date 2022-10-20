<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function todos()
    {
        return $this->hasMany(Todo::class); //Una categoría puede tener muchos todos
    }
}
