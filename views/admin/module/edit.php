    <div class="mt-3">
        <label for="module">Module</label>
        <input type="text" name="module" id="module" class="form-control" value="<?= $info['module'] ?>">
    </div>
    <div class="mt-3">
        <label for="chucnang">Chức năng</label>
        <input type="text" name="chucnang" id="chucnang" class="form-control" value="<?= $info['chucnang'] ?>">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" id="dathen" type="button"
                onclick="xacnhansua(<?= $id ?>)">Xác nhận
        </button>
    </div>
    