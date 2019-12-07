@extends('layouts.app')

@section('content')
    <div id="team">
        <div id="hero">
            <p>Szwadron TZK</p>
        </div>
        <div class="panel">
            <h1>Nasi Recenzenci:</h1>
            <p>
                Wsród naszych cennych recenzentów znajdują się takie sławy "Schabciu" czy "Drabina"<br/>
                ale też inni, mniej znani :)
            </p>
            <div class="flexbox">
                <div>
                    <img src="{{asset('img/S.png')}}" alt="person">
                    <h2>"Schabciu"</h2>
                </div>
                <div>
                    <img src="{{asset('img/G.png')}}" alt="person">
                    <h2>"Drabina"</h2>
                </div>
                <div>
                    <img src="{{asset('img/F.png')}}" alt="person">
                    <h2>"Siurcz"</h2>
                </div>
            </div>
        </div>
    </div>

@endsection
