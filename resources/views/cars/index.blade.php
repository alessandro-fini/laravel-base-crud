@extends('layouts.app')

@section('title', 'Cars')

@section('content')
    <div class="container">
        <h1 class="mt-2">Marketplace</h1>
        <button type="button" class="btn btn-primary btn-lg btn-block mt-4 mb-4"><a href="{{ route('cars.create') }}" class="text-white">Add vehicle</a></button>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Maker</th>
                    <th scope="col">Model</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->car_maker }}</td>
                        <td>{{ $car->model }}</td>
                        <td><a href="{{ route('cars.show', [$car->id]) }}">view</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection