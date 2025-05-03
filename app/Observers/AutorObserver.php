<?php
namespace App\Observers;

use App\Models\Autor;
use Illuminate\Support\Facades\Log;

class AutorObserver
{
    public function created(Autor $autor)
    {
        Log::info("Nuevo autor creado: {$autor->nombre}");
    }

    public function updated(Autor $autor)
    {
        Log::info("Autor actualizado: {$autor->nombre}");
    }
    
    public function deleted(Autor $autor)
    {
        Log::info("Autor eliminado: {$autor->nombre}");
    }
}
