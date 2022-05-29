<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div class="row" id="content">
        <div class="col-12" id="side-bar">
            @include('layouts.sidebar')
        </div>
        <div class="col-12">
            @yield('content')
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>