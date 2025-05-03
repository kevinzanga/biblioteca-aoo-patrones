<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AutorFacade extends Facade
{
    // Este método retorna el nombre del servicio en el contenedor de Laravel
    protected static function getFacadeAccessor(): string
    {
        return 'autor';  // Este es el nombre del servicio registrado en el contenedor
    }
}
