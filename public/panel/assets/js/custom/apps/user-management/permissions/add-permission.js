"use strict";
var KTUsersAddPermission = function () {
    const t = document.getElementById("kt_modal_add_permission"), e = t.querySelector("#kt_modal_add_permission_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function () {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        name: {
                            validators:
                                {
                                    notEmpty:
                                        {
                                            message: "فیلد عنوان مجوز الزامی می باشد"
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
                t.querySelector('[data-kt-permissions-modal-action="close"]').addEventListener("click", (t => {
                    n.hide()
                })), t.querySelector('[data-kt-permissions-modal-action="cancel"]').addEventListener("click", (t => {
                    t.preventDefault(), (e.reset(), n.hide())
                }));

                const i = t.querySelector('[data-kt-permissions-modal-action="submit"]');
                const f = document.getElementById("kt_modal_add_permission_form")
                i.addEventListener("click", (function (t) {
                    t.preventDefault(), o && o.validate().then((function (t) {
                        "Valid" == t ?  f.submit() : Swal.fire({
                            text: "با عرض پوزش، به نظر می رسد برخی از خطاها شناسایی شده است، لطفا دوباره امتحان کنید.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "باشه",
                            customClass: {confirmButton: "btn btn-primary"}
                        })
                    }))
                }))

            })()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTUsersAddPermission.init()
}));
