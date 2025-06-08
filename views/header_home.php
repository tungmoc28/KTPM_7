<?php
session_start();
error_reporting(0);
if($_SESSION['user_id'] == '' || empty($_SESSION['user_id'])){
    header("Location: views/dangnhap.php");
}
$controller_now = $_REQUEST['controller'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <link rel="shortcut icon" href="../assets/image/logo.png"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="views/admin/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="views/admin/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <style href="views/admin/assets/css/custom.css"></style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.13.1/ckeditor.js"
            integrity="sha512-7ug4FvfIrFdUN0+aY4vhRsoREQURNQHJ6zkVuV98ShIZePU4t+7NcLi+BlV6WiabLUVBPq547EYq5tbCc0ViKA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default dark-sidebar">
<style>
    .chosen-container {
        width: 100% !important;
    }

    .single-line {
        max-height: 1.2em; /* Adjust to fit one line of text */
        overflow: hidden; /* Hide any overflow content */
        white-space: nowrap; /* Prevent wrapping to a new line */
    }
</style>

<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!-- Page -->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        <!--Header-->
        <div id="kt_app_header" class="app-header" data-kt-sticky="true"
             data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
             data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
                 id="kt_app_header_container">
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                         id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                   
                </div>

                <!-- Main Header -->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                     id="kt_app_header_wrapper">
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                         data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                         data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                         data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                         data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                        <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                             id="kt_app_header_menu" data-kt-menu="true">
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                    <span class="menu-link">
                                        <span class="menu-title">Dashboards</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                            </div>
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                    <span class="menu-link">
                                        <span class="menu-title">Quản lý</span>
                                        <span class="menu-arrow d-lg-none"></span>
                                    </span>
                                <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    <a href="?controller=giayto">
                                        <div
                                                class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Quản lý giấy tờ
                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="?controller=hoso">
                                        <div
                                                class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Quản lý hồ sơ
                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="views/tracuu.php">
                                        <div
                                                class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Tra cứu
                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="?controller=group">
                                        <div
                                                class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Quản lý Group
                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="?controller=user">
                                        <div
                                                class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Quản lý User
                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                    <a href="?controller=module">
                                        <div
                                                class="menu-item menu-lg-down-accordion">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">
                                                    Quản lý Chức năng
                                                </span>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    `
                    <div class="app-navbar flex-shrink-0">
                        `
                        <div class="app-navbar-item ms-1 ms-md-4">
                            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                 data-kt-menu="true" id="kt_menu_notifications">
                                <div class="d-flex flex-column bgi-no-repeat rounded-top" style="
                        background-image: url('assets/media/misc/menu-header-bg.jpg');
                      ">
                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                        Thông báo
                                        <span class="fs-8 opacity-75 ps-3">24 news</span>
                                    </h3>
                                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                        <li class="nav-item">
                                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                               data-bs-toggle="tab" href="#kt_topbar_notifications_1">
                                                Hệ thống
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_topbar_notifications_1"
                                         role="tabpanel">
                                        <div class="scroll-y mh-325px my-5 px-8">
                                            <div class="d-flex flex-stack py-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                    </div>
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                            Alice</a>
                                                        <div class="text-gray-500 fs-7">
                                                            Phase 1 development
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="badge badge-light fs-8">1 hr</span>
                                            </div>
                                            <div class="d-flex flex-stack py-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-information fs-2 text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                    </div>
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                            Confidential</a>
                                                        <div class="text-gray-500 fs-7">
                                                            Confidential staff documents
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="badge badge-light fs-8">2 hrs</span>
                                            </div>
                                            <div class="d-flex flex-stack py-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                    </div>
                                                    <div class="mb-0 me-2">
                                                        <a href="#"
                                                           class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                            HR</a>
                                                        <div class="text-gray-500 fs-7">
                                                            Corporeate staff profiles
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="badge badge-light fs-8">5 hrs</span>
                                            </div>
                                        </div>
                                        <div class="py-3 text-center border-top">
                                            <a href="pages/user-profile/activity.html"
                                               class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                <i class="ki-duotone ki-arrow-right fs-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span> </i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-navbar-item ms-1 ms-md-4">
                        </div>
                        <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
                            <div class="cursor-pointer symbol symbol-35px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                <img src="" class="rounded-3" alt="user"/>
                            </div>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                 data-kt-menu="true">
                                <div class="separator my-2"></div>
                                <div class="menu-item px-5">
                                    <a onclick="dangxuat()"
                                       class="menu-link px-5">Sign Out</a>
                                </div>
                            </div>
                        </div>
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                                 id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-element-4 fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:Main Header -->
            </div>
        </div>