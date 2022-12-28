@extends('backend.layout.master')
@section('content')
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Update Team</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Update Team</li>
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

                    <form action="{{route('admin_team_update',$edit->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Name</label>
                                            <input type="text" class="form-control" id="product-title-input" value="{{$edit->name}}" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="product-title-input">Designation</label>
                                            <input name="designation" class="form-control" value="{{$edit->designation}}">
                                        </div>
                                        <div class="mb-3">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control" id="product-title-input">
                                            <br>
                                            <img src="{{asset('public/assets/frontend/images/')}}/{{$edit->image}}" width="80px" alt="">
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-lg-6">
                                               <label class="form-label" for="product-title-input">Facebook</label>
                                               <input type="text" class="form-control" id="product-title-input" value="{{$edit->facebook_url}}" name="facebook_url" >
                                           </div>
                                           <div class="mb-3 col-lg-6">
                                               <label class="form-label" for="product-title-input">Instagram</label>
                                               <input type="text" class="form-control" id="product-title-input" value="{{$edit->instagram_url}}" name="instagram_url" >
                                           </div>
                                           <div class="mb-3 col-lg-6">
                                               <label class="form-label" for="product-title-input">Twitter</label>
                                               <input type="text" class="form-control" id="product-title-input" value="{{$edit->twitter_url}}" name="twitter_url" >
                                           </div>
                                           <div class="mb-3 col-lg-6">
                                               <label class="form-label" for="product-title-input">Linkedin</label>
                                               <input type="text" class="form-control" id="product-title-input" value="{{$edit->linkedin_url}}" name="linkedin_url" >
                                           </div>
                                           </div>
                                    </div>
                                </div>
                                <!-- end card -->


                                <!-- end card -->
                                <div class="text-end mb-3">
                                    <button type="submit" class="btn btn-success w-sm">Save Changes</button>
                                </div>
                            </div>
                            <!-- end col -->

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
