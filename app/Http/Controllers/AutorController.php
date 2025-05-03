<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreAutorRequests;
use App\Http\Requests\UpdateAutorRequests;
use App\Services\AutorService;
use App\Models\Autor;
use App\Facades\AutorFacade; 
use Illuminate\Http\Request;

class AutorController extends Controller
{
    // Listar autores
    public function index()
    {
        return response()->json(AutorFacade::getAllAutores());  // Usamos el Facade
    }

    // Registrar autor
    public function store(StoreAutorRequests $request)
    {
        $autor = AutorFacade::createAutor($request->validated());  // Usamos el Facade
        return response()->json($autor, 201);
    }

    // Actualizar autor
    public function update(UpdateAutorRequests $request, Autor $id)
    {
        AutorFacade::updateAutor($id, $request->validated());  // Usamos el Facade
        return response()->json($id);
    }

    // Eliminar autor
    public function destroy($id)
    {
        try {
            $autor = Autor::findOrFail($id);
            AutorFacade::deleteAutor($autor);  // Usamos el Facade
            return response()->json(['message' => 'Autor eliminado correctamente.']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    
}