@extends('layouts.app')
@section('title')
    <x-title>Gallery - Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="properties-page">
    @include('includes.basic.header')
    @include('includes.gallery.section1')
    @include('includes.basic.footer')
@endsection
