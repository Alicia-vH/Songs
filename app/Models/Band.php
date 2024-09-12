<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Band extends Model
{
    use HasFactory;

    protected $fillable = ['name','genre', 'founded', 'active_till', 'album_id'];

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class, 'band_id');
    }
}

