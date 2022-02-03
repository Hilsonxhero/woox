"use strict";
var KTUsersAddRole = function () {
    const t = document.getElementById("kt_modal_add_role"),
        e = t.querySelector("#kt_modal_add_role_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function () {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        name: {
                            validators: {
                                notEmpty: {
                                    message: "عنوان نقش کاربری الزامی است"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                });
                t.querySelector('[data-kt-roles-modal-action="close"]').addEventListener("click", (t => {
                    t.preventDefault(), Swal.fire({
                        text: "Are you sure you would like to close?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, close it!",
                        cancelButtonText: "No, return",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: "btn btn-active-light"
                        }
                    }).then((function (t) {
                        t.value && n.hide()
                    }))
                })), t.querySelector('[data-kt-roles-modal-action="cancel"]').addEventListener("click", (t => {
                    t.preventDefault(), Swal.fire({
                        text: "Are you sure you would like to cancel?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, cancel it!",
                        cancelButtonText: "No, return",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: "btn btn-active-light"
                        }
                    }).then((function (t) {
                        t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "Your form has not been cancelled!.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }));
                const r = t.querySelector('[data-kt-roles-modal-action="submit"]');
                const f = document.getElementById("kt_modal_add_role_form")
                r.addEventListener("click", (function (t) {
                    r.preventDefault(), o && o.validate().then((function (t) {
                        "Valid" == t ?  f.submit() : Swal.fire({
                            text: "با عرض پوزش، به نظر می رسد برخی از خطاها شناسایی شده است، لطفا دوباره امتحان کنید.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "باشه",
                            customClass: {confirmButton: "btn btn-primary"}
                        })
                    }))

                }))
            })(), (() => {
                const t = e.querySelector("#kt_roles_select_all"),
                    n = e.querySelectorAll('[type="checkbox"]');
                t.addEventListener("change", (t => {
                    n.forEach((e => {
                        e.checked = t.target.checked
                    }))
                }))
            })()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTUsersAddRole.init()
}));
