@extends('errors::layout')

@section('code', '403')
@section('title', __('Acesso negado'))

@section('image')
    <img src="{{ asset('/svg/error_419.svg') }}"/>
@endsection

@section('message', __($exception->getMessage() ?: __('Você não tem permissão para acessar essa página.')))
