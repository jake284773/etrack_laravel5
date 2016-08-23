@extends('layouts.form')

@section('title', 'New subject sector')

@section('form')
    {!! BootForm::open()->post()->action(route('subject_sector.store')) !!}
        {!! BootForm::text('Number', 'number') !!}
        {!! BootForm::text('Name', 'name') !!}
        {!! BootForm::submit('Add', 'btn-primary') !!}
    {!! BootForm::close() !!}

@endsection