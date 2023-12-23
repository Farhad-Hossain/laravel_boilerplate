<div>
    
<!-- DataTables -->
<link href="{{ asset('b') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('b') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

<!-- Responsive datatable examples -->
<link href="{{ asset('b') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css">


<div class="card">
    <div class="card-body">
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
        </table>
    </div>
</div>


<!-- Required datatable js -->
<script src="{{ asset('b') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('b') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{ asset('b') }}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('b') }}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('b') }}/libs/jszip/jszip.min.js"></script>
<script src="{{ asset('b') }}/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ asset('b') }}/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{ asset('b') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('b') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('b') }}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="{{ asset('b') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('b') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{ asset('b') }}/js/pages/datatables.init.js"></script>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>

</div>