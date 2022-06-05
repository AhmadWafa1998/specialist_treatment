@extends('_layout')
@section('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        <!--begin::Card-->
        <div class="card">

            <!--begin::Card header-->
            <div class="card-header bg-secondary">
                <h3 class="card-title ">عرض الطلبات</h3>
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <a href="{{route('request.create')}}" id="new-order"
                       class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill"
                       data-toggle="modal"
                       data-target="#create_order_modal">
                    <span>
                        <i class="la la-plus"></i>
                        <span>طلب جديد</span>
                    </span>
                    </a>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--begin::Card header-->

            <!--begin::Card body-->
            <div class="card-body">
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <!--begin: row -->
                    <div class="row align-items-center">
                        <!--begin: col -->
                        <div class="col-xl-12 order-2 order-xl-1">
                            <form id="options_form" class="form-group row align-items-center">
                                <div class="col-md-3">
                                    <div class="m-form__group m-form__group--inline">
                                        <div class="m-form__control">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                              height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                              fill="black"/>
														<path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="black"/>
													</svg>
												</span>
                                                <!--end::Svg Icon-->
                                                <input type="text" data-kt-customer-table-filter="search"
                                                       class="form-control form-control-color form-control-solid w-250px ps-15"
                                                       placeholder="بحث"/>
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="m-form__group m-form__group--inline">
                                        <div class="m-form__control">
                                            <select class="form-select form-control-lg form-select-solid"
                                                    data-control="select2"
                                                    data-hide-search="true" data-placeholder="Status"
                                                    data-kt-ecommerce-order-filter="status">
                                                <option value="" selected>الكل</option>
                                                <option value="0">انتظار</option>
                                                <option value="1">معتمد</option>
                                                <option value="2">مرفوض</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center gap-2 gap-lg-3 justify-content-end">

                                        <!--begin::Primary button-->
                                        <a class="btn btn-sm btn-primary" type="submit">بحث</a>
                                        <!--end::Primary button-->
                                        <!--begin::Filter menu-->
                                        <div class="m-0">
                                            <!--begin::Menu toggle-->
                                            <a class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                                               type="reset">تفريغ</a>
                                            <!--end::Menu toggle-->
                                        </div>
                                        <!--end::Filter menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                            </form>
                            {{--
                        </div> --}}
                        </div>
                        <!--end: col -->
                    </div>
                    <!--end: row -->
                </div>
                <!--end: Search Form -->

                <!--begin: Datatable -->
                <div class="table-responsive mt-10">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-striped table-head-custom table-checkable"
                           id="m_datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>رقم الطلب</th>
                            <th>تاريخ الطلب</th>
                            <th>اسم المريض</th>
                            <th>المستشفى</th>
                            <th>الطبيب المعالج</th>
                            <th> الحالة</th>
                            <th style="">إجراءات</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
                <!--end: Datatable -->

            </div>
            <!--end::Card body-->


        </div>
        <!--end::Card-->

    </div>
    <!--end::Container-->
@endsection
@section('js')
    <script>
        let get_rows = "{{route('get-rows')}}";
    </script>
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{asset('assets/js/requests/index.js')}}"></script>
@endsection

