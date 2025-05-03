<?php
namespace App\Services;
 use App\Models\Libro;
 use App\Models\Autor;
 use App\Traits\Loggable;

 class LibroService{
    //use Loggable;

    public function getAllLibros(){
        return Libro::all();  
    }

    public function getLibroById($id)
    {
        $libro = Libro::firstWhere('id', $id);
        return $libro;
    }

    public function createLibro(array $data){
        $libro = Libro::create($data);
        return $libro;
    }
    public function updateLibro(Libro $libro, array $data){
        $libro->update($data);
        return $libro;
    }
    public function deleteLibro(Libro $libro){
        return $libro->delete();
    }
 }