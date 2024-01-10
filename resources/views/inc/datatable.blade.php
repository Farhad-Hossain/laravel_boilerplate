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
{{ isset($js) ? $js : '' }}