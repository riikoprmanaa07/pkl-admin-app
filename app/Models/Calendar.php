<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    // Tentukan nama tabel jika tidak sesuai dengan nama model (plural)
    protected $table = 'calendar';
    // Tambahkan kolom yang bisa diisi jika diperlukan
    protected $fillable = ['nama_diklat', /* ...kolom lain */];
}