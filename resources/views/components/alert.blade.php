<div class="toast align-items-center text-white bg-{{ $type }} position-absolute top-10 end-0" role="alert"
    style="z-index: 11" aria-live="assertive" aria-atomic="true" id="alertToast">
    <div class="d-flex">
        <div class="toast-body">
            {{ $message }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
            aria-label="Close"></button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var myAlert = document.getElementById('alertToast');
        var bsAlert = new bootstrap.Toast(myAlert, {
            animation: true,
            autohide: false,
            delay: 500000,
        });
        bsAlert.show();
    });
</script>
