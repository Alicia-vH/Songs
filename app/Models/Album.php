<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['name','year', 'times_sold'];


    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class, 'album_songs');
    }

    public function band(): BelongsTo
    {
        return $this->belongsTo(Band::class, 'band_id');
    }



}
