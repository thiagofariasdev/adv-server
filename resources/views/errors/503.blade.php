@extends('errors::layout')

@section('code', '503')
@section('title', __('Serviço indisponível'))

@section('image')   
    <div style="background-image: url({{ asset('/svg/error_500.svg') }});">
    </div>
@endsection

@section('message', __($exception->getMessage() ?: __('Esta página não está disponível, por favor tente novamente mais tarde.')))
