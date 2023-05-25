@extends('layout.master')
@section('title', 'Halaman Detail Buku')
@section('content')
    <div class="container mx-auto ">
        <h1 class="text-5xl font-bold">
            Detaail Buku
        </h1>

        <h2>
            Title : {{$book->title}} - {{$book->Detail->year}}
        </h2>
        <h2>
            Category : {{$book->Category->category}}
        </h2>
        <h2>
            Author : {{$book->Detail->author}}
        </h2>
        <h2>
            Publisher : {{$book->Detail->publisher}}
        </h2>

        <p>
            Description: <br>
            {{$book->Detail->description}}
        </p>
    </div>
@endsection
