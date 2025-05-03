<?php

namespace App\Models;
use App\Models\Prestamo;
use App\Models\Autor;
use App\Contracts\Rentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Libro extends Model implements Rentable
{
    use HasFactory;
    protected $table = 'libro';
    protected $fillable = ['nombre', 'codigo', 'autor_id'];

    public function prestamo(){
        return $this->HasMany(Prestamo::class);
    }
    public function autor(){
        return $this->belongsTo(Autor::class, 'autor_id');
    }

    public function validateAvailability(int $id): bool{
        return !Prestamo::where('libro_id', $id)->exists();
    }

}
