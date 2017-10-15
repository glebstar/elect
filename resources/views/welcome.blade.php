@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
@endsection

@section('content')
    <h1>Electrician</h1>
    <div class="row btn-area">
        <a class="btn btn-primary btn-new-game" href="#">New Game</a>
        <a class="btn btn-primary btn-top-winners" href="#">Top Winners</a>
    </div>
    <div class="elect-area">
        <div class="row area">
        </div>
        <div class="row digits d-6">
            <div class="digit d-5"></div>
            <div class="digit d-4"></div>
            <div class="digit d-3"></div>
            <div class="digit d-2"></div>
            <div class="digit d-1"></div>
            <div class="digit d-0"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.msgbox.min.js') }}"></script>
    <script src="{{ mix('/js/main.js') }}"></script>
@endsection