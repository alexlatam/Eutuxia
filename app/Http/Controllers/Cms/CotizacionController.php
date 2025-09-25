<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cms\Cotizacion;

class CotizacionController extends Controller
{
    public function index()
    {
        $cotizaciones = Cotizacion::notArchived()->orderBy('created_at', 'desc')->get();
        return view('cms.cotizaciones.cotizaciones')->with(compact('cotizaciones'));
    }

    public function archived()
    {
        $cotizaciones = Cotizacion::archived()->orderBy('created_at', 'desc')->get();
        return view('cms.cotizaciones.cotizaciones')->with(compact('cotizaciones'));
    }

    public function create()
    {
        return view('cms.cotizaciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:191',
            'creador' => 'required|max:191',
            'fecha' => 'required|date',
            'propuesta' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Rechazada,Vencida,Aprobada'
        ]);

        // Handle items
        $items = [];
        if ($request->has('item_nombres') && $request->has('item_precios')) {
            $nombres = $request->input('item_nombres');
            $precios = $request->input('item_precios');
            
            foreach ($nombres as $key => $nombre) {
                if (!empty($nombre) && isset($precios[$key])) {
                    $items[] = [
                        'nombre' => $nombre,
                        'precio' => (float) $precios[$key]
                    ];
                }
            }
        }

        $cotizacion = new Cotizacion($request->all());
        $cotizacion->items = $items;
        $cotizacion->total = $cotizacion->calculateTotal();
        $cotizacion->save();

        return redirect()->route('cotizacion.home')->with('message', 'Cotización creada exitosamente');
    }

    public function edit($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return view('cms.cotizaciones.edit')->with(compact('cotizacion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:191',
            'creador' => 'required|max:191',
            'fecha' => 'required|date',
            'propuesta' => 'required',
            'descripcion' => 'required',
            'estatus' => 'required|in:Rechazada,Vencida,Aprobada'
        ]);

        $cotizacion = Cotizacion::findOrFail($id);

        // Handle items
        $items = [];
        if ($request->has('item_nombres') && $request->has('item_precios')) {
            $nombres = $request->input('item_nombres');
            $precios = $request->input('item_precios');
            
            foreach ($nombres as $key => $nombre) {
                if (!empty($nombre) && isset($precios[$key])) {
                    $items[] = [
                        'nombre' => $nombre,
                        'precio' => (float) $precios[$key]
                    ];
                }
            }
        }

        $cotizacion->fill($request->all());
        $cotizacion->items = $items;
        $cotizacion->total = $cotizacion->calculateTotal();
        $cotizacion->save();

        return redirect()->route('cotizacion.home')->with('message', 'Cotización actualizada exitosamente');
    }

    public function destroy($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->delete();

        return back()->with('message', 'Cotización eliminada exitosamente');
    }

    public function archive($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->archivada = true;
        $cotizacion->save();

        return back()->with('message', 'Cotización archivada exitosamente');
    }

    public function unarchive($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->archivada = false;
        $cotizacion->save();

        return back()->with('message', 'Cotización desarchivada exitosamente');
    }

    public function publish($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        
        if (!$cotizacion->token_publico) {
            $cotizacion->token_publico = $cotizacion->generatePublicToken();
        }
        
        $cotizacion->publicada = true;
        $cotizacion->save();

        return back()->with('message', 'Cotización publicada exitosamente. URL: ' . route('cotizacion.public', $cotizacion->token_publico));
    }

    public function unpublish($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->publicada = false;
        $cotizacion->save();

        return back()->with('message', 'Cotización despublicada exitosamente');
    }

    public function showPublic($token)
    {
        $cotizacion = Cotizacion::where('token_publico', $token)
            ->where('publicada', true)
            ->firstOrFail();

        return view('cotizaciones.public')->with(compact('cotizacion'));
    }

    public function downloadPdf($token)
    {
        $cotizacion = Cotizacion::where('token_publico', $token)
            ->where('publicada', true)
            ->firstOrFail();

        // Generate PDF - using simple approach for now
        $html = view('cotizaciones.pdf', compact('cotizacion'))->render();
        
        // Set proper headers for PDF download
        $filename = 'cotizacion-' . $cotizacion->id . '.html';
        
        return response($html)
            ->header('Content-Type', 'text/html')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}