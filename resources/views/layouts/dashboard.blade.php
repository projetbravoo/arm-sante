@include('layouts.partials._header')

<body>
<div class="main-wrapper">

    @include('layouts.partials._navbar')

    @include('layouts.partials._breadcrumb')

    <div class="content">
        @if (!Route::is('doctor.profile'))
            <div class="container-fluid">
                <div class="row">
                    @include('layouts.partials._sidebar')

                    @yield('content')
                </div>
            </div>
        @else
            <div class="container">
                @yield('content')
            </div>
        @endif
    </div>

</div>

@include('layouts.partials._footer')