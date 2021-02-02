@extends('layouts.app')

    @section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <ol>{{ $error }}</ol>
                    
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="container alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class=" container d-flex justify-content-between">
        <div class="sidebar col-3 mt-4  py-4" >
            <a class="btn btn-outline-dark btn-block" href="/admin">Таблица отклики</a>
            <a class="btn btn-outline-dark btn-block" href="/catalogs">Таблица секции</a>
            <a class="btn btn-outline-dark btn-block" href="/treners">Таблица тренеры</a>
            <a class="btn btn-outline-dark btn-block" href="/gallery-table">Таблица галереи</a>
        </div>
        <div class="context col-7 pt-3 d-flex">
            @yield('context')
        </div>
    </div>
@endsection
