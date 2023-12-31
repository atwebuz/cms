@extends('core::admin.master')

@section('title', $model->title)

@section('content')
    {!! BootForm::open()->put()->action(route('admin::update-term', [$taxonomy->id, $model->id]))->multipart()->role('form') !!}
    {!! BootForm::bind($model) !!}
    @include('taxonomies::admin._form-term')
    {!! BootForm::close() !!}
@endsection
