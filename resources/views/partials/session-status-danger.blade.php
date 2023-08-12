@if(session('status'))
<div class="row">
    <div class="col-10 my-2">
        <div class="alert alert-danger d-flex" role="alert">
            <i class="bi bi-clipboard2-x"></i>
            {{ session('status') }}
        </div>

    </div>
</div>
@endif