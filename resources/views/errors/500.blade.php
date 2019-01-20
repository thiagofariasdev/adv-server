@extends('errors::layout')

@section('code', '500')
@section('title', __('Error'))

@section('image')
    <img src="{{ asset('/svg/error_500.svg') }}" class="img-fluid"/>
@endsection

@section('message', __('Ops, Algo deu errado aqui, mas já estamos trabalhando nisso.'))
