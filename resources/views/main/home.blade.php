@extends('layouts.app')
@section('title')
    <x-title>Home</x-title>
@endsection
@section('container')
    <body>
        Here Goes Everything
        @include('includes.basic.header')
        @include('includes.home.section1')
        @include('includes.home.section2')
        @include('includes.home.section3')
        @include('includes.home.section4')
        @include('includes.home.section5')
        @include('includes.home.section6')
        @include('includes.home.section7')
        @include('includes.home.section8')
        @include('includes.basic.footer')
@endsection
