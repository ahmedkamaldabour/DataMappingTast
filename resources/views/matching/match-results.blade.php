@extends('inc.master')

@section('content')

    <div class="container">
        <h1>Match Results</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Table 3 ID</th>
                        <th>{{$column}}</th>
                        <th>Table 2 ID</th>
                        <th>Reason</th>
                        <th>Table 1 ID</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($mapped_data as $data)
                        <tr>
                            <td>{{ $data['table_3_id'] }}</td>
                            <td>{{ $data[$column] }}</td>
                            <td>{{ $data['table_2_id'] }}</td>
                            <td>{{ $data['reason'] }}</td>
                            <td>{{ $data['table_1_id'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
