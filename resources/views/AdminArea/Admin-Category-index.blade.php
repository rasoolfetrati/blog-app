@extends('AdminArea.Admin-Maseter')

@section('content')
    <div class="row mt-5 container d-flex justify-content-center">
        <div class="col-xl-12">
            <div class="card card-default">
                <div class="card-header">ساخت تگ

                    <ul class="nav nav-pills card-header-pills float-right">
                        <li class="nav-item">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" id="modalBtn"
                                data-target="#myModal">
                                ساخت تگ
                            </button>

                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <!-- START table-responsive-->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>عنوان تگ</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody class="dataTable">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td>{{ $category->Name }}</td>
                                        <td>
                                            <form action="{{ route('Categories.destroy', $category->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-danger" type="submit" value="حذف">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END table-responsive-->
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">ساخت تگ</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-md-12">
                    <!-- START card-->
                    <form>
                        @csrf
                        <div class="form-group">
                            <label>نام تگ</label>
                            <input class="form-control" type="text" id="tagname"
                                placeholder="نام تگ را وارد نمایید">
                        </div>
                        <button class="btn btn-sm btn-success" id="ajaxSubmit" type="submit">ارسال</button>
                    </form>
                    <!-- END card-->
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
            </div>

        </div>
    </div>
</div>

@section('scripts')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- SWEET ALERT-->
    <script src="vendor/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function showModal() {
            $('#myModal').modal('toggle');
        }
        $("#modalBtn").click(showModal);
    </script>

    <script>
        jQuery(document).ready(function() {
            jQuery('#ajaxSubmit').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    }
                });
                jQuery.ajax({
                    url: "{{ url('/Categories') }}",
                    method: 'post',
                    data: {
                        name: jQuery('#tagname').val(),
                    },
                    success: function(result) {
                        $('#myModal').modal('hide');
                        $('#tagname').val('');
                        if (result.code === 200) {
                            swal("عملیات موفق!", result.message, "success");
                            
                            var html = `
                            <tr>
                                <td>${result.data.id}</td>
                                <td>${result.data.name}</td>
                                <!-- Add your other data fields here -->
                                <td>
                                <form action="/Categories/${result.data.id}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="حذف">
                                </form>
                                </td>
                            </tr>
                            `;

                            // Insert the HTML after the element with the class "inner"
                            $("table tbody").append(html);
                        } else {
                            swal("عملیات ناموفق!", result.message, "error");
                        }
                    }
                });
            });
        });
    </script>
@endsection
