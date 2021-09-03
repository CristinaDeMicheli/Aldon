<?php

namespace App\Http\Controllers;
use App\ObraSocial;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\BD;


class ObraSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obrasocial = ObraSocial::all();
        //return $obrasocial;
       return view('obrasocial.list',compact('obrasocial'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('obrasocial.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
              'nombre'=>'required',
              'CUIT'=>'required',
              'Domicilio'=>'required',
              'iva'=>'required',
              'factura'=>'required',            
        ]);
 
        $obrasocial = new ObraSocial([
            'nombre' => $request->get('nombre'),
            'CUIT'=> $request->get('CUIT'),
            'Domicilio'=> $request->get('Domicilio'),
            'iva'=> $request->get('iva'),
            'factura'=> $request->get('factura')
        ]);
 
        $obrasocial->save();
        return redirect('/obrasocial')->with('success', 'una os ha sido añadida');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\obrasocial  $obrasocial
     * @return \Illuminate\Http\Response
     */
    public function show(ObraSocial $obrasocial)
    {
        //
        return view('obrasocial.view',compact('obrasocial'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\obrasocial  $obrasocial
     * @return \Illuminate\Http\Response
     */
    public function edit(ObraSocial $obrasocial)
    {
        //
        return view('obrasocial.edit',compact('obrasocial'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\obrasocial  $obrasocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
 
        $request->validate([
          'nombre'=>'required',
              'CUIT'=>'required',
              'Domicilio'=>'required',
              'iva'=>'required',
              'factura'=>'required',  
        ]);
 
 
        $obrasocial = obrasocial::find($id);
        $obrasocial->nombre = $request->get('nombre');
        $obrasocial->CUIT = $request->get('CUIT');
        $obrasocial->Domicilio = $request->get('Domicilio');
        $obrasocial->iva = $request->get('iva');
        $obrasocial->factura = $request->get('factura'); 
        $obrasocial->update();
 
        return redirect('/obrasocial')->with('success', 'Obra Social actualizada con exito');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\obrasocial  $obrasocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObraSocial $obrasocial)
    {
        //
        $obrasocial->delete();
        return redirect('/obrasocial')->with('success', 'OS eliminada con exito');
    }
    public function list()
    {
        //echo "ejemplo"; exit();
         $obrasocial = ObraSocial::all();
     //   print_r($obrasocial); exit();
           return view('obrasocial.lista',compact('obrasocial'));
    }
}

?>
