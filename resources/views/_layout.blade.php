<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head>
    <title>@yield('title', 'MOH')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8"/>

    <link rel="shortcut icon" href="{{asset('assets/media/avatars/150-27.png')}}"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&display=swap" rel="stylesheet">
    <!--end::Fonts-->


    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/my.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    @yield('css')
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-tablet-and-mobile-fixed  aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

<!--begin::Main-->

<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        @include('layout.sidebar')
        <!--end::Aside-->


        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">


            <!--begin::Header-->
        @include('layout.header')
        <!--end::Header-->




            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">


                    @yield('content')


                </div>
                <!--end::Post-->

            </div>
            <!--end::Content-->

            <!--begin::Footer-->
        @include('layout.footer')
        <!--end::Footer-->


        </div>
        <!--end::Wrapper-->

    </div>
    <!--end::Page-->
</div>
<!--end::Root-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                          fill="black"/>
					<path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="black"/>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->

<!--end::Main-->

<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<script>
    function myDataTable(el, options) {
        if ($.fn.DataTable.isDataTable(el)) {
            $(el).dataTable().api().clear();
            $(el).dataTable().api().draw();
            return $(el).dataTable();
        }
        $.fn.dataTable.ext.errMode = 'none';
        let settings = $.extend({
            language: {url: '{{asset('js/DataTable_Arabic.json')}}'},
        }, options);
        return $(el).dataTable(settings);
    }
</script>
<!--end::Global Javascript Bundle-->
@yield('js')
<!--begin::Page Custom Javascript(used by this page)-->
{{--    <script src="{{asset('assets/js/custom/apps/customers/add.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/custom/widgets.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>--}}
<!--end::Page Custom Javascript-->


{{--    <script>--}}

{{--    $('.form_report').hide();--}}
{{--    $('.form_session').hide();--}}
{{--    $('.form_member').hide();--}}
{{--    <!--begin::for hide the form-->--}}

{{--    $(document).on('click', '.show_report', function (e) {--}}

{{--        $('.form_report').toggle();--}}
{{--    });--}}

{{--    $(document).on('click', '.show_session', function (e) {--}}

{{--        $('.form_session').toggle();--}}
{{--    });--}}
{{--    $(document).on('click', '.show_member', function (e) {--}}

{{--        $('.form_member').toggle();--}}
{{--    });--}}



{{--    <!--end::for hide the form-->--}}


{{--    <!--begin::for date pick-->--}}

{{--    $( document ).ready(function() {--}}
{{--        $(function() {--}}
{{--            $('input[name="birthday"]').daterangepicker({--}}
{{--                singleDatePicker: true,--}}
{{--                showDropdowns: true,--}}
{{--                minYear: 1901,--}}
{{--                maxYear: parseInt(moment().format('YYYY'),10)--}}
{{--            }, function(start, end, label) {--}}
{{--                var years = moment().diff(start, 'years');--}}
{{--                alert("???? ?????????? ???????? ????????????");--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}

{{--    <!--end::for date pick-->--}}

{{--</script>--}}
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
