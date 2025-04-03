<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" type="image/png" href="{{ asset('/assets/favicon.png') }}"> --}}
    <title>Table View</title>

    <link href="{{ asset('argon/assets/css/argon-dashboard.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('argon/assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('argon/assets/css/nucleo-svg.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="{{ asset('argon/assets/js/jquery.min.js') }}"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Coffee Shop Evaluation Table</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Coffee Shop Name</th>
                    <th>Coffee Shop Owner</th>
                    <th>Coffee Shop Infraction</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evaluation as $eval)
                <tr>
                    <td>{{ $eval->coffeeshop->name }}</td>
                    <td>{{ $eval->owner->names }}</td>
                    <td>{{ $eval->infraction->descr }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('argon/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('argon/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('argon/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('argon/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    @stack('js')
</body>
</html>
