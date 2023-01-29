@extends('dashboard.layouts.master')
@section('title',  __("backend.fileManager"))
@push("after-styles")
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link href="{{ asset('assets/file-manager/css/file-manager.css') }}" rel="stylesheet">
    <style>
        .fm-navbar div div div:last-child {
            display: none;
        }
        iframe{
            width: 100%;
            height: 600px;
        }
    </style>
@endpush
@section('content')
    <div class="padding" style="padding-bottom: 0">
        <div class="box"  style="padding-bottom: 0">
            <div class="box-header dker">
                <h3>{!! __("backend.fileManager") !!}</h3>
            </div>
            <div class="white dk">
                <iframe src="{{ route("FilesManager") }}"></iframe>
            </div>
        </div>
    </div>
@endsection

