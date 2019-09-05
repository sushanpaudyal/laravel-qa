@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong></strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Clos">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif