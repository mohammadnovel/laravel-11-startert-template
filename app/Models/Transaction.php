<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['peserta_id', 'lomba_id', 'category_lomba_id'];

    public function participants()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function lomba()
    {
        return $this->belongsTo(Lomba::class);
    }

    public function category()
    {
        return $this->belongsTo(CategoryLomba::class);
    }
}
