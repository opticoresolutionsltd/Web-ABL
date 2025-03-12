@extends('layouts.app')
@section('title')
    <x-title>Contact - Alliance Builders Limited</x-title>
@endsection
@section('container')
    <body class="contact-page">
    @include('includes.basic.header')
    @include('includes.contact.section1')
    @include('includes.contact.section2')
    @include('includes.contact.section3')
    @include('includes.contact.section4')
    @include('includes.basic.footer')
@endsection
