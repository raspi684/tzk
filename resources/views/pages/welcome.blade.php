@extends('layouts.app')

@section('content')
    <div id="welcome">
        <div id="hero">
            <p>Order Techniczych Zakładów Kulinarnych</p>
        </div>
        <div class="panel">
            <h1>Ale o co tu chodzi?</h1>
            <p>
                Jesteśmy niezależną grupą uczniów jednego z najlepszych technikum zajmującą się recenzją lokali bliskich
                naszej szkoły
            </p>
        </div>
        <img src="{{asset('images/img2.jpg')}}" alt="food">
        <div class="panel">
            <h1>Ranking Restauracji</h1>
            <p>
                <a class="front_butts" href="{{route('rank')}}">Sprawdź aktualny ranking restauracji</a>
            </p>
        </div>
        <img src="{{asset('images/img3.jpg')}}" alt="food">
        <div class="panel">
            <h1>Mapa restauracji</h1>
            <p>
                <a class="front_butts" href="{{route('map')}}">Sprawdź wszystkie pozycje z rankingu na mapie</a>
            </p>
        </div>
        <img src="{{asset('images/img1.jpg')}}" id="img3" alt="food">
        <div class="panel">
            <h1>Szwadron Technicznych Zakładów Kulinarnych</h1>
            <p>
                <a class="front_butts" href="{{route('team')}}">Sprawdź recenzentów</a>
            </p>
        </div>
        <img src="{{asset('images/img7.jpg')}}" id="img4" alt="food">
        <div class="panel">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <span class="text-success">{{ Session::get('success') }}</span>
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @else
                <h1>Mało?</h1>
                <p>
                    Możesz wpisać się na nasz newsletter, a co jakiś będziemy Ci przesyłać nowości. Spokojnie, spamu nie
                    lubimy, więc dostarczymy tylko treści najwyższyj jakości, a jeśli się rozmyślisz to możesz
                    zrezygnować z otrzymywania nowych
                    wiadomości.
                </p>
                <form action="newsletter/signup" method="POST" id="newsletter-form">
                    @csrf
                    <input type="text" id="name" name="name" placeholder="Twoje imię" required>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <input type="email" id="email" name="email" placeholder="Twój email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="checkbox" name="accept" id="accept-checkbox" required>
                    <label for="accept-checkbox">
                        Wyrażam zgodę na przetwarzanie moich danych w celu komunikowania się drogą mailową.
                    </label>
                    @if ($errors->has('accept'))
                        <span class="text-danger">{{ $errors->first('accept') }}</span>
                    @endif
                    <br>
                    <input type="submit" value="Zapisz mnie!" class="front_butts">
                </form>
            @endif
        </div>
    </div>

@endsection
