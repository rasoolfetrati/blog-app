<section class="magazine-hero section-two">
    <div class="container">
        <div id="grid" class="row g-3">

            <div class="col-lg-6 picture-item">
                <div class="blog blog-primary position-relative border-0 overflow-hidden shadow">
                    <div class="blog-image position-relative overflow-hidden">
                        <img style="height: 550px!important;width: 550x!important; ;max-height: 550px;max-width:550px"
                            src="{{ asset($randomPost->Image) }}" class="img-fluid" alt="{{ $randomPost->Title }}">
                        <div class="bg-overlay opacity-8"></div>

                        <div class="position-absolute top-0 start-0">
                            <div class="play-icon m-3">
                            </div>
                        </div>
                    </div>

                    <div class="card-body content position-absolute bottom-0 start-0 end-0">
                        <span class="badge bg rounded-pill">{{ $randomPost->category->Name }}</span>
                        <a href="{{ route('Posts.show', $randomPost->id) }}"
                            class="text-white h5 d-block mt-3 title mb-0">{{ $randomPost->Title }}</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-6 picture-item">
                <div class="row g-3">
                    @foreach ($posts as $post)
                        <div class="col-md-6 picture-item">
                            <div class="blog blog-primary position-relative border-0 overflow-hidden shadow">
                                <div class="blog-image position-relative overflow-hidden">
                                    <img style="width: 267px !important;height: 267px !important; max-width: 267px; max-height: 267px"
                                        src="{{ asset($post->Image) }}" class="img-fluid" alt="{{ $post->Title }}">
                                    <div class="bg-overlay opacity-8"></div>

                                    <div class="position-absolute top-0 start-0">
                                        <span class="badge bg rounded-pill m-3">{{ $post->category->Name }}</span>
                                    </div>
                                </div>

                                <div class="card-body content position-absolute bottom-0 start-0 end-0">
                                    <a href="{{ route('Posts.show', $post->id) }}"
                                        class="text-white h5 title mb-0">{{ $post->Title }}</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    @endforeach
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="/images/advertise.jpg" class="img-fluid" alt="">
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->


</section>
<!--end section-->
