@extends('layouts.app')
@section('title')
    <x-title>Handover Individual Project - Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="property-single-page">
    @include('includes.basic.header')
    @include('includes.projects.handover.section1')
    @include('includes.basic.footer')
@endsection
