@extends('core::admin.master')

@section('title', __('New cat'))

@section('content')
    {!! BootForm::open()->action(route('admin::index-cats'))->multipart()->role('form') !!}
    @include('cats::admin._form')
    {!! BootForm::close() !!}
@endsection
