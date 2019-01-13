@extends('layouts.app')
@section('content')
    <div id="cli"></div>
    <script>window.localStorage.setItem('user@jushub:data', "{{Auth::user()}}");</script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection