<?php
namespace App\Factories;

use App\Models\Autor;

interface AutorFactory
{
    public function create(array $data): Autor;
}
