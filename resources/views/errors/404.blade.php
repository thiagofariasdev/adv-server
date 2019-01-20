@extends('errors::layout')

@section('code', '404')
@section('title', __('Página não encontrada'))

@section('image')
    <img src="{{ asset('/svg/error_404.svg') }}" class="img-fluid"/>
@endsection

@section('message', __('Desculpa, essa página não foi encontrada.'))
