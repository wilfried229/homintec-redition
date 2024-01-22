@if(session()->has('message'))
    <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible" role="alert" id="alert-message">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
