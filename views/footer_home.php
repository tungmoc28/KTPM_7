
<!--end::Footer-->
</div>
<!--end:::Main-->
</div>
<!--end::Wrapper-->


</div>
<!--end::Page-->
</div>

<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
     data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
     data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <div class="card-title">
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">c</a>
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                </div>
            </div>
            <div class="card-toolbar">
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-dots-square fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                         data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                Contacts
                            </div>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_users_search">Add
                                Contact</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                <span class="ms-2" data-bs-toggle="tooltip"
                                      title="Specify a contact email to send an invitation">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i> </span></a>
                        </div>
                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                             data-kt-menu-placement="right-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                       title="Coming soon">Create Group</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                       title="Coming soon">Invite Members</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                       title="Coming soon">Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                               title="Coming soon">Settings</a>
                        </div>
                    </div>
                </div>
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
        </div>
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                 data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                 data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <div class="d-flex justify-content-start mb-10">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg"/>
                            </div>
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            How likely are you to recommend our company to your friends
                            and family ?
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-10">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg"/>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            Hey there, we’re just writing to let you know that you’ve been
                            subscribed to a repository on GitHub.
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-10">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg"/>
                            </div>
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Ok, Understood!
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-10">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg"/>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            You’ll receive notifications for all issues, pull requests!
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-10">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg"/>
                            </div>
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            You can unwatch this repository immediately by clicking here:
                            <a href="https://keenthemes.com">Keenthemes.com</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-10">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg"/>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text">
                            Most purchased Business courses during this sale!
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-10">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg"/>
                            </div>
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Company BBQ to celebrate the last quater achievements and
                            goals. Food and drinks provided
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg"/>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                             data-kt-element="message-text"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/300-25.jpg"/>
                            </div>
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                             data-kt-element="message-text">
                            Right before vacation season we have the next Big Deal for
                            you.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                          placeholder="Type a message"></textarea>
            <div class="d-flex flex-stack">
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-paper-clip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-duotone ki-cloud-add fs-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
                <button class="btn btn-primary" type="button" data-kt-element="send">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>
<!--end::Chat drawer-->


<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="views/admin/assets/plugins/global/plugins.bundle.js"></script>
<script src="views/admin/assets/js/scripts.bundle.js"></script>
   <script src="
https://cdn.jsdelivr.net/npm/chosen-js@1.8.7/chosen.jquery.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/chosen-js@1.8.7/chosen.min.css
" rel="stylesheet">
<!--end::Global Javascript Bundle-->
<script src="assets/datatable/jquery.dataTable.min.js"></script>
<script src="assets/datatable/dataTables.bootstrap.min.js"></script>
<script src="assets/datatable/dataTables.buttons.min.js"></script>
<script src="assets/datatable/dataTables.min.js"></script>


<script>
    
    function dangxuat() {
        $.ajax({
            url: "./?controller=dangnhap&action=dangxuat",
            dataType: "json",
            data: {
            },
            type: "POST",
            success: function (data) {
                if(data.success == true){
                    thanhcong(data.message, 3000);
                    window.location.href = "views/dangnhap.php"; 
                }else{
                    thatbai(data.message, 3000);
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", status, error, xhr.responseText);
                thatbai("Đăng xuất thất bại!", 3000);
            }
        });
       
    }
    function thatbai(msg, duration) {
        let width = screen.width;
        let height = screen.height;
        var el = document.createElement("div");
        if(width <= height) {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:96%;z-index:999999");
        } else {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:25%;z-index:999999");
        }

        el.innerHTML = '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button> <strong>Error!! </strong>' + msg + '</div>';
        setTimeout(function () {
            el.parentNode.removeChild(el);
        }, duration);
        document.body.appendChild(el);
    }

    function thanhcong(msg, duration) {
        console.log(123)
        let width = screen.width;
        let height = screen.height;
        var el = document.createElement("div");
        if(width <= height) {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:96%;z-index:999999");
        } else {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:25%;z-index:999999");
        }

        el.innerHTML = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button> <strong>Success!! </strong>' + msg + '</div>';
        setTimeout(function () {
            el.parentNode.removeChild(el);
        }, duration);
        document.body.appendChild(el);
    }
</script>
</body>

</html>
