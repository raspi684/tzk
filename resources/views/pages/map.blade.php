@extends('layouts.app')

@section('content')
    <div id="map">
        <div id="hero">
            <p>Mapa restauracji</p>
        </div>
        <div class="panel">
            <h1>Aktualna mapa Restauracji</h1>
            <p>Tutaj znajdziesz wszyskie restauraje odwiedzone przez naszych recenzentów</p>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.864260716919!2d19.1055649249778!3d50.81461537360082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4710b5d7b7f840c7%3A0xcc31600bad675a19!2sTechniczne%20Zak%C5%82ady%20Naukowe%20im.%20gen.%20W%C5%82adys%C5%82awa%20Sikorskiego!5e0!3m2!1spl!2spl!4v1575212270525!5m2!1spl!2spl"
                frameborder="0" allowfullscreen="true"></iframe>

        </div>
    </div>

@endsection
