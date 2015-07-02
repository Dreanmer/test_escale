@extends('base')
@section('content')

    <h2 class="sub-header">Logs</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Sem Registros</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection