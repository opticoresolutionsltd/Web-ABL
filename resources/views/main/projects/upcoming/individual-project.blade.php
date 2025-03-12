@extends('layouts.app')
@section('title')
    <x-title>Upcoming Individual Project - Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="property-single-page">
    @include('includes.basic.header')
    @include('includes.projects.upcoming.section1')
    @include('includes.projects.upcoming.section2')
    @include('includes.basic.footer')
@endsection
