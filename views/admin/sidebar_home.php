<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
         data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
         data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
         data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
            
            <div id="kt_app_sidebar_toggle"
                 class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                 data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                 data-kt-toggle-name="app-sidebar-minimize">
                <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>

        <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
            <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                     data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                     data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                     data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                     data-kt-scroll-save-state="true">
                    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                         id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Quản lý</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="?controller=giayto">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                        <span class="menu-title">Quản lý Giấy tờ</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="?controller=hoso">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                        <span class="menu-title">Quản lý Hồ sơ</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="views/tracuu.php">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                        <span class="menu-title">Tra cứu</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="?controller=group">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                        <span class="menu-title">Quản lý Group</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="?controller=user">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                        <span class="menu-title">Quản lý User</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="?controller=module">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                        <span class="menu-title">Quản lý chức năng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>