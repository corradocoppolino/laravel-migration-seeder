@extends('layouts.main')

@section('content')

<section class="container mt-5">
    
    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Partenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Data</th>
            <th scope="col">Prezzo</th>
            </tr>
        </thead>

        <tbody>

            @foreach($flights as $element)

            <tr>
            <td scope="row">{{$element['city_partenza']}}</td>
            <td>{{$element['city_arrivo']}}</td>
            <td>{{$element['date']}}</td>
            <th>{{$element['price']}}</th>
            </tr>

            @endforeach

        </tbody>

    </table>
    
    </section>

    <section class="container">
        {{$flights->links()}}
    </section>

@endsection