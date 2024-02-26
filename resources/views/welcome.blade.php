@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <div class="container-fluid">
       <div class="row">
            <div class="col">
                 <ul>
                    @foreach ($movies as $movie)
                        <li>
                            <div class="card-container">
                                <div class="title">
                                    Movie Title: {{ $movie->title }}
                                </div>
                                <div class="original-title">
                                Original title: {{ $movie->original_title }}
                                </div>
                                <div class="date">
                                Date: {{ $movie->date }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
            </div>
       </div>
    </div>
@endsection
