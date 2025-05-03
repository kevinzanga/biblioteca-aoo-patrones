<?php
namespace App\Services;
use App\Models\Autor;
use App\Factories\AutorFactory;

class AutorService
{
    protected AutorFactory $autorFactory;

    public function __construct(AutorFactory $autorFactory)
    {
        $this->autorFactory = $autorFactory;
    }

    public function getAllAutores()
    {
        return Autor::all();
    }

    public function createAutor(array $data)
    {
        $autor = $this->autorFactory->create($data);
        return $autor;
    }

    public function updateAutor(Autor $autor, array $data)
    {
        $autor->update($data);
        return $autor;
    }

    public function deleteAutor(Autor $autor)
    {
        if ($autor->libro()->exists()) {
            throw new \Exception('No se puede eliminar el autor porque tiene libros asociados!');
        }
        return $autor->delete();
    }
}
