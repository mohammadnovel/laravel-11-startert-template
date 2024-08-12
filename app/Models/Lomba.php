<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_lomba_id', 'price', 'description'];

    public function category()
    {
        return $this->belongsTo(CategoryLomba::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    
}
