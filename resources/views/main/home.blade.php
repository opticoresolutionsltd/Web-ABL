@extends('layouts.app')
@section('title')
    <x-title>Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="index-page">
        @include('includes.basic.header')
        @include('includes.home.section1')
        @include('includes.home.section2')
        @include('includes.home.section3')
        @include('includes.home.section4')
        @include('includes.home.section5')
        @include('includes.basic.footer')
@endsection
