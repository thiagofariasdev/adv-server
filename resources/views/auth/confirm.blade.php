@extends('layouts.app')
@section('content')
    <div class="flex-center full bg-dark">
        <div class="p-3 bg-light">
            <h1> Obrigado por registrar-se </h1>
            <p>Para continuar utilizando o <a href="/">{{config('app.short')}}</a> verifique sua caixa de emails</p>
            <span class="badge badge-danger">Esta página já pode ser fechada.</span>
        </div>
    </div>
@endsection