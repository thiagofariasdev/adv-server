@extends('errors::layout')

@section('code', '419')
@section('title', __('Ops!'))

@section('image')
    <img src="{{ asset('/svg/error_419.svg') }}" class="img-fluid"/>
@endsection

@section('message', __('Desculpa, sua sessão terminou.'))
