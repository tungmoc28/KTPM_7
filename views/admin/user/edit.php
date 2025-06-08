    <div class="row">
        <div class="mt-3 col-md-4">
            <label for="taikhoan">Tài khoản</label>
            <input type="text" name="taikhoan" id="taikhoan" class="form-control" value="<?= $info['taikhoan'] ?>">
        </div>
        <div class="mt-3 col-md-4">
            <label for="matkhau">Mật khảu</label>
            <input type="text" name="matkhau" id="matkhau" class="form-control" value="<?= $info['matkhau'] ?>">
        </div>
        
            <div class="mt-3 col-md-4">
                <label for="group">Group</label>
                <select name="group" id="group" class="form-control chosen-select" >
                    <option value="">Vui lòng chọn</option>
                    <?php
                        foreach($data_group as $value){
                            ?>
                                <option value="<?= $value['id'] ?>"><?= $value['groups'] ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" id="dathen" type="button"
                onclick="xacnhansua(<?= $id ?>)">Xác nhận
        </button>
    </div>
    <script type="text/javascript">
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

        $('#group').val(<?= $info['id_group'] ?>).trigger('chosen:updated');
    </script>
    