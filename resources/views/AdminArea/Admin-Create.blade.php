@extends('AdminArea.Admin-Maseter')

@section('content')
    <div class="content-wrapper">
        <div class="content-heading">مقاله جدید</div>
        <div class="row">
            <!-- Article Content-->
            <div class="col-xl-9">
                <div class="card card-default">
                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        <form action="{{ route('StorePost') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input class="mb-3 form-control form-control-lg" type="text" name="Title"
                                placeholder="عنوان مقاله...">

                            <textarea id="editor1" name="Text" name="editor1" rows="10" data-sample-short></textarea>

                            <br>
                            <p>خلاصه خبر </p>
                            <textarea class="mb-3 form-control" cols="6" name="Description"></textarea>

                            <input class="mb-3 form-control-file form-control" type="file" id="imginp" name="Image">

                            <img id="blah" width="150px" height="150px" class="img-thumbnail" src="#" />

                            <select class="custom-select custom-select-lg mb-3 mt-4" name="category_id">
                                <option value="" selected="">لطفا انتخاب کنید</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->Name }}</option>
                                @endforeach
                            </select>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="IsEmergency"" id="IsEmergency">
                                <label class="form-check-label" for="IsEmergency">خبر فوری؟</label>
                            </div>

                            <div class="clearfix">
                                <div class="float-left">
                                    <button class="btn btn-primary" type="submit">
                                        <em class="fa fa-check fa-fw"></em>ذخیره</button>
                                </div>
                                <div class="float-right">
                                    <button class="btn btn-danger" type="button">
                                        <em class="fas fa-trash-alt fa-fw"></em>حذف</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        imginp.onchange = evt => {
            const [file] = imginp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1', {
            height: 400,
            baseFloatZIndex: 10005,
            removeButtons: 'PasteFromWord'
        });
    </script>
@endsection
