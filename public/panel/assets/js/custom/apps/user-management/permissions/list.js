"use strict";
var KTUsersPermissionsList = function () {
    var t, e,id;
    return {
        init: function () {
            (e = document.querySelector("#kt_permissions_table")) && (e.querySelectorAll("tbody tr").forEach((t => {
                const e = t.querySelectorAll("td"), n = moment(e[2].innerHTML, "DD MMM YYYY, LT").format();
                e[2].setAttribute("data-order", n)
            })), t = $(e).DataTable({
                info: !1,
                order: [],
                columnDefs: [{ orderable: !1, targets: 1 }, { orderable: !1 }]
            }), document.querySelector('[data-kt-permissions-table-filter="search"]').addEventListener("keyup", (function (e) {
                t.search(e.target.value).draw()
            })), e.querySelectorAll('[data-kt-permissions-table-filter="delete_row"]').forEach((e => {
                e.addEventListener("click", (function (e) {
                    id = $(e.target.closest("button")).data('id')
                    e.preventDefault();
                    const n = e.target.closest("tr"), o = n.querySelectorAll("td")[0].innerText;
                    Swal.fire({
                        text: "آیا از حذف " + o + " اطمینان دارید ؟ ",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "بله",
                        cancelButtonText: "نه",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((function (e) {

                        if (!e.value) {
                            e.dismiss
                        }

                        // let permission = $(e).data('id')
                        // console.log('id',permission);

                        $("#js-delete-form").attr('action', `/panel/permissions/${id}`)
                        $("#js-delete-form").submit()


                    }))
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTUsersPermissionsList.init()
}));
