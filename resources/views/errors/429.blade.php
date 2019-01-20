@extends('errors::layout')

@section('code', '429')
@section('title', __('Muita coisa para fazer'))

@section('image')
    <img src="{{ asset('/svg/error_429.svg') }}"/>
@endsection

@section('message', __('Desculpa. Nossos servidores estão muito ocupados agora, mas logo voltarão ao normal ^^'))
