<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

//'singer'

    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class, 'album_song');
    }




}
