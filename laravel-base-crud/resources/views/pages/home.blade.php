@extends('layouts.main_layout')
@section('content')
    <div id="home">
        <div class="container">
            <h1>I Nostri Ospiti</h1>

            <div class="list_container">
                <ul class="flex_wrap">
                    @foreach ($ospiti as $ospite)
                        <li>
                            <a href="{{ route('ospite', $ospite->id) }}">
                                <div class="card">
                                    <h3>{{ $ospite['name'] }} {{ $ospite['lastname'] }}</h3>
                                    
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection