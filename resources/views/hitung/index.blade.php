@extends('app')

@section('content')
<style>
    .th{
        background-color: ##DA9C9C;
    }
</style>
    <div class="card mb-3">
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        @foreach ($kriterias as $kriteria )
                        <th>{{$kriteria->nama_kriteria}} ({{ $kriteria->atribut}} :{{$kriteria->bobot}} )</th>
                        @endforeach
                        
                        
                    </tr>
                </thead>
                @foreach ($nilais as $key=> $value)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$alternatifs[$key]->nama_alternatif}}</td>
                        @foreach ($value as $k => $v)
                            <td>{{$v}}</td>
                        
                        @endforeach
                        
                    </tr>
                @endforeach
                <tfoot>
                    <tr>
                        <td colspan="2">Min</td>
                        @foreach ($minmax as $key => $value)
                            <td>{{$value['min']}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td colspan="2">Max</td>
                        @foreach ($minmax as $key => $value)
                            <td>{{$value['max']}}</td>
                        @endforeach
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">Ternormalisasi</div>
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        @foreach ($kriterias as $kriteria )
                        <th>{{$kriteria->id_kriteria}}</th>
                        @endforeach
                        
                        
                    </tr>
                </thead>
                @foreach ($normalisasi as $key=> $value)
                    <tr>
                        <td>{{$key}}</td>
                        @foreach ($value as $k => $v)
                            <td>{{round($v,4)}}</td>
                        
                        @endforeach
                        
                    </tr>
                @endforeach
                
            </table>
        </div>
    </div>

    <div class="card mb-3">
    <div class="card-header">Terbobot</div>
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        @foreach ($kriterias as $kriteria )
                        <th>{{$kriteria->id_kriteria}}</th>
                        @endforeach
                        
                        
                    </tr>
                </thead>
                @foreach ($terbobot as $key=> $value)
                    <tr>
                        <td>{{$key}}</td>
                        @foreach ($value as $k => $v)
                            <td>{{round($v,4)}}</td>
                        
                        @endforeach
                        
                    </tr>
                @endforeach
                
            </table>
        </div>
    </div>

    <div class="card mb-3">
    <div class="card-header">Perangkingan</div>
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Total</th>
                        
                    </tr>
                </thead>
                @foreach ($rank as $key=> $value)
                    <tr>
                        <td>{{$value}}</td>
                        <td>{{$key}}</td>
                        <td>{{$alternatifs[$key]->nama_alternatif}}</td>
                        
                            <td>{{round($total[$key],4)}}</td>
                        
                    </tr>
                @endforeach
                
            </table>
        </div>
        <div class="card-body">
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>

            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    Tampilan grafik diatas mengikuti nilai dari table Perangkingan.
            
                </p>
            </figure>

            <script>
                Highcharts.chart('container', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Grafik Perangkingan SPK Metode SAW',
                        
                    },
                
                    xAxis: {
                        categories: <?=json_encode($categories)?>,
                        
                    },
                    
                    series: [
                        {
                            name: 'Total',
                            data: <?=json_encode($data)?>,
                        },
                        
                    ]
                });

            </script>
        </div>
    </div>




@endsection


