    <div class="mt-3">
        <label for="tieu_de">Loại giấy tờ</label>
        <input type="text" name="giayto" id="giayto" class="form-control" value="<?= $info['tengiayto'] ?>">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" id="dathen" type="button"
                onclick="xacnhansua(<?= $id ?>)">Xác nhận
        </button>
    </div>
    