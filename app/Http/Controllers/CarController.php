<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Car::all();
        
        $data = ['cars' => $items];

        return view('cars.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $inputCar = new Car;

        /* $inputCar->car_maker = $data['car_maker'];
        $inputCar->model = $data['model'];
        $inputCar->year = $data['year'];
        $inputCar->price = $data['price'];
        $inputCar->description = $data['description']; */

        /* ---- metodo alternativo, creare prima una variabile 'fillable' nel model di riferimento in cui inserire le colonne della tabella da riempire. ---- */
        $inputCar->fill($data);
        /* ---- / ---- */

        $inputCar->save();

        /* return redirect()->route('cars.show', $inputCar->id); */
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function show($id)
    {
        $item = Car::find($id);

        if ($item) {
            $data = ['car' => $item];

            return view('cars.show', $data);
        }

        abort('404');
    } */

    public function show(Car $car)
    {
        if ($car) {
            $data = ['car' => $car];

            return view('cars.show', $data);
        }

        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        if ($car) {
            $data = ['car' => $car];

            return view('cars.edit', $data);
        }

        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();

        $car->update($data);

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index');
    }
}
