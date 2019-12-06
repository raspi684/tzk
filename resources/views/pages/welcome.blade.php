@extends('layouts.app')

@section('content')
    <div id="welcome">
        <div id="hero">
            <p>Order Techniczych Zakładów Kulinarnych</p>
            <img src="{{asset('img/img6.jpg')}}" alt="hero-image">
        </div>
        <div class="panel">
            <h1>Ale o co tu chodzi?!</h1>
            <p>
                Jesteśmy niezależną grupą uczniów jednego z najlepszych<br/>
                technikum zajmującą się recenzją lokali bliskich naszej szkoły
            </p>
        </div>
        <img src="{{asset('img/img2.jpg')}}" class="images" alt="food">
        <div class="panel">
            <h1>Ranking Restauracji</h1>
            <p>
                <a class="front_butts" href="{{route('rank')}}">Sprawdź aktualny ranking restauracji</a>
            </p>
        </div>
        <img src="{{asset('img/img3.jpg')}}" class="images" alt="food">
        <div class="panel">
            <h1>Mapa restauracji</h1>
            <p>
                <a class="front_butts" href="{{route('map')}}">Sprawdź wszystkie pozycje z rankingu na mapie</a>
            </p>
        </div>
        <img src="{{asset('img/img1.jpg')}}" class="images" id="img3" alt="food">
        <div class="panel">
            <h1>Szwadron Technicznych Zakładów Kulinarnych</h1>
            <p>
                <a class="front_butts" href="{{route('team')}}">Sprawdź recenzentów</a>
            </p>

        </div>
        <img src="{{asset('img/img7.jpg')}}" class="images" id="img4" alt="food">
    </div>

@endsection
