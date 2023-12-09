<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Headquarter;
use App\Models\Engine;
use App\Models\Product;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars  = Car::all();
        return view('index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $car = new Car;
        $car->name = $request->input('name');

        $car->founded = $request->input('founded');
        $car->description = $request->input('discription');
        $car->save();

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
         $car = Car::find($id);
         $product = Product::find($id);
         print_r($product);
        //  $hq = $car->headquarter;
         //dd($hq);
    //    $hq = Headquarter::find($id);
    //    var_dump($hq);
    //    $hq = $car->headquarter;
        //    var_dump($car->productionDate);
         //var_dump($car->products);
        // return view('show');
         return view('show')->with('car', $car);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $car = Car::find($id);
       
        return view('edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $car = Car::where('id', $id)
        ->update(['name' => $request->input('name'),

        'founded'=> $request->input('founded'),
        'description' => $request->input('discription'),
        
    ]);
        return redirect('/cars');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        // $car = Car::find($id);
        $car->delete();
        return redirect('/cars');
    }
}
