<?php

namespace App\Factories;

use App\Models\Autor;

class ConcreteAutorFactory implements AutorFactory
{
    public function create(array $data): Autor
    {
        return Autor::create($data);
    }
}
