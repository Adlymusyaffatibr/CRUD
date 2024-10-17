<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'penulis', 'tahun_terbit', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
