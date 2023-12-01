    <!-- TAGLINE START-->
    <div class="tagline bg-white">
        <div class="container">
            <div class="row justify-content-between align-items-center g-0">
                <div class="col-lg-10 col-md-9">
                    <div class="d-flex justify-content-between align-items-center position-relative overflow-hidden">
                        <div class="text-slider">
                            <ul class="list-inline mb-0 move-text">
                                @foreach ($taglines as $post)
                                    <li class="mb-0 list-inline-item ms-5"><a href="/#!" class="text-dark"><i
                                                class="ti ti-chevron-right"></i> {{ $post->Title }} <small
                                                class="text-muted">{{ verta($post->created_at)->formatDifference() }}</small></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-3 text-end">
                    <span class="text-muted">{{ verta()->format('l %d %B، %Y'); }}</span>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end taglines-->
