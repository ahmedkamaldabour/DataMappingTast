@extends('inc.master')


@push('styles')

@endpush
@section('content')

    <div class="container mt-5">
        <h1>Match Results</h1>
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                    <tr>
                        <th>table_3_id</th>

                        <th>Arabic Description</th>
                        <th>table_2_id</th>
                        <th>reason</th>
                        <th>table_1_id</th>

                        <th>English Description</th>
                        <th>table_2_id</th>
                        <th>reason</th>
                        <th>table_1_id</th>

                        <th>Latin Description</th>
                        <th>table_2_id</th>
                        <th>reason</th>
                        <th>table_1_id</th>

                        <th>Matching Result</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0 ; $i< $max ;$i++)
                        <tr>
                            <td>
                                {{ $arabic[$i]['table_3_id'] ?? $english[$i]['table_3_id'] ?? $latin[$i]['table_3_id'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $arabic[$i]['arabic_description'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $arabic[$i]['table_2_id'] ?? 'N/A'}}
                            </td>
                            <td>
                                {{ $arabic[$i]['reason'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $arabic[$i]['table_1_id']  ?? 'N/A'}}
                            </td>

                            <td>
                                {{ $english[$i]['english_description'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $english[$i]['table_2_id'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $english[$i]['reason']  ?? 'N/A'}}
                            </td>
                            <td>
                                {{ $english[$i]['table_1_id'] ?? 'N/A' }}
                            </td>

                            <td>
                                {{ $latin[$i]['latin_description'] ?? 'N/A' }}
                            </td>

                            <td>
                                {{ $latin[$i]['table_2_id'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $latin[$i]['reason'] ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $latin[$i]['table_1_id'] ?? 'N/A' }}
                            </td>

                            <td>
                                @if( isset($arabic[$i]) && isset($english[$i]) && isset($latin[$i]) )
                                    Full match (3 out of 3)
                                @elseif( isset($arabic[$i]) && isset($english[$i]) )
                                    2 out of 3 match
                                @elseif( isset($arabic[$i]) && isset($latin[$i]) )
                                    2 out of 3 match
                                @elseif( isset($english[$i]) && isset($latin[$i]) )
                                    2 out of 3 match
                                @else
                                    1 out of 3 match
                                @endif
                            </td>
                        </tr>

                    @endfor

                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
