@extends('layouts.layout')

@section('content')
    <section class="pages container">
        <div class="page page-about">
            <h1 class="text-capitalize">Página no encontrada</h1>
            <div class="divider-2" style="margin: 35px 0;"></div>
            <p><a href="{{ url()->previous() }}">Volver</a></p>
        </div>
    </section>
@endsection
