@extends('layouts.app')
@section('title')
    <x-title>Profile - Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="property-single-page">
    @include('includes.basic.header')
    @include('includes.profile.section1')
    @include('includes.profile.section2')
    @include('includes.profile.section3')
    @include('includes.basic.footer')
@endsection
