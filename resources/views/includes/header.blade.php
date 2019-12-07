<header>
    <input type="checkbox" id="navcheck" role="button" title="menu">
    <label for="navcheck" aria-hidden="true" title="menu">
	<span class="burger">
		<span class="bar">
			<span class="visuallyhidden">Menu</span>
		</span>
	</span>
    </label>
    <nav id="menu">
        <a href="{{route('index')}}">Start</a>
        <a href="{{route('rank')}}">Ranking restauracji</a>
        <a href="{{route('map')}}">Mapa</a>
        <a href="{{route('team')}}">Szwadron TZK</a>
    </nav>
</header>
