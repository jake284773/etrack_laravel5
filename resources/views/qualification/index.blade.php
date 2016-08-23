@extends('layouts.simple')

@section('title', 'Qualifications')

@section('page')
    <table class="table">
        <thead>
        <tr>
            <th>QN</th>
            <th>Name</th>
            <th>Pathway</th>
            <th>Level</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($qualifications as $qualification)
            <tr>
                <td><a href="{{ route('qualification.show', $qualification->id) }}">{{ $qualification->qn }}</a></td>
                <td>{{ $qualification->name }}</td>
                <td>{{ $qualification->pathway }}</td>
                <td>{{ $qualification->level }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('qualification.create') }}" class="btn btn-primary">New</a>
@endsection