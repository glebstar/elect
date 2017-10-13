@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
@endsection

@section('content')
    <h1>Electrician</h1>
    <div class="elect-area">
        <div class="row">
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('/js/main.js') }}"></script>
@endsection