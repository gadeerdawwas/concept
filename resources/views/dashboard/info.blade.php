@extends('dashboard.include.logout')
@push('style')
    <style>
        .delete {
            cursor: pointer !important;
            font-size: 30px;
            position: absolute;
            color: white;
            border: none;
            background: none;
            right: -15px;
            top: -15px;
            line-height: 1;
            z-index: 99;
            padding: 0;
        }

        .delete span {
            height: 30px;
            width: 30px;
            background-color: black;
            border-radius: 50%;
            display: block;
        }

        .box {
            width: calc((100% - 30px) * 0.333);
            margin: 5px;
            height: 250px;
            background: #CCCCCC;
            float: left;
            box-sizing: border-box;
            position: relative;
            box-shadow: 0 0 5px 2px rgba(0, 0, 0, .15);
        }

        .box:hover {
            box-shadow: 0 0 15px 3px rgba(0, 0, 0, 0.5);
        }

        .box .image {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .box .image img {
            width: 100%;
            min-height: 100%;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
        }

        @media (max-width: 600px) {
            .box {
                width: calc((100% - 20px) * 0.5);
                height: 200px;
            }
        }
    </style>
@endpush


@section('content')
    {{-- @if (session()->has('success')) --}}

    {{-- @endif --}}

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">بيانات الموقع</h4>

                            </div><!-- end card header -->

                            <div class="card-body">

                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-borderless" role="alert">
                                        <strong>{{ session()->get('success') }}</strong>
                                    </div>
                                @endif
                                <div class="live-preview">
                                    <form action="{{ route('admin.informations.store') }}" class="row g-3" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label"> الايميل</label>
                                            <input type="text" value="{{ $information ? $information->email : '' }}"
                                                name="email" class="form-control" id="nameInput" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label"> فيس بوك</label>
                                            <input type="text" value="{{ $information ? $information->facebook : '' }}"
                                                name="facebook" class="form-control" id="nameInput" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label"> انستقرام

                                            </label>
                                            <input type="text" value="{{ $information ? $information->instagram : '' }}"
                                                name="instagram" class="form-control" id="nameInput" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label"> لينكدان</label>
                                            <input type="text" value="{{ $information ? $information->linkedin : '' }}"
                                                name="linkedin" class="form-control" id="nameInput" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label"> تويتر</label>
                                            <input type="text" value="{{ $information ? $information->twitter : '' }}"
                                                name="twitter" class="form-control" id="nameInput" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label"> رابط الكتاب</label>
                                            <input type="text" value="{{ $information ? $information->link : '' }}"
                                                name="link" class="form-control" id="nameInput" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="nameInput" class="form-label">  بروفايل</label>
                                            <input type="file"
                                                name="file" class="form-control" />
                                        
                                                <a href="{{ asset($information ? $information->profile : '' ) }}" download>
                                                    File Download
                                                  </a>
                                        </div>



                                        <div class="row justify-content-center">
                                            <button style="    margin-top: 25px;width: 200px;" type="submit"
                                                class="btn btn-lg btn-success">حفظ</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
    @endsection
    @push('script')
        <script>
            // $("#div1").mouseenter(function() {
            //     var $div2 = $("#confirm");
            //     if ($div2.is(":visible")) { return; }
            //     $div2.show();
            //     setTimeout(function() {
            //         $div2.hide();
            //     }, 10000);
            // });

            setTimeout(function() {
                $("#div1").hide();
                setTimeout(function() {
                    $("#myDiv").show();
                }, 5000);
            }, 5000);
        </script>
    @endpush
