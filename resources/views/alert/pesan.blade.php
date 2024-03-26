<!-- Load CSS dan JS untuk Toastr -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@if ($errors->any())
    <script>
        $(document).ready(function () {
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        });
    </script>
@endif

@if (Session::has('success'))
    <script>
        $(document).ready(function () {
            toastr.success("{{ Session::get('success') }}");
        });
    </script>
@endif
