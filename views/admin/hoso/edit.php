    <div class="row">
        <div class="mt-3 col-md-6">
        <label for="hovaten">Họ và tên</label>
        <input type="text" name="hovaten" id="hovaten" class="form-control" value="<?= $info['hovaten'] ?>">
        </div>
        <div class="mt-3 col-md-6">
            <label for="gioitinh">Giới tính</label>
            <select name="gioitinh" id="gioitinh" class="form-control chosen-select">
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
            </select>
        </div>
        <div class="mt-3 col-md-6">
            <label for="cccd">Căn cước công dân</label>
            <input type="text" name="cccd" id="cccd" class="form-control" value="<?= $info['cccd'] ?>">
        </div>
        <div class="mt-3 col-md-6">
            <label for="ngaycap">Ngày cấp</label>
            <input type="date" name="ngaycap" id="ngaycap" class="form-control" value="<?= $info['ngaycap'] ?>">
        </div>    
        <div class="mt-3 col-md-6">
            <label for="diachi">Địa chỉ</label>
            <input type="text" name="diachi" id="diachi" class="form-control" value="<?= $info['diachi'] ?>">
        </div>  

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" id="btnxacnhan" type="button"
                onclick="xacnhansua(<?= $id ?>)">Xác nhận
        </button>
    </div>
    <script type="text/javascript">
         $("#gioitinh").val(<?= $info['gioitinh'] ?>).trigger('chosen:updated')
        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': {allow_single_deselect: true},
            '.chosen-select-no-single': {disable_search_threshold: 10},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "95%"}
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    </script>
    