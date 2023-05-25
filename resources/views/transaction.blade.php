@extends('layout.master')
@section('title', 'Halaman Transaksi User')
@section('content')
    <div class="container mx-auto">
        <div>
            <h2 class="text-5xl">
                Daftar Transaksi {{ $user->name }}
            </h2>
            <div>
                @foreach ($transactions as $transaction)
                    <div class="shadow-md my-3 p-5">
                        <h1 class="text-2xl font-bold">
                            Tanggal : {{ date('j F Y', strtotime($transaction->transaction_date)) }}
                        </h1>
                        <h1>
                            {{$transaction->Book->title}}
                        </h1>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
