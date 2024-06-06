@extends('adminlte::page')

@section('title', 'Estadísticas')

@section('content_header')
    <h1>Estadísticas</h1>
@stop

@section('content')
   
       
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Rentas Totales</h3>
                </div>
                <div class="card-body">
                        <h2>{{ $reservasTotales }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Clientes Registrados</h3>
                </div>
                <div class="card-body">
                        <h2>{{ $clientesRegistrados }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Total de vehiculos</h3>
                </div>
                <div class="card-body">
                
                        <h2>{{ $vehiculosOcupados }}</h2>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
<<<<<<< HEAD
    
@stop
=======
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    var gananciasData = {!! isset($gananciasPorMes) ? json_encode($gananciasPorMes) : '[]' !!};
    if (gananciasData.length > 0) {
        var meses = gananciasData.map(function(item) { return 'Mes ' + item.mes; });
        var ganancias = gananciasData.map(function(item) { return item.ganancias; });

        var gananciasChart = new Chart(document.getElementById('gananciasChart'), {
            type: 'bar',
            data: {
                labels: meses,
                datasets: [{
                    label: 'Ganancias',
                    data: ganancias,
                    backgroundColor: 'rgba(54, 162, 235, 0.8)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 10,
                        bottom: 10
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontColor: '#666'
                        }
                    }],
                    xAxes: [{
                        barPercentage: 0.6,
                        ticks: {
                            fontColor: '#666'
                        }
                    }]
                }
            }
        });
    }
</script>

@stop
>>>>>>> 7632a3b8d148860bec23309995137750ffefaa4f
