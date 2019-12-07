@extends('layouts.app')

@section('content')
    <div id="rank">
        <div id="hero">
            <p>Ranking</p>
        </div>
        <div class="panel">
            <table>
                <tr>
                    <th>Restauracja</th>
                    <th>Cena</th>
                    <th>Dystans</th>
                    <th>Smak</th>
                    <th>Czas Oczekiwania</th>
{{--                    <th>Ocena końcowa</th>--}}
                </tr>
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{$restaurant->name}}</td>
                        <td>{{$restaurant->price}}/10</td>
                        <td>{{$restaurant->km}}</td>
                        <td>{{$restaurant->taste}}/10</td>
                        <td>{{$restaurant->waitingTime}} min</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
