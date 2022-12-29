@extends('backend.layout.master')
@section('content')
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Jobs Request</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Jobs Request</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                                               <!-- end col -->

                        <div class="col-xl-12 col-lg-12">
                            <div>
                                <div class="card">
                                    {{-- <div class="card"> --}}

                                        <div class="card-body">
                                            <div class="tab-pane active">
                                                <div class="row">
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                          <th>Job tittle</th>
                                                          <th>Name</th>
                                                          <th>Email</th>
                                                          <th>Number</th>
                                                          <th>Date</th>
                                                          <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach($jobs as $row)
                                                        <tr>
                                                          <td>{{$row->career_name}}</td>
                                                          <td>{{$row->applicant_name}} </td>
                                                          <td>{{$row->applicant_email}} </td>
                                                          <td>{{$row->applicant_phone}} </td>
                                                          <td>{{date('d-m-Y', strtotime($row->created_at))}}</td>
                                                          <td>
                                                          <a href="{{route('admin_job_detail',$row->id)}}"><span class="btn btn-success btn-sm"><i class="ri-edit-box-line"></i></span></a>
                                                          </td>
                                                        </tr>
                                                        @endforeach
                                                       </tbody>
                                                      </table>
                                                </div>
                                                <div id="table-product-list-all" class="table-card gridjs-border-none">
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->

                                    {{-- </div> --}}
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('backend.include.footer')
        </div>
        <!-- end main content-->
@endsection