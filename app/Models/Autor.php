<?php
namespace App\Models;
use App\Contracts\Rentable;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autor extends Model
{
    use HasFactory;
    protected $table = 'autor';
    protected $fillable = ['nombre'];

    public function libro()
    {
        return $this->hasMany(Libro::class, 'autor_id');
    }

    public function validateAvailability(int $id): bool
    {
        return !self::where('id', $id)->exists();
    }
    
}