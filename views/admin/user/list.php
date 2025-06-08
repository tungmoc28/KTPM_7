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
                                                    Quản lý User
                                                </span>
                            </h3>
                            <a class="btn btn-sm fw-bold btn-primary" onclick="them()">Thêm User</a>
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
    <div class="modal" id="suauser">
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
                url: "?controller=user&action=them",
                dataType: "html",
                data: {},
                type: "POST",
                success: function (data) {
                   
                    $('#modalSua').html(data);
                    $('#suauser').find('.modal-title').text('Thêm giấy tờ');
                    $('#suauser').modal('show');
                },
                error: function () {
                }
            });
        }

         function sua(id) {
            $.ajax({
                url: "?controller=user&action=sua",
                dataType: "html",
                data: {id},
                type: "POST",
                success: function (data) {
                    $('#modalSua').html(data);
                    $('#suauser').find('.modal-title').text('Sửa giấy tờ');
                    $('#suauser').modal('show');
                },
                error: function () {
                }
            });
        }

        function vebang() {
            $.ajax({
                url: "?controller=user&action=vebang",
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
            let taikhoan = $('#taikhoan').val();
            let matkhau = $('#matkhau').val();
            let group = $('#group').val();
            if (taikhoan) {
                $.ajax({
                    url: "?controller=user&action=create",
                    dataType: "json",
                    data: {
                        taikhoan,matkhau,group
                    },
                    type: "POST",
                    success: function (data) {
                        console.log(data)
                        $('#suauser').modal('hide');
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
            let taikhoan = $('#taikhoan').val();
            let matkhau = $('#matkhau').val();
            let group = $('#group').val();         
            if (taikhoan) {
                $.ajax({
                    url: "?controller=user&action=update",
                    dataType: "json",
                    data: {
                        taikhoan,matkhau,group,id
                    },
                    type: "POST",
                    success: function (data) {
                        $('#suauser').modal('hide');
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
                          url: "?controller=user&action=delete",
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


