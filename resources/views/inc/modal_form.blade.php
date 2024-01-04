<div class="modal fade" id="{{$id ?? ''}}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$title ?? ''}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form 
                hx-post="{{$action ?? ''}}" 
                hx-target="#alert-container" 
                hx-on:htmx:after-request="closeModal(`{{$id}}`); refreshCurrentPage(); showAlert()"
                method="{{$method ?? 'GET'}}" 
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    {{ $inputs }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

