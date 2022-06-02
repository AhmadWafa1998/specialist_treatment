@extends('_layout')


@section('content')



    <!--begin::Button-->
    <a  class="btn  btn-primary  show_report mb-10" >اضافة تقرير</a>
    <!--end::Button-->



    <div class="container form_report mb-20" >


        <from>

            <div class="row ">


                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">الاسم رباعي</label>
                    </div>

                </div>

                <div class="col-3">

                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>
                <div class="col-1" >

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">رقم الهوية</label>
                    </div>

                </div>
                <div class="col-2">


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>
                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">تاريخ الميلاد</label>
                    </div>

                </div>
                <div class="col-2">


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>

                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">الجنس</label>
                    </div>

                </div>

                <div class="col-1">

                    <div class="value">
                        <select name="selectcity" class="form-control" id="selectcity" >
                            <option value="">ذكر</option>
                            <option value="">أنثى</option>

                        </select>
                    </div>

                </div>
            </div>







            <div class="row" style="margin-top: 20px">


                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">العنوان</label>
                    </div>

                </div>

                <div class="col-3">

                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>
                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">رقم الجوال</label>
                    </div>

                </div>
                <div class="col-2" >


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>
                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">رقم التامين</label>
                    </div>

                </div>
                <div class="col-2">


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>

                <div class="col-1" >

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">رقم الملف</label>
                    </div>

                </div>

                <div class="col-1" >

                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>
            </div>








            <div class="row" style="margin-top: 20px">


                <div class="d-flex flex-column mb-8">
                    <label class="fs-6 fw-bold mb-2">التاريخ المرضي والعلاجي</label>
                    <textarea class="form-control" rows="3" cols="140" name="target_details" placeholder="اكتب التاريخ المرضي والعلاجي للمريض"></textarea>
                </div>



            </div>






            <div class="row" style="margin-top: 20px">


                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">الدواء</label>
                    </div>

                </div>


                <div class="col-3">

                    <div class="value">
                        <select name="selectcity" class="form-control" id="selectcity" >
                            <option value="">ابحث بالاسم العلمي للدواء</option>
                            <option value="">anything</option>

                        </select>
                    </div>

                </div>

                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">الجرعة المستخدمة</label>
                    </div>

                </div>
                <div class="col-2">


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>
                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">مدة العلاج</label>
                    </div>

                </div>
                <div class="col-2">


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>



                <div class="col-2" >

                    <!--begin::Button-->
                    <a href="#" class="btn  btn-primary">اضافة</a>
                    <!--end::Button-->

                </div>



            </div>






            <div class="row" style="margin-top: 20px">


                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">الدواء</label>
                    </div>

                </div>

                <div class="col-3">

                    <div class="value">
                        <select name="selectcity" class="form-control" id="selectcity" >
                            <option value="">ابحث بالاسم العلمي للدواء</option>
                            <option value="">anything</option>

                        </select>
                    </div>

                </div>



                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">الجرعة المستخدمة</label>
                    </div>

                </div>
                <div class="col-2">


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>
                <div class="col-1">

                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">مدة العلاج</label>
                    </div>

                </div>
                <div class="col-2">


                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                    </div>

                </div>



                <div class="col-2" >

                    <!--begin::Button-->
                    <a href="#" class="btn  btn-primary">اضافة</a>
                    <!--end::Button-->

                </div>



            </div>






            <div class="row" style="margin-top: 20px">


                <div class="d-flex flex-column mb-8">
                    <label class="fs-6 fw-bold mb-2">المبررات العلمية</label>
                    <textarea class="form-control" rows="3" cols="140" name="target_details" placeholder="اكتب المبررات العلمية"></textarea>
                </div>



            </div>




            <div class="row" style="margin-top: 20px">



                <a href="#" class="btn btn-flex btn-primary px-6">
                    <span class="svg-icon svg-icon-2x"><svg>...</svg></span>
                    <span class="d-flex flex-column align-items-start ms-2">
                        <span class="fs-3 fw-bolder">رفع المرفقات</span>
                        <span class="fs-7">صور عن المبررات العلمية </span>
                        </span>
                </a>




            </div>





        </from>

    </div>




    <!--begin::Card header-->

    <div class="card-header">
        <!--begin::Heading-->
        <div class="card-title">
            <h3>بيانات المرضى</h3>
        </div>
        <!--end::Heading-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <div class="my-1 me-4">
                <!--begin::Select-->
                <select class="form-select form-select-sm form-select-solid w-125px select2-hidden-accessible" data-control="select2" data-placeholder="Select Hours" data-hide-search="true" data-select2-id="select2-data-10-n4yp" tabindex="-1" aria-hidden="true">
                    <option value="1" selected="selected" data-select2-id="select2-data-12-zs2c">1 Hours</option>
                    <option value="2" data-select2-id="select2-data-76-ahlf">6 Hours</option>
                    <option value="3" data-select2-id="select2-data-77-vkjt">12 Hours</option>
                    <option value="4" data-select2-id="select2-data-78-7ntp">24 Hours</option>
                </select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-11-rmso" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-sm form-select-solid w-125px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-79ux-container" aria-controls="select2-79ux-container"><span class="select2-selection__rendered" id="select2-79ux-container" role="textbox" aria-readonly="true" title="1 Hours">1 Hours</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                <!--end::Select-->
            </div>
            <a href="#" class="btn btn-sm btn-primary my-1">View All</a>
        </div>
        <!--end::Toolbar-->
    </div>

    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body p-0">
        <div class="container tb_report" >
            <!--begin::Table-->
            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                <tr>
                    <th class="min-w-250px">رقم المريض</th>
                    <th class="min-w-100px">إسم المريض</th>
                    <th class="min-w-150px">رقم الهوية</th>
                    <th class="min-w-150px">الطبيب المعالج</th>
                    <th class="min-w-150px"></th>
                </tr>
                </thead>
                <!--end::Thead-->
                <!--begin::Tbody-->
                <tbody class="fw-6 fw-bold text-gray-600">
                <tr>
                    <td>
                        <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                    </td>
                    <td>
                        <span class="badge badge-light-success fs-7 fw-bolder">OK</span>
                    </td>
                    <td>Chrome - Windows</td>
                    <td>236.125.56.78</td>
                    <td>2 mins ago</td>
                    <td>
                        <!--begin::Select-->
                        <select class="form-select form-select-sm form-select-solid w-125px select2-hidden-accessible" data-control="select2" data-placeholder="Select Hours" data-hide-search="true" data-select2-id="select2-data-10-n4yp" tabindex="-1" aria-hidden="true">
                            <option value="1" selected="selected" data-select2-id="select2-data-12-zs2c">1 Hours</option>
                            <option value="2" data-select2-id="select2-data-76-ahlf">6 Hours</option>
                            <option value="3" data-select2-id="select2-data-77-vkjt">12 Hours</option>
                            <option value="4" data-select2-id="select2-data-78-7ntp">24 Hours</option>
                        </select>
                        <!--end::Select-->
                    </td>

                </tr>
                <tr>
                    <td>
                        <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                    </td>
                    <td>
                        <span class="badge badge-light-success fs-7 fw-bolder">OK</span>
                    </td>
                    <td>Safari - Mac OS</td>
                    <td>236.125.56.78</td>
                    <td>10 mins ago</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                    </td>
                    <td>
                        <span class="badge badge-light-danger fs-7 fw-bolder">ERR</span>
                    </td>
                    <td>Firefox - Windows</td>
                    <td>236.125.56.10</td>
                    <td>20 mins ago</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                    </td>
                    <td>
                        <span class="badge badge-light-success fs-7 fw-bolder">OK</span>
                    </td>
                    <td>iOS - iPhone Pro</td>
                    <td>236.125.56.54</td>
                    <td>30 mins ago</td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                    </td>
                    <td>
                        <span class="badge badge-light-warning fs-7 fw-bolder">WRN</span>
                    </td>
                    <td>Samsung Noted 5- Android</td>
                    <td>236.100.56.50</td>
                    <td>40 mins ago</td>
                </tr>
                </tbody>
                <!--end::Tbody-->

            </table>
            <!--end::Table-->

        </div>
    </div>

    <!--end::Card body-->



@endsection
