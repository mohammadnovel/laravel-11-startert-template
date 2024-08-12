<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLomba extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function lombas()
    {
        return $this->hasMany(Lomba::class);
    }
}
