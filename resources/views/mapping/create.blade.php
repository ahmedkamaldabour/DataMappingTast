@extends('inc.master')

@section('content')
    <h1>Add Mapping Data</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mapping.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="table1_id">Table 1 ID</label>
            <select name="main_data_id" class="form-control" required>
                @foreach($mainData as $data)
                    <option value="{{ $data->id }}">{{ $data->description }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="condition_selector">Condition Selector</label>
            <select name="condition_selector" class="form-control" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
