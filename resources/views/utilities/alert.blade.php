@if (session('success'))
    <div class="alert alert-success alert-dismissible alert-popup fade show" id="successAlert" role="alert">
        <strong> {{ session('success') }} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
