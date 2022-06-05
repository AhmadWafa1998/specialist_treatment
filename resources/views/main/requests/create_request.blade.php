@extends('_layout')


@section('content')



    {{--    <!--begin::Button-->--}}
    {{--    <a  class="btn  btn-primary  show_report mb-10" >اضافة تقرير</a>--}}
    {{--    <!--end::Button-->--}}

    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        <!--begin::Card-->
        <div class="card">


            <!--begin::Card header-->
            <div class="card-header bg-secondary">
                <h3 class="card-title ">طلب جديد</h3>
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body">

                <div class="container form_report mb-20">


                    <from>
                        <h6 class="mb-6">بيانات المريض</h6>
                        <div class="row ">

                            <div class="col-1">

                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">الاسم رباعي</label>
                                </div>

                            </div>

                            <div class="col-3">

                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm">
                                </div>

                            </div>
                            <div class="col-1">

                                <div class="col-auto">
                                    <label class="col-form-label">رقم الهوية</label>
                                </div>

                            </div>
                            <div class="col-2">


                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm"
                                    >
                                </div>

                            </div>
                            <div class="col-1">

                                <div class="col-auto">
                                    <label class="col-form-label">تاريخ الميلاد</label>
                                </div>

                            </div>
                            <div class="col-2">


                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm"
                                    >
                                </div>

                            </div>

                            <div class="col-1">

                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">الجنس</label>
                                </div>

                            </div>

                            <div class="col-1">
                                <select name="selectcity"
                                        class="form-select form-select-sm selectpicker m-bootstrap-select">
                                    <option disabled selected></option>
                                    <option value="">ذكر</option>
                                    <option value="">أنثى</option>
                                </select>

                            </div>
                        </div>

                        <div class="row mt-7">


                            <div class="col-1">

                                <div class="col-auto">
                                    <label class="col-form-label">العنوان</label>
                                </div>

                            </div>

                            <div class="col-3">

                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm"
                                    >
                                </div>

                            </div>
                            <div class="col-1">

                                <div class="col-auto">
                                    <label class="col-form-label">رقم الجوال</label>
                                </div>

                            </div>
                            <div class="col-2">


                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm"
                                    >
                                </div>

                            </div>
                            <div class="col-1">

                                <div class="col-auto">
                                    <label class="col-form-label">رقم التامين</label>
                                </div>

                            </div>
                            <div class="col-2">


                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm"
                                    >
                                </div>

                            </div>

                            <div class="col-1">

                                <div class="col-auto">
                                    <label class="col-form-label">رقم الملف</label>
                                </div>

                            </div>

                            <div class="col-1">

                                <div class="col-auto">
                                    <input type="text" class="form-control form-control-sm"
                                    >
                                </div>

                            </div>
                        </div>

                        <div class="separator border-3 my-10"></div>
                        {{--                        <hr class="mb-10 mt-10">--}}

                        <h6 class="mb-6">الوصف المرضي</h6>
                        <div class="row">

                            <div class="d-flex flex-column mb-8">
                                <label class="fs-6 fw-bold mb-2">التاريخ المرضي والعلاجي</label>
                                <textarea class="form-control" rows="3" cols="140" name="target_details"
                                          placeholder="اكتب التاريخ المرضي والعلاجي للمريض"></textarea>
                            </div>

                        </div>
                        <div class="row">

                            <div class="d-flex flex-column mb-8">
                                <label class="fs-6 fw-bold mb-2">التشخيص</label>
                                <select class="form-select form-select" data-control="select2"
                                        data-placeholder="اختر التشخيص" data-allow-clear="true" multiple="multiple">
                                    <option></option>
                                    <option value="1">خالد</option>
                                    <option value="2">احمد</option>
                                </select>
                            </div>

                        </div>


                        <div class="separator border-3 my-10"></div>
                        {{--                        <hr class="mb-10 mt-10">--}}

                        <div class="row">

                            <h6 class="mb-6">الأدوية المستخدمة (باللغة الإنجليزية والإسم العلمي)</h6>

                            <!--begin::Repeater-->
                            <div id="kt_docs_repeater_basic2">
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div data-repeater-list="kt_docs_repeater_basic">
                                        <div data-repeater-item class="form-group row">
                                            <div class="col-md-3">
                                                <label class="form-label">إسم الدواء</label>

                                                <select name="medicine_name_used" class="form-select form-select-sm"
                                                        data-control="select2"
                                                        data-placeholder="اختر اسم الدواء المطلوب">
                                                    <option></option>
                                                    <option value="1">خالد</option>
                                                    <option value="2">احمد</option>
                                                </select>
                                                {{--                                                <input type="emil" class="form-control mb-2 mb-md-0" placeholder="Enter full name" />--}}
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">الجرعة المستخدمة</label>
                                                <input name="medicine_dosage_used" type="text"
                                                       class="form-control  form-control-sm mb-2 mb-md-0"
                                                       placeholder=""/>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="form-label">مدة العلاج</label>
                                                <input name="treatment_number_used" type="number"
                                                       class="form-control mb-2 mb-md-0 form-control-sm"
                                                       placeholder=""/>
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label"></label>
                                                <select name="treatment_type_used"
                                                        class="form-select form-select-sm mt-2 " data-hide-search="true"
                                                        data-control="select2" data-placeholder="مدة العلاج">
                                                    <option></option>
                                                    <option value="1">خالد</option>
                                                    <option value="2">احمد</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="javascript:;" data-repeater-delete
                                                   class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                    <i class="la la-trash-o"></i>Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form group-->

                                <!--begin::Form group-->
                                <div class="form-group mt-5">
                                    <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                        <i class="la la-plus"></i>Add
                                    </a>
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Repeater-->
                        </div>


                        <div class="separator border-3 my-10"></div>
                        {{--                        <hr class="mb-10 mt-10">--}}


                        <div class="row">

                            <h6 class="mb-6">الأدوية المطلوبة (باللغة الإنجليزية والإسم العلمي)</h6>

                            <!--begin::Repeater-->
                            <div id="kt_docs_repeater_basic2">
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div data-repeater-list="kt_docs_repeater_basic">
                                        <div data-repeater-item class="form-group row">
                                            <div class="col-md-3">
                                                <label class="form-label">إسم الدواء</label>

                                                <select name="medicine_name_required" class="form-select form-select-sm"
                                                        data-control="select2"
                                                        data-placeholder="اختر اسم الدواء المطلوب">
                                                    <option></option>
                                                    <option value="1">خالد</option>
                                                    <option value="2">احمد</option>
                                                </select>
                                                {{--                                                <input type="emil" class="form-control mb-2 mb-md-0" placeholder="Enter full name" />--}}
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">الجرعة المطلوبة</label>
                                                <input name="medicine_dosage_required" type="text"
                                                       class="form-control  form-control-sm mb-2 mb-md-0"
                                                       placeholder=""/>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="form-label">مدة العلاج</label>
                                                <input name="treatment_number_required" type="number"
                                                       class="form-control mb-2 mb-md-0 form-control-sm"
                                                       placeholder=""/>
                                            </div>

                                            <div class="col-md-2 ">
                                                <label class="form-label"></label>
                                                <select name="treatment_type_required"
                                                        class="form-select form-select-sm mt-2" data-hide-search="true"
                                                        data-control="select2" data-placeholder="مدة العلاج">
                                                    <option></option>
                                                    <option value="1">خالد</option>
                                                    <option value="2">احمد</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="javascript:;" data-repeater-delete
                                                   class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                    <i class="la la-trash-o"></i>Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Form group-->

                                <!--begin::Form group-->
                                <div class="form-group mt-5">
                                    <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                        <i class="la la-plus"></i>Add
                                    </a>
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Repeater-->
                        </div>


                        <div class="separator border-3 my-10"></div>

                        <div class="row">

                            <h6 class="mb-6">المبررات العلمية والتحاليل الداعمة الاختيار العلاج المطلوب (ترفق صورة عنها)</h6>

                            <div class="d-flex flex-column mb-8">
                                <label class="fs-6 fw-bold mb-2">المبررات العلمية</label>
                                <textarea class="form-control" rows="3" cols="140" name="target_details"
                                          placeholder="اكتب المبررات العلمية"></textarea>
                            </div>




                            <!--begin::Form-->
                            <form class="form" action="#" method="post">

                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <label class="fs-6 fw-bold mb-2">المرفقات</label>
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="kt_dropzonejs_example_1">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bolder text-gray-900 mb-1">ارفق الملفات المطلوبة</h3>
                                                <span class="fs-7 fw-bold text-gray-400"></span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                            </form>
                            <!--end::Form-->


                        </div>


                        {{--                        <div class="row" style="margin-top: 20px">--}}


                        {{--                            <a href="#" class="btn btn-flex btn-primary px-6">--}}
                        {{--                                <span class="svg-icon svg-icon-2x"><svg>...</svg></span>--}}
                        {{--                                <span class="d-flex flex-column align-items-start ms-2">--}}
                        {{--                        <span class="fs-3 fw-bolder">رفع المرفقات</span>--}}
                        {{--                        <span class="fs-7">صور عن المبررات العلمية </span>--}}
                        {{--                        </span>--}}
                        {{--                            </a>--}}


                        {{--                        </div>--}}


                    </from>
                </div>


            </div>
            <!--end::Card body-->


        </div>
        <!--end::Card-->

    </div>
    <!--end::Container-->








@endsection
@section('css')
    <style>


    </style>
@endsection

@section('js')
    <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
    <script>
        $('#kt_docs_repeater_basic').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        $('#kt_docs_repeater_basic2').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });


    </script>


    <script>
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function (file, done) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });


    </script>
@endsection
