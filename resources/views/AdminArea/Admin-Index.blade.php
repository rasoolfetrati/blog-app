@extends('AdminArea.Admin-Maseter')

@section('content')
    <div class="row mt-5 container d-flex justify-content-center">
        <div class="col-xl-12">
            <div class="card card-default">
                <div class="card-header">همه خبر ها</div>
                <div>
                    <a href="{{ route('CreatePost') }}" class="btn btn-primary">ایجاد خبر</a>
                    <a href="" class="btn btn-danger">خبر های حذف شده</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عکس</th>
                                    <th>عنوان خبر</th>
                                    <th>تاریخ انتشار</th>
                                    <th>نویسنده</th>
                                    <th>دسته بندی</th>
                                    <th>اکشن ها</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td><img src="{{ asset($post->Image) }}" class="img-thumbnail" width="150px"
                                                height="150px" alt=""></td>
                                        <td>{{ $post->Title }}</td>
                                        <td>{{ Verta::instance($post->created_at) }}</td>
                                        <td>{{ $post->user_id }}</td>
                                        <td>{{ $post->category->Name }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('EditPost', $post->id) }}" class="btn btn-warning"><i
                                                        class="fa fa-pencil-alt"></i></a>
                                                <form action="{{ route('DeletePost',$post->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
