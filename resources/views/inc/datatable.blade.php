<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>{{ $title ?? 'Title' }}</span>
        {{ $button ?? '' }}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
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

    {{ $html }}
</div>

<script>
$(document).ready(function() {
    var table = $('#example2').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print']
    } );
    
    table.buttons().container()
        .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
} );
</script>

{{ $js ?? '' }}