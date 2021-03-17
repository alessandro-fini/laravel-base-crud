@extends('layouts.app')

@section('title', 'Info')

@section('content')
    <div class="container">
        <h1>Marketplace</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Maker</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->car_maker }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->price . ' $' }}</td>
                    <td>{{ $car->description }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection