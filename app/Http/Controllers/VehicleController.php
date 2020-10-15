<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//classe de autenticação
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vehicles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                    //Fazemos a validação dos campos de titulo e corpo da postagem
     $validatedData = $request ->validate([
        'model' => ['required','max:100'],//obrigatorio,valor unico e tem que possuir no maximo, 255 caracteres
        'color' => ['required','max:100'],//obrigatorio,valor unico e tem que possuir no maximo, 255 caracteres
        'owners' => ['required','min:1','integer'],
        'value' => ['required','min:1','integer'],//obrigatorio
        'km' => ['required','min:1','integer'],
        'description' => ['required'],
        'type' => ['required'],
        'image' => ['dimensions:min_width=200,min_height=200'],
    ]);

        $vehicle = new Vehicle($validatedData);///criamos

                $vehicle->user_id = Auth::id();//identificamos o autor
                $vehicle->save();//salvamos

                if($request->hasFile('image') and $request->file('image')->isValid()){
                    $extension = $request->image->extension();//deixo a estensão da img isolada
                   
                    //crio um nome para a img
                    $image_name = now()->toDateTimeString()."_".substr(base64_encode(sha1(mt_rand())),0,10);
        
                    $path = $request->image->storeAs('vehicles',$image_name.".".$extension,'public');
        
                    $image = new Image();
                    $image->vehicle_id = $vehicle->id;
                    $image->path = $path;
                    $image->save(); 
                }

                return redirect('vehicles')->with('success', 'Veiculo cadastrado com sucesso');
    } 
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
