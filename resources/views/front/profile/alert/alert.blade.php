@if (Session::has('success'))
    <div class="alert alert-success " role="alert">
        <span class="icon-check" style="text-align: left !important">{!!Session::get('success')!!}</span>
        <button type="button" class="close float-left" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        <span class="icon-cancel" style="text-align: left !important">{!!Session::get('danger')!!}</span>
        <button type="button" class="close float-left" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
