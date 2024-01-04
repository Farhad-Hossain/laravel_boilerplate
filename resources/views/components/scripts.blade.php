<script src="{{asset('b')}}/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('b')}}/js/jquery.min.js"></script>
<script src="{{asset('b')}}/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('b')}}/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('b')}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('b')}}/plugins/select2/js/select2-custom.js"></script>
<!--app JS-->
<script src="{{asset('b')}}/js/app.js"></script>
<script src="{{asset('b')}}/js/ajax.js"></script>
<script>
    function id(id)
    {
        return document.getElementById(id);
    }
    function closeModal(id)
    {
        $(`#${id}`).modal('hide');
    }
    function refreshCurrentPage()
    {
        let currentUrl = window.location;
        $(document).find(`[href='${currentUrl}']`).trigger('click');
    }
    function showAlert()
    {
        $(`#alert-container`).show();
        setTimeout(function () {
            $(`#alert-container`).hide('slow');
        },3000);
        
    }
    new PerfectScrollbar(".app-container")
</script>