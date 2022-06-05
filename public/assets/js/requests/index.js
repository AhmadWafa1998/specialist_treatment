"use strict";


// Class definition
var ordersListingPage = function () {

    // var privs = '';
    // var swalError = (title = 'حدث خطأ') => {
    //     return swal.fire({
    //         title: title,
    //         type: "error",
    //         confirmButtonText: "الرجوع!",
    //         confirmButtonClass: "btn btn-focus m-btn m-btn--pill m-btn--air",
    //     });
    // };
    // var swalLoading = () => {
    //     return Swal.fire({
    //         html: '<div class="sbl-circ"></div>',
    //         showConfirmButton: false,
    //         allowOutsideClick: false
    //     })
    // };
    // var swalSucess = (title = 'نجحت العملية!') => {
    //     return swal.fire({
    //         title: title,
    //         type: "success",
    //         confirmButtonText: "الرجوع!"
    //     });
    // }
    //
    //
    // var getPrivs = () => {
    //     $.ajax({
    //         url: orders_getprivs_url,
    //     }).done(function (data) {
    //         privs = JSON.parse(data);
    //     });
    // }


    function bindTable() {
        myDataTable('#m_datatable',
            {
                dom: '<<t>lip>',
                'processing': true,
                'serverSide': true,
                'serverMethod': 'GET',
                "pagingType": "full_numbers",
                "ordering": false,
                searching: true,
                'ajax': {
                    'url': get_rows,
                    global: false,
                    // dataSrc: "data.aaData",
                    "data": function (d) {
                        $($('[id="options_form"]').serializeArray()).each(function (index, el) {
                            d[el.name] = el.value;
                        });
                    }
                },
                "columns": [
                    {
                        "data": "ID",
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "ID",
                        "width": '9%'
                    },
                    {
                        "data": "CREATED_AT",
                        "width": '9%',
                        render: function (data, type, row, meta) {
                            const date = new Date(row.DATE_OF_ORDER);
                            return date.getDate() + '-' + (date.getMonth() + 1) + '-' + date.getFullYear();
                        }
                    },
                    {
                        "data": "PATIENT_NAME",
                    },
                    {
                        "data": "HOSPITAL_NAME",
                        "width": '9%',
                    },
                    {
                        "data": "DOCTOR_NAME",
                        "width": '15%',
                    },
                    {
                        "data": "STATUS",
                        render: function (data, type, row, meta) {
                            var e = {
                                0: {
                                    title: "انتظار",
                                    class: "m-badge--silver"
                                },
                                1: {
                                    title: "معتمد",
                                    class: " m-badge--success"
                                },
                                2: {
                                    title: "مرفوض",
                                    class: "m-badge--danger"
                                }
                            };
                            return '<span class="m-badge ' + e[row.STATUS].class + ' m-badge--wide">' + e[row.STATUS].title + "</span>"
                        }
                    },
                    {
                        "data": "STATUS",
                        render: function (data, type, row, meta) {
                            const viewButton = '<a  class="dropdown-item view" title="عرض" ele_id= ' + row.ID + '><i class="la 	la-circle-thin"></i>عرض</a>'
                            const editButton = '<a class="dropdown-item edit" title="تعديل" ele_id= ' + row.ID + '><i class="la la-edit"></i>تعديل</a>'
                            const approveButton = '<a class="dropdown-item approve" href="#" ele_id= ' + row.ID + '><i class="la la-check"></i>اعتماد</a>'
                            const declineButton = '<a class="dropdown-item decline" ele_id= ' + row.ID + '><i class="la la-xmark"></i>رفض</a>'
                            //m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill
                            if (privs.canEditOrder && privs.canApproveOrder && privs.canCancelOrder) {
                                return '<div class="dropdown">' + '<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-right">' + viewButton + editButton + approveButton + declineButton + '</div></div>';
                            } else if ((privs.canEditOrder) && (privs.canApproveOrder)) {
                                return '<div class="dropdown">' + '<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-right">' + viewButton + editButton + approveButton + '</div></div>';

                            } else if ((privs.canEditOrder) && privs.canCancelOrder) {
                                return '<div class="dropdown">' + '<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-right">' + viewButton + editButton + declineButton + '</div></div>';
                            } else if ((privs.canApproveOrder) && (privs.canCancelOrder)) {
                                return '<div class="dropdown">' + '<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-right">' + viewButton + approveButton + declineButton + '</div></div>';
                            } else if ((privs.canApproveOrder)) {
                                return '<div class="dropdown">' + '<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-right">' + viewButton + approveButton + '</div></div>';

                            } else if ((privs.canCancelOrder)) {
                                return '<div class="dropdown">' + '<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-right">' + viewButton + declineButton + '</div></div>';
                            } else if (privs.canEditOrder) {
                                return '<div class="dropdown">' + '<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown"><i class="la la-ellipsis-h"></i></a>' +
                                    '<div class="dropdown-menu dropdown-menu-right">' + viewButton + editButton + '</div></div>';
                            } else {
                                return '';
                            }
                        }
                    }
                ]
            });
    }
    // $(document).on("click", ".approve", function () {
    //     var id = $(this).attr('ele_id');
    //     swal({
    //         title: "هل تريد اعتماد الطلب?",
    //         type: "warning",
    //         showCancelButton: !0,
    //         cancelButtonText: "الغاء",
    //         confirmButtonText: "اعتماد!"
    //     }).then(function (e) {
    //         if(e.hasOwnProperty('dismiss')){
    //             return ;
    //         }
    //         $.ajax({
    //             url: orders_sendStatus_url,
    //             method: "GET",
    //             data: { order_id: id, status: 1 }
    //         }).done(function (data) {
    //             if (data.hasOwnProperty('success')) {
    //                 swalSucess(data.success)
    //                 bindTable();
    //                 return;
    //             }
    //             else {
    //                 swalError(data.failed);
    //                 return;
    //             }
    //         });
    //     })
    // });
    //
    // $(document).on("click", ".decline", function () {
    //     var id = $(this).attr('ele_id');
    //
    //     swal({
    //         title: "هل تريد رفض الطلب?",
    //         type: "warning",
    //         showCancelButton: !0,
    //         cancelButtonText: "الغاء",
    //         confirmButtonText: "رفض!"
    //     }).then(function (e) {
    //         if(e.hasOwnProperty('dismiss')){
    //             return ;
    //         }
    //         $.ajax({
    //             url: orders_sendStatus_url,
    //             method: "GET",
    //             data: { order_id: id, status: 2 }
    //         }).done(function (data) {
    //             if (data.hasOwnProperty('success')) {
    //                 swalSucess(data.success)
    //                 bindTable();
    //                 return;
    //             }
    //             else {
    //                 swalError(data.failed);
    //                 return;
    //             }
    //         });
    //
    //     })
    // });
    //
    // $(document).on("click", ".view", function () {
    //     var id = $(this).attr('ele_id');
    //     $('#view_order_modal form')[0].reset();
    //     var pop = swalLoading();
    //     $.ajax({
    //         url: orders_getOrder_url,
    //         data: { order_id: id },
    //         timeout: 10000, // sets timeout to 10 seconds
    //     }).done(function (data) {
    //         if (data == 'not-found') {
    //             swalError();
    //             return;
    //         } else if (data == 'error') {
    //             swalError();
    //             return;
    //         }
    //         var order = JSON.parse(data);
    //         $('#view_order_modal input[name=number_of_order]').val(order[0].NUMBER_OF_ORDER);
    //         $('#view_order_modal input[name=date_order]').val(order[0].DATE_OF_ORDER.substring(0, order[0].DATE_OF_ORDER.indexOf(' ')));
    //         $('#view_order_modal input[name=OWNER_ORDER]').val(order[0].OWNER_ORDER);
    //         //TYPE OF ORDER
    //         if (order[0].TYPE_OF_ORDER == 1) {
    //             $('#view_order_modal input[name=type_of_order]').val('احتياج');
    //         }
    //         else if (order[0].TYPE_OF_ORDER == 2) {
    //             $('#view_order_modal input[name=type_of_order]').val('تجديد');
    //         }
    //         else {
    //             $('#view_order_modal input[name=type_of_order]').val('');
    //         }
    //         //TYPE OF MACHINE
    //         if (order[0].TYPE_OF_MACHINE == 1) {
    //             $('#view_order_modal input[name=type_of_machine]').val('تصوير/ طباعة');
    //         }
    //         else if (order[0].TYPE_OF_MACHINE == 3) {
    //             $('#view_order_modal input[name=type_of_machine]').val('سكانر');
    //         }
    //         else {
    //             $('#view_order_modal input[name=type_of_machine]').val('');
    //         }
    //         //status
    //         var e = {
    //             0: {
    //                 title: "انتظار",
    //                 class: "m-badge--silver"
    //             },
    //             1: {
    //                 title: "معتمد",
    //                 class: " m-badge--success"
    //             },
    //             2: {
    //                 title: "مرفوض",
    //                 class: "m-badge--danger"
    //             }
    //         };
    //         $('#view_order_modal .status').html('<span class="m-badge ' + e[order[0].STATUS].class + ' m-badge--wide">' + e[order[0].STATUS].title + "</span>");
    //         $('#view_order_modal input[name=PLACE_ORDER_DELIVERY]').val(order[0].PLACE_ORDER_DELIVERY);
    //         $('#view_order_modal input[name=STATUS]').val(order[0].STATUS);
    //         $('#view_order_modal textarea[name=note_for_order]').val(order[0].NOTE_FOR_ORDER);
    //         swal.close(pop);
    //         $('#view_order_modal').modal('show')
    //     }).fail(function () {
    //         swal.close(pop);
    //         swalError();
    //     });
    // });
    //
    // $(document).on("click", ".edit", function () {
    //     $('#edit_order_modal button[type=reset]').click();
    //     var id = $(this).attr('ele_id');
    //     $('#edit_order_modal form')[0].reset();
    //     $("#edit_order_modal select[name=type_of_order]").val('default').selectpicker("refresh");
    //     $("#edit_order_modal select[name=type_of_machine]").val('default').selectpicker("refresh");
    //     var pop = swalLoading();
    //     $.ajax({
    //         url: orders_getOrder_url,
    //         data: { order_id: id },
    //         timeout: 10000, // sets timeout to 10 seconds
    //     }).done(function (data) {
    //         if (data.hasOwnProperty('failed')) {
    //             swalError(data.failed);
    //             return;
    //         }
    //         // console.log(data);
    //         // if (data == 'الطلب غير موجود') {
    //
    //         //     return;
    //         // }
    //         // else if (data == 'error') {
    //         //     swalError();
    //         //     return;
    //         // }
    //
    //         var order = JSON.parse(data);
    //         $('#edit_order_modal input[name=order_id]').val(order[0].ID);
    //         $('#edit_order_modal input[name=number_of_order]').val(order[0].NUMBER_OF_ORDER);
    //         $('#edit_order_modal input[name=date_order]').val(order[0].DATE_OF_ORDER.substring(0, order[0].DATE_OF_ORDER.indexOf(' ')));
    //         $('#edit_order_modal input[name=OWNER_ORDER]').val(order[0].OWNER_ORDER);
    //         $('#edit_order_modal select[name=type_of_machine]>option').each(function () {
    //             if ($(this).attr('value') == (order[0].TYPE_OF_MACHINE)) {
    //                 $(this).prop('selected', true);
    //             }
    //         });
    //         $('#edit_order_modal select[name=type_of_machine]').selectpicker('refresh')
    //         $('#edit_order_modal select[name=type_of_order]>option').each(function () {
    //             if ($(this).attr('value') == (order[0].TYPE_OF_ORDER)) {
    //                 $(this).prop('selected', true);
    //             }
    //         });
    //         $('#edit_order_modal select[name=type_of_order]').selectpicker('refresh')
    //         $('#edit_order_modal input[name=PLACE_OF_ORDER]').val(order[0].PLACE_OF_ORDER);
    //         $('#edit_order_modal input[name=PLACE_ORDER_DELIVERY]').val(order[0].PLACE_ORDER_DELIVERY);
    //         $('#edit_order_modal textarea[name=note_for_order]').val(order[0].NOTE_FOR_ORDER);
    //         swal.close(pop);
    //         $('#edit_order_modal').modal('show');
    //     }).fail(function () {
    //         swal.close(pop);
    //         swalError();
    //     });
    // });
    // $('[id="options_form"]').submit(function (e) {
    //     e.preventDefault();
    //     bindTable();
    // });
    //
    // $('[id="options_form"] button[type=reset]').on('click', function () {
    //     $("#m_form_status").val('').selectpicker("refresh");
    //     $("#m_form_order_type").val('').selectpicker("refresh");
    //     $("#m_form_machine_type").val('').selectpicker("refresh");
    //     bindTable();
    // });
    //
    // $(".readonly").on('keydown paste focus mousedown', function(e) {
    //     if (e.keyCode != 9) // ignore tab
    //         e.preventDefault();
    // });
    //
    // $('#create_order_modal button[type=reset], #edit_order_modal button[type=reset]').on('click', function() {
    //     var form = $(this).closest('.modal').attr('id');
    //     $("#" + form + " select[name=type_of_order]").val(' ').selectpicker("refresh");
    //     $("#" + form + " select[name=type_of_machine]").val(' ').selectpicker("refresh");
    //     $('.invalid-feedback').each(function() {
    //         $(this).html(' ');
    //     })
    //     $('.border-danger').each(function() {
    //         $(this).removeClass('border-danger');
    //     })
    //     $('.is-invalid').each(function() {
    //         $(this).removeClass('is-invalid');
    //     })
    // });
    //
    //
    //
    // $("#create_order_form, #edit_order_form").submit(function(e) {
    //
    //     e.preventDefault(); // avoid to execute the actual submit of the form.
    //
    //     var form = $(this);
    //     var formId = $(this).attr('id');
    //     var modal = $(this).closest('.modal ').attr('id');
    //     var actionUrl = form.attr('action');
    //     $('#'+formId+' button[data-dismiss=modal]').hide();
    //     mApp.block('#'+formId+" .modal-content", {
    //         overlayColor: "#000000",
    //         type: "loader",
    //         state: "primary",
    //         // message: "Processing..."
    //     });
    //     $.ajax({
    //         type: "POST",
    //         url: actionUrl ,
    //         data: form.serialize(), // serializes the form's elements.
    //         success: function(data) {
    //             if (data.hasOwnProperty('failed')) {
    //                 swal.fire({
    //                     title: data.failed,
    //                     type: "error",
    //                     confirmButtonText: "الرجوع!",
    //                     confirmButtonClass: "btn btn-focus m-btn m-btn--pill m-btn--air",
    //                     timer: 2000,
    //                 });
    //                 for (var key in data.errors) {
    //                     if ($('#'+formId+' [name=' + key + ']')) {
    //                         $('#'+formId+' [name=' + key + ']').attr('readonly') ? $(
    //                             '#'+formId+' [name=' + key + ']').addClass(
    //                             'border-danger') : $('#'+formId+' [name=' + key + ']')
    //                             .addClass('is-invalid');
    //                         $('#'+formId+' [name=' + key + ']').is('select') ? $(
    //                             '#'+formId+' [name=' + key + ']').next('button')
    //                             .addClass('border-danger') : "";
    //
    //                         $('#'+formId+' [name=' + key + ']').closest('div').find(
    //                             '.invalid-feedback').html(data.errors[key][0]);
    //                         $('#'+formId+' [name=' + key + ']').parent().next(
    //                             '.invalid-feedback').html(data.errors[key][0]);
    //                     }
    //                 }
    //             } else if (data.hasOwnProperty('success')) {
    //                 swal.fire({
    //                     title: data.success,
    //                     type: "success",
    //                     confirmButtonText: "الرجوع!"
    //                 });
    //
    //                 $('#'+modal+' button[type=reset]').click();
    //                 $('#'+modal).modal('hide');
    //                 bindTable();
    //             }
    //             mApp.unblock('#'+modal+" .modal-content")
    //             $('#'+modal+' button[data-dismiss=modal]').show();
    //         }
    //     });
    // });
    //
    // $('#create_getData, #edit_getData').on('click', function(e) {
    //     var source = $(this).closest(".modal").attr('id');
    //     $('#getPlace .modal-header button').attr('data-target', '#' + source);
    //     $('#getPlace').modal('show');
    // });

    return {
        // Public functions
        init: function () {
            // getPrivs();
            bindTable();
        }
    };
}();


jQuery(document).ready(function () {
    ordersListingPage.init();
});

