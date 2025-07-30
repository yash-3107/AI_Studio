@extends('layouts.master')
@section('title')
    Dashboard Main Page
@endsection
@section('content')
    <!-- Start::page-header -->
    <div id="parent-main">
        
    </div>
    <!-- End::page-header -->


@endsection
@push('script')
<script src="{{asset('assets/js/app_studio.js')}}" defer></script>
@endpush
@push('styles')
<link href="{{ asset('assets/css/app_studio.css') }}" rel="stylesheet">
@endpush