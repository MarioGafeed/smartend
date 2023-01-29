@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.final.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    {{ trans('installer_messages.final.title') }}
@endsection

@section('container')

    <div class="buttons">
        <br>
        <strong>Default Administrator User:</strong>
        <div style="padding: 10px;border: 1px dashed red">
            Email : <strong style="color: red">admin@site.com</strong><br>
            Password: <strong style="color: red">admin</strong>
        </div>
        <br>
        <a href="{{ route('adminHome') }}" class="button">{{ trans('installer_messages.final.exit') }}</a>

        <br><br>
        <strong>
            If you want to import the demo contents you can follow the instructions mentioned <a target="_blank" href="https://smartend.app/docs/#demo">On this Guide</a>
        </strong>
    </div>
    <style>
        .alert{
            color: #73ba00;
            font-size: 17px;
        }
    </style>
@endsection
