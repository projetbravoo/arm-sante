@include('layouts.partials._header')

<body class="account-page">
<div class="main-wrapper">

    @include('layouts.partials._navbar')

    <div class="content" style="min-height:205px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts.partials._footer')