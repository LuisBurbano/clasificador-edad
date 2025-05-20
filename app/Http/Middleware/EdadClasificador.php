<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\EdadIngreso;
use App\Services\AgeRouterService;



class EdadClasificador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $edad = $request->input('edad');

        if (!is_numeric($edad) || $edad < 0 || $edad > 120) {
            return redirect()->route('error.edad');
        }

        EdadIngreso::create(['edad' => $edad]);

        $ruta = app(AgeRouterService::class)->obtenerRutaPorEdad($edad);

        return redirect($ruta);
    }
}
