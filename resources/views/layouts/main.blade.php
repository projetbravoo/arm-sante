@include('layouts.partials._header')

<body>
<div class="main-wrapper">

    @include('layouts.partials._navbar')


    {{-- <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Blank Page</h2>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="content" style="min-height:67px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts.partials._footer')