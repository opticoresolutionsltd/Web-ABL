@extends('layouts.app')
@section('title')
    <x-title>Message from MD - Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="property-single-page">
    @include('includes.basic.header')
    @include('includes.message.section1')
    @include('includes.basic.footer')
@endsection
