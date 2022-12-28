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
                                <h4 class="mb-sm-0">Jobs Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Jobs Details</li>
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
                                                    <table  class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                          <th></th>
                                                          <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                          <td>Job tittle</td>
                                                          <td>{{$detail->career_name}} </td>
                                                        </tr>
                                                        <tr>
                                                          <td>Applicant Name</td>
                                                          <td>{{$detail->applicant_name}} </td>
                                                        </tr>
                                                        <tr>
                                                          <td>Applicant Last Name</td>
                                                          <td>{{$detail->applicant_last_name}} </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Email</td>
                                                            <td>{{$detail->applicant_email}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Number</td>
                                                            <td>{{$detail->applicant_phone}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Resume/CV</td>
                                                            <td><a href="{{ asset('public/assets/frontend/job/')}}/{{ $detail->applicant_cv }}" target="_BLANK">View Resume</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Cover Letter</td>
                                                            @if ( $detail->applicant_cover_letter)
                                                                <td><a href="{{ asset('public/assets/frontend/job/')}}/{{ $detail->applicant_cover_letter }}" target="_BLANK">View Cover Letter</a></td>
                                                                @else
                                                                <td><p>No file</p></td>
                                                            @endif

                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Linkedin url</td>
                                                            <td>{{$detail->applicant_linkedin_url}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Portfolio url</td>
                                                            <td>{{$detail->applicant_portfolio_url}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Message</td>
                                                            <td>{{$detail->applicant_message}}</td>
                                                        </tr>
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
