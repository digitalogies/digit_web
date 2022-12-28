@extends('backend.layout.master')
@section('content')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Team</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Create Team</li>
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

                    <form action="{{route('admin_team_save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Name</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Designation</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Designation" name="designation" required>
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted">Image.</p>
                                            <input type="file" name="image" class="form-control" id="product-title-input">
                                        </div>
                                        <div class="row">
                                         <div class="mb-3 col-lg-6">
                                            <label class="form-label" for="product-title-input">Facebook</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Facebook URL" name="facebook_url" >
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label class="form-label" for="product-title-input">Instagram</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Instagram URL" name="instagram_url" >
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label class="form-label" for="product-title-input">Twitter</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Twitter URL" name="twitter_url" >
                                        </div>
                                        <div class="mb-3 col-lg-6">
                                            <label class="form-label" for="product-title-input">Linkedin</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Linkedin URL" name="linkedin_url" >
                                        </div>
                                        </div>

                                    </div>
                                </div>

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
