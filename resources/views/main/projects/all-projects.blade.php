@extends('layouts.app')
@section('title')
    <x-title>All Projects - Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="properties-page">
    @include('includes.basic.header')
    @include('includes.projects.section1')
    @include('includes.basic.footer')
@endsection
