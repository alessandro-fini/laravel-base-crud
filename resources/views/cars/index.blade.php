@extends('layouts.app')

@section('title', 'Cars')

@section('content')
    <div class="container">
        <h1>Marketplace</h1>
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