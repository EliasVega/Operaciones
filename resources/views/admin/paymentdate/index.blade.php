@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
REPORTE GENERAL DE PAGOS
@endsection
@section('content')
<main class="main">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="row input-daterange input-group" id="datepicker">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <input type="date" name="start" id="start" class="form-control" value="2022-03-19" placeholder="Fecha Inicial"/>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <input type="date" name="end" id="end" class="form-control" value="" placeholder="Fecha Final"/>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <a type="button" name="filter" id="filter" class="btn btn-lilaR">Filtrar</a>
                            <a type="button" name="refresh" id="refresh" class="btn btn-verR">Refrescar</a>
                            <a href="{{ route('payment.index') }}" class="btn btn-primary ml-3"><i class="fas fa-undo-alt mr-3"></i>Regresar </a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Listado de Pagos
                <a href="{{ route('company.index') }}" class="btn btn-limonR"><i class="fas fa-undo-alt mr-2"></i>Regresar</a></h3>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
            <div class="form-group">
                <label for="totalpagos">Total Pagos</label>
                <a href="{{ route('paymentdate.index') }}" class="btn btn-gris">{{ $payment }}</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover" id="paymentdates">
                    <thead>
                        <tr class="bg-info">
                            <th>Id</th>
                            <th>Operario</th>
                            <th>Medio de Pago</th>
                            <th>Banco Destino</th>
                            <th>Referencia</th>
                            <th>Devengados</th>
                            <th>Deducciones</th>
                            <th>Total</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="bg-info">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@push('scripts')
    <script type="text/javascript">
    $(document).ready(function ()
    {
        $(".daterange").datepicker({
            todayBtn: "linked",
            format: "yyyy-mm-dd",
            autoclose: true,
        });
        load_data();
        function load_data(start = '', end = '')
        {
            $('#paymentdates').DataTable({
                responsive: true,
                autoWidth: false,
                processing: true,
                ajax:{
                    url: '{{ route('paymentdate.index') }}',
                    data: {
                        start: start,
                        end: end,
                    },
                },
                columns:
                [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'nameP'},
                    {data: 'nameB'},
                    {data: 'reference'},
                    {data: 'amount'},
                    {data: 'discount'},
                    {data: 'total'},
                    {data: 'created_at'},
                ],
                dom: '<"pull-left"B><"pull-right"f>rt<"row"<"col-sm-4"l><"col-sm-4"i><"col-sm-4"p>>',
                buttons:
                [
                    'copy', 'csv', 'excel', 'print',
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    }
                ],
                lengthMenu:
                [
                    [
                        10, 25, 50, -1
                    ],
                    [
                        '10 rows', '25 rows', '50 rows', 'Show all'
                    ]
                ],
                "language":{
                    "processing": "Cargando...",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "loadingRecords": "Cargando...",
                    "paginate":{
                        "next": "Siguiente",
                        "previous": "Anterior",
                    },
                    "buttons":{
                        "copy": "Copiar",
                        "print": "Imprimir"
                    },
                },
            });
        }

        $('#filter').click(function () {
            start = $('#start').val();
            end = $('#end').val();
            if (start != '' && end != '') {
                $('#paymentdates').DataTable().destroy();
                load_data(start, end);
            } else {
                alert('Los campos de fecha son requeridos.');
            }
        });
        $('#refresh').click(function () {
            $('#start').val('');
            $('#end').val();
            $('#paymentdates').DataTable().destroy();
            load_data();
        });
    });
    </script>
@endpush
</main>
@endsection




