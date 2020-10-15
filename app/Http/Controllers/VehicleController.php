<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;//model de veiculos
use App\Models\Image;//model das imagens 
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
        $vehicles = Vehicle::where('user_id',Auth::id())->orderBy('created_at','desc')->paginate(3);//asc para do mais velho ao mais novo

        return view('vehicles.index',compact('vehicles'));
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
        'owners' => ['required','min:1','integer'],//o numero de propietarios deve ser obrigatorrio
        'value' => ['required','min:1','integer'],//o valor do veiculo deve ser obrigatorio
        'km' => ['required','min:1','integer'],//a quilometragem do veiculo deve ser informato
        'description' => ['required'],//a descrição é obrigatoria
        'type' => ['required'],//o tipo deve ser informado
        'image' => ['dimensions:min_width=200,min_height=200'],//a img deve conter a altura de 200 e largura de 200
    ]);

        $vehicle = new Vehicle($validatedData);

                $vehicle->user_id = Auth::id();//identificamos o autor pelo ID na sessão
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

                //redirecionamos para a view de index
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
        return view('vehicles.show', compact('vehicle'));
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
