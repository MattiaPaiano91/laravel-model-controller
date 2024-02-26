@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <main>
        <h1 class="mb-5">
            My Film list
        </h1>
        <div class="container-fluid">
            <div class="row justify-content-center">
                    <div class="card-container">
                        
                        @foreach ($movies as $movie)
                            
                                <div class="card p-3 text-center ">
                                    <div class="title border-bottom mb-2">
                                        Movie Title: <h4>{{ $movie->title }}</h4>
                                    </div>
                                    <div class="original-title border-bottom mb-2">
                                        Original title: {{ $movie->original_title }}
                                    </div>
                                    <div class="date border-bottom mb-2">
                                        Date: {{ $movie->date }}
                                    </div>
                                </div>
                            
                        @endforeach
                        
                    </div>
            </div>
        </div>
    </main>
@endsection
