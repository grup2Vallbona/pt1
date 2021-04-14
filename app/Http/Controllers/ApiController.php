<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Llibre;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
  function getLlibres()
  {
    return Llibre::all();
  }
  function updateLlibre(Request $request, $id)
  {
    //cal posar en la peticio PUT el Header field:
    //Content-Type = application/x-www-form-urlencoded
    $llibre = Llibre::find($id);
    $llibre->update($request->all());

    return $llibre;
  }
  function getAutors()
  {
    return Autor::all();
  }
  function getAutorsId($id)
  {
    return Autor::find($id);
  }
  function getLlibresId($id)
  {
    return Llibre::find($id);
  }

  function inserirLlibre(Request $request)
    {
        $llibre = Llibre::create($request->all());
        return $llibre;
    }
    function inserirAutor(Request $request)
    {
        $autor = Autor::create($request->all());
        return $autor;
    }

    function eliminarLlibresId($id)
    {
       $llibre = Llibre::find($id);
        $llibre->delete();
        return $llibre;
    }
}
