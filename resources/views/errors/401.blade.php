@extends('errors::layout')

@section('code', '401')
@section('title', __('Não autorizado'))

@section('image')
    <img src="{{ asset('/svg/error_419.svg') }}"/>
@endsection

@section('message', __('Você não tem permissão para acessar essa página.'))
