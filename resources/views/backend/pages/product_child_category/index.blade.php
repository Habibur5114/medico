@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Product ChildCategory Section
@endpush

@push('add-css')
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Product ChildCategory Table</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_Modal">Add Product ChildCategory</button>
        </div>


        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered" id="productChildCategoryTables">
              <thead>
                <tr>
                  <th>#SL.</th>
                  <th>Category Title</th>
                  <th>SubCategory Title</th>
                  <th>ChildCategory Title</th>
                  <th>Main Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

              </tbody>

            </table>
          </div>
        </div>
    </div>
 </div>


    {{-- Create Product ChildCategory --}}
    <div class="modal fade" id="create_Modal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3">Create New Product ChildCategory</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="createForm" enctype="multipart/form-data">
                    @csrf

                        <div class="row">
                            <div class="col mb-3">
                                <label for="title" class="form-label">Product ChildCategory Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Product ChildCategory Title">
                            </div>

                            <div class="col mb-3">
                                <label for="category_id" class="form-label">Product Category Title</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    <option selected="" disabled value="">Open this select menu</option>

                                    @foreach ($productCategories as $row)
                                        <option value="{{ $row->id }}">{{ $row->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col mb-3">
                            <label for="subCategory_id" class="form-label">Product SubCategory Title</label>
                            <select class="form-select" id="subCategory_id" name="subCategory_id">
                                <option selected="" disabled value="">Open this select menu</option>

                                @foreach ($productSubCategories as $row)
                                    <option value="{{ $row->id }}">{{ $row->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="main_img" class="form-label">Main Image</label>
                                <input class="form-control" type="file" name="main_img" id="main_img">
                            </div>

                            <div class="col mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option selected="" disabled value="">Open this select menu</option>
                                    <option value="1">Active</option>
                                    <option value="2">Deactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" hidden></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </form>
            </div>
        </div>
        </div>
    </div>


     {{-- Update Product ChildCategory --}}
    <div class="modal fade" id="editModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3">Update Product ChildCategory</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="updateForm" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <input type="text" id="up_id" name="id" hidden>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_title" class="form-label">Product ChildCategory Title</label>
                            <input type="text" id="up_title" name="title" class="form-control" placeholder="Product ChildCategory Title">
                        </div>

                        <div class="col mb-3">
                            <label for="up_category_id" class="form-label">Product SubCategory Title</label>
                            <select class="form-select" id="up_category_id" name="category_id">
                                <option selected="" disabled value="">Open this select menu</option>
                                @foreach ($productCategories as $row)
                                    <option value="{{ $row->id }}">{{ $row->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col mb-3">
                        <label for="up_subCategory_id" class="form-label">Product SubCategory Title</label>
                        <select class="form-select" id="up_subCategory_id" name="subCategory_id">
                            <option selected="" disabled value="">Open this select menu</option>

                            @foreach ($productSubCategories as $row)
                                <option value="{{ $row->id }}">{{ $row->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_main_img" class="form-label">Main Image</label>
                            <input class="form-control" type="file" name="main_img" id="up_main_img">

                            <div id="imageShow"></div>
                        </div>

                        <div class="col mb-3">
                            <label for="up_status" class="form-label">Status</label>
                            <select class="form-select" id="up_status" name="status">
                                <option selected="" disabled value="">Open this select menu</option>
                                <option value="1">Active</option>
                                <option value="2">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="up_description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="up_description" cols="30" rows="10" hidden></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

@endsection



@push('custom-script')

<script src="{{asset('https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js')}}"></script>
 <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

 <script>

    let editorInstance;

    // update Price
    ClassicEditor
        .create(document.querySelector('#up_description'))
        .then(newEditor => {
            editorInstance = newEditor;
        })
        .catch(error => {
            console.error(error);
    });

    // Create Price
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(newEditor => {
            jReq = newEditor;
        })
        .catch(error => {
            console.error(error);
    });
</script>

 <script>

     $(document).ready(function(){

        // show all data
        let productChildCategoryTables = $('#productChildCategoryTables').DataTable({
            order: [
                [0, 'asc']
            ],
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.get-product-childCategory') }}",
            // pageLength: 30,

            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'cat_title'
                },
                {
                    data: 'subCat_title'
                },
                {
                    data: 'childCat_title'
                },
                {
                    data: 'main_img',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'status',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });


        //  Status updates
        $(document).on('click', '#status', function () {
            var id = $(this).data('id');
            var status = $(this).data('status');

            // console.log(id, status);

            $.ajax({
                type: "POST",
                url: "{{ route('admin.product-childCategory.status') }}",
                data: {
                    // '_token': token,
                    id: id,
                    status: status
                },
                success: function (res) {
                    productChildCategoryTables.ajax.reload();

                    if (res.status == 1) {
                        swal.fire(
                        {
                            title: 'Status Changed to Active',
                            icon: 'success'
                        })
                    } else {
                        swal.fire(
                        {
                            title: 'Status Changed to Inactive',
                            icon: 'success'
                        })
                    }
                },
                error: function (err) {
                    console.log(err);
                }

            })
        })

        // Create Banner
         $('#createForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.product-childCategory.store') }}",
                data: formData,
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {
                    // console.log(res);
                    if (res.status === true) {
                        $('#create_Modal').modal('hide');
                        $('#createForm')[0].reset();
                        productChildCategoryTables.ajax.reload();

                        swal.fire({
                            title: "Success",
                            text: `${res.message}`,
                            icon: "success"
                        })
                    }
                },
                error: function (err) {
                    console.error('Error:', err);
                    swal.fire({
                        title: "Failed",
                        text: "Something Went Wrong !",
                        icon: "error"
                    })
                }
            });
        })

        // Edit Banner
        $(document).on("click", '#editButton', function (e) {
            let id = $(this).attr('data-id');
            // alert(id);

            $.ajax({
                type: 'GET',
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                url: "{{ url('admin/product-childCategory') }}/" + id + "/edit",
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {
                    let data = res.success;
                    // console.log(data)

                    $('#up_id').val(data.id);
                    $('#up_title').val(data.title);
                    $('#up_category_id').val(data.category_id);
                    $('#up_subCategory_id').val(data.subCategory_id);
                    $('#up_status').val(data.status);
                    $('#imageShow').html('');
                    $('#imageShow').append(`
                    <img src={{ asset("`+ data.main_img +`") }} alt="" style="width: 75px;">
                    `);
                    editorInstance.setData(data.description);
                },
                error: function (error) {
                    console.log('error');
                }

            });
        })


        // Update Banner
        $("#updateForm").submit(function (e) {
            e.preventDefault();

            let id = $('#up_id').val();
            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('admin/product-childCategory') }}/" + id,
                data: formData,
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {

                    swal.fire({
                        title: "Success",
                        text: "SubCategory Edited",
                        icon: "success"
                    })

                    $('#editModal').modal('hide');
                    $('#updateForm')[0].reset();
                    productChildCategoryTables.ajax.reload();
                },
                error: function (err) {
                    console.error('Error:', err);
                    swal.fire({
                        title: "Failed",
                        text: "Something Went Wrong !",
                        icon: "error"
                    })
                }
            });

        });


        // Delete Banner
        $(document).on("click", "#deleteBtn", function () {
            let id = $(this).data('id')

            swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',

                        url: "{{ url('admin/product-childCategory') }}/" + id,
                        data: {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        },
                        success: function (res) {
                            Swal.fire({
                                title: "Deleted!",
                                text: `${res.message}`,
                                icon: "success"
                            });

                            productChildCategoryTables.ajax.reload();
                        },
                        error: function (err) {
                            console.log('error')
                        }
                    })

                } else {
                    swal.fire('Your Data is Safe');
                }
            })
        })
    });

 </script>

@endpush
