@extends('layouts.master')

@section('title', 'Subject sectors')

@section('content')
    <h1 class="page-header">Subject sectors</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($subjectSectors as $subjectSector)
            <tr>
                <td>{{ $subjectSector->number }}</td>
                <td>{{ $subjectSector->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('subject_sector.create') }}" class="btn btn-primary">Create new</a>
@endsection