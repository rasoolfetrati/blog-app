@extends('layouts.master')
@section('tagLine')
    <x-tagline />
    <!-- Tagline End -->
@endsection
@section('navbars')
    <x-navbar />
@endsection


@section('content')
<section class="magazine-hero section-two">
    <div class="container">
        <div class="row">
            <div class="col-md-1 d-none d-md-block">
                <div class="sticky-bar">
                    <ul class="list-unstyled social-icon social mb-0">
                        <li class="mt-2"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="mt-2"><a href="javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-instagram"></i></a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-twitter"></i></a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-github"></i></a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-linkedin"></i></a></li>
                        <li class="mt-2"><a href="javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--end col-->

            <div class="col-md-11">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="section-title">
                            <h4 class="title fw-semibold">{{ $post->Title }}
                            </h4>

                            <div class="d-flex mt-4 pb-4 align-items-center justify-content-between">
                                <div class="d-flex author align-items-center">
                                    <img src="/images/users/user-1.jpg" class="avatar avatar-md-sm rounded-pill"
                                        alt="">
                                    <div class="me-2">
                                        <h6 class="user d-block mb-0"><a href="javascript:void(0)"
                                                class="text-dark">{{ $post->user->name }}</a></h6>
                                        <small class="date text-muted mb-0">نویسنده محتوا</small>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-inline d-flex pt-4 mb-0 border-top justify-content-between">
                                <li class="list-inline-item text-muted"><i class="uil uil-calender h5 text-dark"></i>
                                    {{ Verta::instance($post->created_at)->format('Y-m-d') }}</li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <img src="{{ asset($post->Image) }}" class="img-fluid rounded shadow" alt="{{ $post->Title }}">
                        </div>

                        <div class="mt-4">
                            {!! html_entity_decode($post->Text) !!}
                        </div>

                        <!--end row-->

                        <div class="card mt-4">
                            <h5 class="card-title mb-0">نظرات :</h5>
                            @if (!$comments->isEmpty())
                                
                            <ul class="media-list list-unstyled mt-4 mb-0">
                                @foreach ($comments as $comment)
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="ps-3" href="#">
                                                <img src="/images/users/user-1.jpg"
                                                    class="img-fluid avatar avatar-md-sm rounded-circle shadow"
                                                    alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)"
                                                        class="text-dark media-heading">{{ $comment->user->name }}</a></h6>
                                                <small class="text-muted">{{ Verta::instance($comment->created_at)->format('Y,m,d') }}</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">{{ $comment->Text }}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @else
                                <div class="alert alert-warning" role="alert">
                                    نظری وجود ندارد شما اول نفر باشید!
                                </div>
                            @endif
                        </div>

                        <div class="card mt-4">
                            @auth
                            <h5 class="card-title mb-0">نظر خود را بنویسید :</h5>
                            {{-- // user logged in --}}
                            <form class="mt-4" method="POST" action="{{ route('store_comments') }}">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">نظر شما</label>
                                            <textarea id="message" placeholder="بنویسید ..." rows="5" name="message" class="form-control"
                                                required=""></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-12">
                                        <div class="send d-grid">
                                            <button type="submit" class="btn btn-primary">ارسال نظر</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-->
                            @else
                            {{-- // not logged in --}}
                            <div class="alert alert-info alert-link" role="alert">
                                برای ثبت نظر ابتدا باید <a class="link-dark" href="{{ route('login') }}">وارد</a> سایت شوید
                            </div>
                          @endauth
                         
                        </div>

                  
                    </div>
                    <!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="sticky-bar">
                            <div class="card rounded overflow-hidden">
                                <img src="/images/magazine/advertise.jpg" class="img-fluid" alt="">
                                <div class="bg-overlay bg-gradient-overlay"></div>

                                <div class="card-body content position-absolute bottom-0 start-0 end-0 text-center">
                                    <img src="/images/logo-light.png" height="22" alt="">
                                    <h5 class="text-white my-3">الگوی وبلاگ و مجله ما Bootstrap 5</h5>
                                    <a href="#" target="_blank" class="btn btn-primary">هم اکنون بخرید</a>
                                </div>
                            </div>

                            <!-- RECENT POST -->
                            <x-recent-posts />
                            <!-- RECENT POST -->
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

@endsection
@section('scripts')
<!-- Example using jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Wait for the document to be ready before modifying the class
        $(".dynamic-column").removeClass("col-lg-3").addClass("col-lg-12");
    });
</script>
@endsection

