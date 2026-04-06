@extends('layouts.main')

@section('title', 'Empresas')

@section('content')
    <x-header-page model="Empresas" route="empresas.create" />
    <div id="table" class="body-page"></div>
@endsection