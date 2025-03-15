@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible bg-success text-white alert-label-icon fade show material-shadow"
        role="alert">
        <i class="ri-user-smile-line label-icon"></i>
        <strong>Success</strong> - {{ $message }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
