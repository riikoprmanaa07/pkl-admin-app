<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widyaiswara extends Model
{
    use HasFactory;
    protected $table = 'widyaiswara';
    // Gunakan ini jika primary key bukan 'id'
    protected $primaryKey = 'nip_widyaiswara';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nama_lengkap', /* ...kolom lain */];
}