@extends('AdminArea.Admin-Maseter')
@section('content')
    <div class="container">
        <h4 class="page-header">نظرات</h4>
        @if (!$comments->isEmpty())
            @foreach ($comments as $comment)
                <div id="accordion-{{ $comment->id }}">
                    <div class="card card-default mb-1">
                        <div class="card-header" id="heading-{{ $comment->id }}">
                            <h4 class="mb-0">
                                <a class="text-inherit collapsed" data-toggle="collapse"
                                    data-target="#collapse-{{ $comment->id }}" aria-expanded="false"
                                    aria-controls="collapse-{{ $comment->id }}" href="default.html">نظر برای پست
                                    {{ $comment->post->Title }}
                            </h4>
                            <br>
                            <h5 class="mt-2">نام کاربر:{{ $comment->user->name }}</h5>
                            <h5 class="mt-2">ایمیل کاربر:{{ $comment->user->email }}</h5>
                        </div>
                        <div class="collapse" id="collapse-{{ $comment->id }}"
                            aria-labelledby="heading-{{ $comment->id }}" data-parent="#accordion-{{ $comment->id }}"
                            style="">
                            <div class="card-body border-top">{{ $comment->Text }}</div>
                        </div>
                        <!-- Add Confirm and Delete buttons -->
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('update_comment', $comment->id) }}"
                                class="btn link-primary btn-primary mr-2">Confirm</a>
                            <a href="{{ route('delete_comment', $comment->id) }}"
                                class="btn link-danger btn-danger">Delete</a>
                        </div>
                    </div>

                </div>
            @endforeach
        @else
            <div class="alert alert-danger" role="alert">
                نظری وجود ندارد!
            </div>
        @endif
    </div>
@endsection
