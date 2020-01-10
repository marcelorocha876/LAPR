{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'REGES')


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('footer')

    <div class="float-right d-none d-sm-inline">
        REGES
    </div>
    <!-- Default to the left -->
    <strong><a href="{{url('/about') }}">Sobre</a></strong>
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop
