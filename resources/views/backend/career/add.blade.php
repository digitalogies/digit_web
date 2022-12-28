@extends('backend.layout.master')
@section('content')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Job</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Create Job</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                    </div>
                    @endif
                    <!-- end page title -->

                    <form action="{{route('admin_career_save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Job Tittle</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Job Tittle" name="tittle" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Job Designation</label>
                                            <input name="designation" id="" cols="30" rows="5"  class="form-control" placeholder="Enter job Designation">
                                        </div>
                                        <div class="mb-3">
                                            <label>Job Requirments</label>
                                            <textarea name="requirment" class="form-control" id="ckeditor-classic" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label>Job Description</label>
                                            <textarea name="responsibilities" class="form-control" id="ckeditor-classic" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Location</label>
                                            <input type="text" class="form-control"  placeholder="Enter location" name="location" >
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->



                                <div class="text-end mb-3">
                                    <button type="submit" class="btn btn-success w-sm">Save Changes</button>
                                </div>
                            </div>
                            <!-- end col -->


                        </div>
                        <!-- end row -->

                    </form>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('backend.include.footer')
        </div>
        <!-- end main content-->

@endsection
