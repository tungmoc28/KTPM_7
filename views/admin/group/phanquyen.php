    

<style>
    .checkbox-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* Khoảng cách giữa các checkbox */
    }
    .form-check {
        flex: 1 1 calc(25% - 10px); /* Mỗi checkbox chiếm 25% chiều rộng */
    }
</style>

<div class="checkbox-container">
    <?php foreach ($data as $value) { 
        $checked = in_array($value['id'], $data_phanquyen) ? 'checked' : '';

        ?>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="<?= $value['group'] ?>" name="permissions[]" value="<?= $value['id'] ?>" <?= $checked ?>>
            <label class="form-check-label" for="<?= $value['group'] ?>">
                <?= $value['chucnang'] ?>
            </label>
        </div>
    <?php } ?>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" id="dathen" type="button"
                onclick="xacnhanphanquyen(<?= $id ?>)">Xác nhận
        </button>
</div>
    