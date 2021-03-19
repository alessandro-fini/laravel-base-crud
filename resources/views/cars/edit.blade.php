@extends('layouts.app')

@section('title', 'Edit a vehicle')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form class="mt-4" action="{{ route('cars.update', $car->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="input_maker">Car maker</label>
                <input type="text" class="form-control" id="input_maker" name="car_maker" value="{{ $car->car_maker }}">
            </div>
            <div class="form-group">
                <label for="input_model">Car model</label>
                <input type="text" class="form-control" id="input_model" name="model" value="{{ $car->model }}">
            </div>
            <div class="form-group">
                <label for="input_year">Year</label>
                <input type="text" class="form-control" id="input_year" name="year" value="{{ $car->year }}">
            </div>
            <div class="form-group">
                <label for="input_fuel">Fuel</label>
                <select name="fuel" id="input_fuel" class="form-control">
                    <option value="">---</option>
                    <option value="gasoline" {{ ($car->fuel == 'gasoline') ? 'selected=selected' : '' }}>gasoline</option>
                    <option value="diesel" {{ ($car->fuel == 'diesel') ? 'selected=selected' : '' }}>diesel</option>
                </select>
            </div>
            <div class="form-group">
                <label for="input_price">Price</label>
                <input type="text" class="form-control" id="input_price" name="price" value="{{ $car->price }}">
            </div>
            <div class="form-group">
                <label for="input_description">Description</label>
                <textarea class="form-control" id="input_description" rows="5" name="description">{{ $car->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection

