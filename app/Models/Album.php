<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Album extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'year','times_sold','songs','song_id', 'band_id'];


    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class, 'album_songs');
    }

    public function band(): BelongsTo
    {
        return $this->belongsTo(Band::class, 'band_id');
    }



}
