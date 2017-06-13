@extends('layouts.frontend')

@section('content')
    <!-- Page Banner Area
    ============================================ -->
    <div id="page-banner" class="page-banner-area top-header-space-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-banner text-center"><h2>Contact</h2></div>
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li><span>Contact</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Demo Content Area
    ============================================ -->
    <div class="demo-content-area pb-90 pt-90">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
@endsection

@push('plugin_scripts')
<!-- Particles Active JS
============================================ -->
<script src="{{ url('assets/frontend') }}/js/app.js"></script>
@endpush
