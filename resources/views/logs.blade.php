@extends('base')
@section('content')

    <h2 class="sub-header">Logs</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th><a href="{{ url('logs/code') }}">Code</a></th>
                <th><a href="{{ url('logs/access') }}">Acessos</a></th>
                <th><a href="{{ url('logs/ip') }}">IPS</a></th>
                <th><a href="{{ url('logs/city') }}">Localização Informada</a></th>
                <th><a href="{{ url('logs/approximate_location') }}">Localização Capturada (ip)</a></th>
                <th><a href="{{ url('logs/created_at') }}">Primeiro Acesso</a></th>
            </tr>
            </thead>
            <tbody>
            @forelse ($visitors as $visitor)
                <tr>
                    <td>{{ $visitor['code'] }}</td>
                    <td>{{ $visitor['logs']->count() }}</td>
                    <td>
                        <ul>
                        @foreach($visitor['logs']->unique('ip') as $log)
                            <li>{{ $log['ip'] }}</li>
                        @endforeach
                        </ul>
                    </td>
                    @if(!$visitor['cep'])
                    <td>não informado</td>
                    @else
                    <td> {{ $visitor['cep'] }} ({{ $visitor['city'] }})</td>
                    @endif
                    <td>
                        <ul>
                            @foreach($visitor['logs']->unique('ip') as $log)
                                <li>{{ $log['approximate_location'] }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ date("d/m/Y",strtotime($visitor['created_at'] )) }} {{ date("H:i:s",strtotime($visitor['created_at'] )) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Sem Registros</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <?php echo $visitors->render(); ?>
    </div>

@endsection