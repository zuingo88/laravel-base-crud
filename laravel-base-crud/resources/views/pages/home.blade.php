@section('content')
    <div id="home">
        <div class="container">
            <h1>I Nostri Ospiti</h1>

            <div class="list_container">
                <ul class="flex_wrap">
                    @foreach ($movies as $movie)
                        <li>
                            <a href="{{ route('movie', $movie->id) }}">
                                <div class="card">
                                    <h3>{{ $movie['title'] }}</h3>
                                    <h5>Voto: {{ $movie['vote'] }}</h5>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection