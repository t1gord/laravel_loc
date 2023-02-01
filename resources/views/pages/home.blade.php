@extends('layout')

@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Portfolio Grid View</li>
        </ol>
    </nav>

    <!-- //// <Test Zone>  ////  -->
    <section class="container test-zone mt-4 mb-4">
        Test Zone
    </section>
    <!-- //// </Test Zone>  ////  -->

    <!-- Page title + Filters -->
    <section class="container d-md-flex align-items-center justify-content-between pb-3">
        <h1 class="text-nowrap mb-md-4 pe-md-5">Portfolio Grid</h1>
        <nav class="overflow-auto">
            <ul class="nav nav-tabs-alt flex-nowrap border-0">
                <li class="nav-item">
                    <a href="#" class="nav-link text-nowrap active">All Works</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-nowrap">Web Design</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-nowrap">Graphic Design</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-nowrap">Branding</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-nowrap">UI / UX</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-nowrap">Motion Design</a>
                </li>
            </ul>
        </nav>
    </section>


    <!-- Portfolio grid -->
    <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
        <div class="row pb-lg-3">
        @php
            $i = 1;
            $md = [7, 5];
        @endphp
        @foreach($arts as $art)

            @if($i === 1)
                <div class="col-md-5 mb-2">
            @elseif($i % 2)
                <div class="col-md-{{ $md[0] }} mb-2">
                @php
                    $md = array_reverse($md);
                @endphp
            @else
                <div class="col-md-{{ $md[0] }} mb-2">
            @endif
                    @include('arts.index')
                </div>
            @php
                $i++;
            @endphp
        @endforeach

        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item active" aria-current="page">
              <span class="page-link">
                1
                <span class="visually-hidden">(current)</span>
              </span>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">
                        <i class="bx bx-chevron-right mx-n1"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </section>


    <!-- Contact CTA -->
    <section class="container mb-1 mb-md-3 mb-lg-4">
        <div class="bg-secondary rounded-3 overflow-hidden">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-5 offset-lg-1">
                    <div class="pt-5 pb-3 pb-md-5 px-4 px-lg-0 text-center text-md-start">
                        <p class="lead mb-3">Ready to get started?</p>
                        <h2 class="h1 pb-3 pb-sm-4">Take Your <span class="text-primary">Business</span> to&nbsp;the
                            Next Level</h2>
                        <a href="#" class="btn btn-primary btn-lg">Work with us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 offset-xl-1">
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100">
                        <svg class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y" width="868"
                             height="868" style="min-width: 868px;" viewBox="0 0 868 868" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.15" cx="434" cy="434" r="434" fill="#6366F1"></circle>
                        </svg>
                        <img src="assets/img/about/cta.png" class="position-relative zindex-3 mb-2 my-lg-4" width="382"
                             alt="Illustration">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
