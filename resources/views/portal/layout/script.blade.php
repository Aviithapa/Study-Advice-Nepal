<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('assets/js/scrollbar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/config.js') }}"></script>
<script src="{{ asset('assets/js/modalpage/custom-modal.js') }}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>

<!-- tooltip JS Ends-->
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector('#content-editor'))
            .then(editor => {
                // Set minimum height
                editor.ui.view.editable.element.style.minHeight = '300px'; // adjust height as needed
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>

@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>
@endif

@if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>
@endif
