@extends('layouts.main')

@section('content')

    <section class="container mt-5">
    
    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">State</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">Postal Code</th>
            <th scope="col">Price/Day</th>
            </tr>
        </thead>

        <tbody>

            @foreach($voyages as $element)

            <tr>
            <td scope="row">{{$element['state']}}</td>
            <td>{{$element['city']}}</td>
            <td>{{$element['address']}}</td>
            <th>{{$element['postal_code']}}</th>
            <td>{{$element['price_day']}}</td>
            </tr>

            @endforeach

        </tbody>

    </table>
    
    </section>

    <section class="container">
        {{$voyages->links()}}
    </section>

@endsection