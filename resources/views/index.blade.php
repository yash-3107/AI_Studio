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
    <script src="{{asset('assets/js/agent_studio.js')}}" defer></script>
@endpush
@push('styles')
    <link href="{{ asset('assets/css/app_studio.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/agent_studio.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/projects.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/flow-deployment.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/component-deployment.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/observability.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/manage-users.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/file-manager.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/audit-trail.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/key-vault.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/support.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/subscription-plans.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/billing.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/agent_studio_css/faqs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app_studio.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/apps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/deployments.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/observability.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/manage_users.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/file_manager.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/audit_trail.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/key_vault.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/subscription_plans.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/support.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/billings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/css_app_studio/faqs.css') }}" rel="stylesheet">
@endpush