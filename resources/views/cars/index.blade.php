@extends('layouts.app')

@section('title', 'Cars')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <h1 class="mt-2">Marketplace</h1>
        <button type="button" class="btn btn-primary btn-lg btn-block mt-4 mb-4"><a href="{{ route('cars.create') }}" class="text-white">Add vehicle</a></button>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Car Maker</th>
                    <th scope="col">Model</th>
                    <th scope="col">Fuel</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->car_maker }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->fuel }}</td>
                        <td>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-outline-info">view</a>
                            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-outline-warning ml-1">edit</a>
                            <form action="{{ route('cars.destroy', $car->id) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger ml-1">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection