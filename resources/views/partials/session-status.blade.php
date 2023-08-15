@if(session('status'))
<div class="row status-danger">
    <div class="col-12">
        <div class="alert alert-primary d-flex" role="alert">
            <i class="bi bi-check2-circle"></i>
            {{ session('status') }}
        </div>

    </div>
</div>
@endif