@extends('inc.master')

@section('content')
    <h1>Mapping Data</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Description</th>
            <th>Table 1 ID</th>
            <th>Condition Selector</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mappingData as $data)
            <tr>
                <td>{{ $data->description }}</td>
                <td>{{ $data->main_data_id }}</td>
                <td>{{ $data->condition }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('mapping.create') }}" class="btn btn-primary">Add Mapping</a>

    <a href="{{ route('matching.select-match') }}" class="btn btn-primary">Match</a>

    <a href="{{ route('matching.match-all') }}" class="btn btn-primary">Match All</a>
@endsection
