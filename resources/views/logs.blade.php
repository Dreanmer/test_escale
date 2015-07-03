@extends('base')
@section('content')

    <h2 class="sub-header">Logs</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th><a href="{{ $order == "code" && $direction == 'asc' ? url('logs/code/desc') : url('logs/code/asc') }}">Code</a></th>
                <th><a href="{{ $order == "hits" && $direction == 'asc' ? url('logs/hits/desc') : url('logs/hits/asc') }}">Acessos</a></th>
                <th><a href="{{ $order == "ip" && $direction == 'asc' ? url('logs/ip/desc') : url('logs/ip/asc') }}">IPS</a></th>
                <th><a href="{{ $order == "city" && $direction == 'asc' ? url('logs/city/desc') : url('logs/city/asc') }}">Localização Informada</a></th>
                <th><a href="{{ $order == "approximate_location" && $direction == 'asc' ? url('logs/approximate_location/desc') : url('logs/approximate_location/asc') }}">Localização Capturada (ip)</a></th>
                <th><a href="{{ $order == "visitor.created_at" && $direction == 'asc' ? url('logs/visitor.created_at/desc') : url('logs/visitor.created_at/asc') }}">Primeiro Acesso</a></th>
            </tr>
            </thead>
            <tbody>
            @forelse ($visitors as $visitor)
                <tr>
                    <td>{{ $visitor['code'] }}</td>
                    <td>{{ $visitor['hits'] }}</td>
                    <td>{{ $visitor['ip'] }}</td>
                    @if(!$visitor['cep'])
                    <td>não informado</td>
                    @else
                    <td> {{ $visitor['cep'] }} ({{ $visitor['city'] }})</td>
                    @endif
                    <td>{{ $visitor['approximate_location'] }}</td>
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