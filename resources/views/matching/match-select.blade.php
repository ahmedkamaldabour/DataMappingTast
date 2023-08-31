@extends('inc.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Match Select</h1>
            </div>
        </div>


    <form action="{{ route('matching.match') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select a Match</label>
            <select class="form-control" id="exampleFormControlSelect1" name="match_selected">
                @foreach($matching_data as $index => $match)
                    <option value="{{ $match }}">{{ $match }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
