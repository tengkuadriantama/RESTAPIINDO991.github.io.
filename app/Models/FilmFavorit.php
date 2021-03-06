<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmFavorit extends Model
{
    use HasFactory;
    public $primaryKey  = 'id';
    protected $table = "daftarfilmfavorits";
    protected $fillable = [
        'id',
        'idfilm',
        'iduser',

    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'idfilm', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
}
