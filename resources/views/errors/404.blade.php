@extends('errors::layout')

@section('code', '404')
@section('title', __('Página não encontrada'))

@section('image')
    <div style="background-image: url({{ asset('/svg/error_404.svg') }});" class="full-bg">
    </div>
@endsection

@section('message', __('Desculpa, essa página não foi encontrada.'))
