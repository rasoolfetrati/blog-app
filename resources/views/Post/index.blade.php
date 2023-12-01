@extends('layouts.master')

@section('tagLine')
    <x-tagline />
    <!-- Tagline End -->
@endsection

@section('navbars')
    <!-- Navbar Start -->
    <x-head-navbar />

    <x-navbar />
    <!-- Navbar End -->
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 order-2 order-lg-1 order-md-2 mt-4 pt-2 mt-lg-0 pt-lg-0">
                <div class="sticky-bar">
                    <div class="section-title py-3 border-top border-bottom">
                        <h4 class="mb-0">خبر فوری</h4>
                    </div>

                    <div class="card blog blog-primary border-0 mt-4">
                        <img src="{{ asset($emergencyPosts[0]->Image) }}"
                            style="width: 261px !important;height: 179.44px !important; max-width: 261px; max-height: 179.44px"
                            class="img-fluid rounded-0 shadow" alt="{{ $emergencyPosts[0]->Title }}">

                        <div class="pt-3">
                            <a href="{{ route('Posts.show', $emergencyPosts[0]->id) }}"
                                class="text-dark h5 title mb-0">{{ $emergencyPosts[0]->Title }}</a>

                            <span
                                class="text-muted mt-2 d-block">{{ Verta::instance($emergencyPosts[0]->created_at)->format('Y-m-d') }}</span>
                        </div>
                    </div>

                    <!-- RECENT POST -->
                    <div class="widget mt-4 pt-4 border-top">

                        @php
                            $firstIteration = $emergencyPosts[0];
                        @endphp

                        @foreach ($emergencyPosts as $post)
                            @if ($firstIteration)
                                @php
                                    $firstIteration = false;
                                    continue;
                                @endphp
                            @endif

                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ asset($post->Image) }}" class="avatar avatar-small" style="width: auto;"
                                    alt="{{ $post->Title }}">
                                <div class="flex-1 me-3">
                                    <a href="{{ route('Posts.show', $post->id) }}" class="d-block widget-post-title text-dark">{{ $post->Title }}</a>
                                    <span
                                        class="text-muted">{{ Verta::instance($post->created_at)->format('Y-m-d') }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- RECENT POST -->

                    <!-- TAG CLOUDS -->
                    <div class="widget mt-4 pt-4 border-top">
                        <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">دسته بندی
                            ها</h6>
                        <ul class="list-unstyled mt-4 mb-0 catagories">
                            @foreach ($categories as $category)
                                <li class="d-flex justify-content-between"><a href="/javascript:void(0)"
                                        class="title text-dark">{{ $category->Name }}</a> <span>(0)</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- TAG CLOUDS -->
                </div>
            </div>
            <!--end col-->

            <x-recent-posts />
            <!--end col-->

            <div class="col-lg-6 order-1 order-lg-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card blog blog-primary border-0">
                            <img src="{{ asset($randomPost->Image) }}" class="img-fluid rounded-0 shadow" alt="">
                            <div class="pt-3">
                                <a href="{{ route('Posts.show', $randomPost->id) }}"
                                    class="text-dark h5 title">{{ $randomPost->Title }}</a>
                                <p class="text-muted mt-3">{{ $randomPost->Description }}</p>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li class="d-flex align-items-center">
                                        <img src="/images/users/user-1.jpg" class="avatar avatar-sm-sm rounded-pill shadow"
                                            alt="">
                                        <a href="/#!"
                                            class="text-dark h6 mb-0 author me-2">{{ $randomPost->user_id }}</a>
                                    </li>
                                    <li>
                                        <span class="text-muted me-4"><i class="uil uil-calendar-alt text-dark"></i>
                                            {{ Verta::instance($randomPost->created_at)->format('Y-m-d') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row border-top mt-4 pt-2">
                    @foreach ($posts as $post)
                        <div class="col-md-6 mt-4 pt-2">
                            <div class="card blog blog-primary border-0">
                                <img src="{{ asset($post->Image) }}" class="img-fluid rounded-0 shadow"
                                    style="width: 261px !important;height: 179.44px !important; max-width: 261px; max-height: 179.44px"
                                    alt="{{ $post->Title }}">

                                <div class="pt-3">
                                    <a href="{{ route('Posts.show', $post->id) }}"
                                        class="text-dark h5 title mb-0">{{ $post->Title }}</a>

                                    <span
                                        class="text-muted mt-2 d-block">{{ Verta::instance($post->created_at)->format('Y-m-d') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <div class="p-4 py-lg-5 shadow bg position-relative overflow-hidden"
                    style="background: url('images/cta.jpg') top;">
                    <div class="bg-overlay"></div>

                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="section-title">
                                <h4 class="text-white">صحبت کافی ، بیایید با هم چیزی بسازیم</h4>
                                <p class="text-white-50 mb-0">طراحان همگام سازی ، توسعه دهندگان ، مدیران ،
                                    پیمانکاران و ذینفعان در یک ابزار مبتنی بر ابر.</p>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-4 text-lg-start mt-4 mt-lg-0">
                            <a href="/#!" class="btn btn-primary">گسترش کسب و کار</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
@endsection
