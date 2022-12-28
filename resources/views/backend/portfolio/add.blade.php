@extends('backend.layout.master')
@section('content')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Create Portfolio</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Create Portfolio</li>
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

                    <form action="{{route('admin_portfolio_save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Portfolio Name</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Services Name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Portfolio Description</label>
                                            <textarea name="description" id="" cols="30" rows="5"  class="form-control"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label>Portfolio Detail</label>
                                            <textarea name="detail" class="form-control" id="ckeditor-classic" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label>Portfolio Service</label>
                                            <select name="service_id" class="form-control" placeholder="Select Service">
                                                <option value="">Select Service</option>
                                                @foreach ($services as $service)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Information</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Client</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Client" name="client" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Duration</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Duration" name="duration" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Website</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Website" name="website" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Tag</label>
                                            <input type="text" class="form-control" id="product-title-input" placeholder="Enter Tag" name="tag" >
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Portfolio Gallery</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <p class="text-muted">Add Portfolio main Image.</p>
                                            <input type="file" name="image" class="form-control" id="product-title-input">
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
