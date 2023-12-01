<div class="col-lg-3 col-md-6 order-3 order-lg-3 order-md-2 mt-4 pt-2 mt-lg-0 pt-lg-0 dynamic-column">
    <div class="">
        <div class="">
            <div class="sticky-bar">
                <div class="section-title py-3 border-top border-bottom">
                    <h4 class="mb-0">اخبار اخیر</h4>
                </div>
                @foreach ($navposts as $nav)
                    <div class="d-flex align-items-center mt-4">
                        <img src="{{ asset($nav->Image) }}" class="img-fluid rounded-pill avatar avatar-small" alt="">
                        <div class="blog blog-primary overflow-hidden pe-3">
                            <a href="{{ route('Posts.show', $nav->id) }}" class="text-dark title d-block">{{ $nav->Title }}</a>
        
                            <span class="text-muted d-block">{{ Verta::instance($nav->created_at)->format('Y-m-d') }}</span>
                        </div>
                    </div>
                @endforeach
        
                <div class="mt-4 pt-2">
                    <a href="/https://1.envato.market/landrick" target="_blank"><img src="/images/offer.png" class="img-fluid"
                            alt=""></a>
                </div>
        
                <div class="widget mt-4 pt-2 text-center">
                    <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light">شبکه های اجتماعی</h6>
        
                    <ul class="list-unstyled social-icon tagline-social mb-0 mt-4">
                        <li class="list-inline-item"><a href="/javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="/javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="/javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="/javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-github"></i></a></li>
                        <li class="list-inline-item"><a href="/javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="/javascript:void(0)" class="rounded"><i
                                    class="mdi mdi-whatsapp"></i></a></li>
                    </ul>
                    <!--end icon-->
                </div>
            </div>
        </div>
    </div>
   
</div>