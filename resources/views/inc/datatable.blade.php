<x-datatable_lib />
<div class="card">
    
    <div class="card-header d-flex justify-content-between">
        <span>{{ isset($title) ? $title : ''}}</span>
        {{ $button ?? '' }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        @foreach($headers as $header)
                        <th>{{ $header }}</th>
                        @endforeach
                    </tr>
                </thead>

                <tbody>
                    {{ $body }}
                </tbody>
                <tfoot>
                    <tr>
                        @foreach($headers as $header)
                        <th>{{ $header }}</th>
                        @endforeach
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    {{ isset($html) ? $html : '' }}

</div>

<script>
$(document).ready(function() {
    var table = $('#datatable').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
    } );
    
    table.buttons().container()
        .appendTo( '#datatable_wrapper .col-md-6:eq(0)' );
} );
</script>
<link href="{{asset('b')}}/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<script src="{{asset('b')}}/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('b')}}/plugins/datatable/js/jquery.dataTables.min.js"></script>

{{ isset($js) ? $js : '' }}