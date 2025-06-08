<?php
require_once 'views/admin/header_home.php';
require_once 'views/admin/sidebar_home.php';
?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="col-xl-12 mb-5 mb-xl-10">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-5 w-100">
                        <div class="d-flex justify-content-between mb-10 w-100">
                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">
                                                    Quản lý Group
                                                </span>
                            </h3>
                            <a class="btn btn-sm fw-bold btn-primary" onclick="them()">Thêm Group</a>
                        </div>
                    </div>

                    <div class="card-body pt-2">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                <div class="table-responsive">
                                    <div id="vebang"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Modal Sửa / Thêm -->
    <div class="modal" id="suagroup">
        <div class="modal-dialog modal-xl" style="width:100%">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="suablogLabel">Cập nhật</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="form-action">
                    <div class="modal-body" id="modalSua">

                    </div>
                </form>
            </div>
        </div>
    </div>
	<?php require_once 'views/admin/footer_home.php'; ?>

    <script>
        vebang();

        function them() {
            $.ajax({
                url: "?controller=group&action=them",
                dataType: "html",
                data: {},
                type: "POST",
                success: function (data) {
                   
                    $('#modalSua').html(data);
                    $('#suagroup').find('.modal-title').text('Thêm giấy tờ');
                    $('#suagroup').modal('show');
                },
                error: function () {
                }
            });
        }
        function phanquyen(id) {
            $.ajax({
                url: "?controller=group&action=phanquyen",
                dataType: "html",
                data: {
                    id
                },
                type: "POST",
                success: function (data) {
                    $('#modalSua').html(data);
                    $('#suagroup').find('.modal-title').text('Phân quyền');
                    $('#suagroup').modal('show');
                },
                error: function () {
                }
            });
        }
        function xacnhanphanquyen(id){
            let selectedPermissions = [];
            $("input[name='permissions[]']:checked").each(function () {
                selectedPermissions.push($(this).val());
            });
            console.log(selectedPermissions)
            if (selectedPermissions) {
                $.ajax({
                    url: "?controller=group&action=permissions",
                    dataType: "json",
                    data: {
                        id,permissions : selectedPermissions
                    },
                    type: "POST",
                    success: function (data) {
                        $('#suagroup').modal('hide');
                        thanhcong(data.message, 3000);
                        vebang();
                    },
                    error: function () {
                        
                    }
                });
            } else {
                thatbai('Sửa thất bại', 3000);
            }
        }
        function sua(id) {
            $.ajax({
                url: "?controller=group&action=sua",
                dataType: "html",
                data: {id},
                type: "POST",
                success: function (data) {
                    $('#modalSua').html(data);
                    $('#suagroup').find('.modal-title').text('Sửa giấy tờ');
                    $('#suagroup').modal('show');
                },
                error: function () {
                }
            });
        }

        function vebang() {
            $.ajax({
                url: "?controller=group&action=vebang",
                dataType: "text",
                data: {},
                type: "POST",
                success: function (data) {
                    $('#vebang').html(data);
                },
                error: function () {
                }
            });
        }

        function xacnhanthem() {
            let group = $('#group').val();
            if (group) {
                $.ajax({
                    url: "?controller=group&action=create",
                    dataType: "json",
                    data: {
                        group: group
                    },
                    type: "POST",
                    success: function (data) {
                        console.log(data)
                        $('#suagroup').modal('hide');
                        thanhcong(data.message, 3000);
                        vebang();
                    },
                    error: function () {
                        
                    }
                });
            } else {
                thatbai('Thêm thất bại', 3000);
            }
          
        }

        function xacnhansua(id){
            let group = $('#group').val();
            if (group) {
                $.ajax({
                    url: "?controller=group&action=update",
                    dataType: "json",
                    data: {
                        id,group
                    },
                    type: "POST",
                    success: function (data) {
                        $('#suagroup').modal('hide');
                        thanhcong(data.message, 3000);
                        vebang();
                    },
                    error: function () {
                        
                    }
                });
            } else {
                thatbai('Sửa thất bại', 3000);
            }
        }

          function xoa(id) {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa !',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý!',
                cancelButtonText: 'Hủy!',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                          url: "?controller=group&action=delete",
                        dataType: "json",
                        data: {id: id},
                        type: "POST",
                        success: function (data) {
                            Swal.fire(
                                'Đã xóa!',
                                'thành công!.',
                                'success'
                            );
                            window.setTimeout(function () {
                                thanhcong(data.message, 3000);
                                vebang();
                            }, 700);
                        },
                        error: function () {
                        }
                    });
                }
            });
        }
    </script>


