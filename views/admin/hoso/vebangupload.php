 <div class="row">
        <div class="mt-3 col-md-6">
        <label for="file">Ảnh:</label>
        <input type="file" name="file" id="file" class="form-control">
        <span class="input-group-btn"></span>
    </div>
 
    <table id="table-data" class="table table-bordered table-striped table-hover text-center" width="100%" style="margin-top:10px;">
        <thead style="background-color:#B0E0E6">
            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                <th  style="min-width:10px !important;vertical-align:middle">STT</th>
                <th  style="min-width:200px !important;vertical-align:middle">ẢNH</th>
                <th  style="vertical-align:middle">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($data as $item) { ?>
            <?php $i++; ?>
            <tr>
                <td style="vertical-align:middle"><?php echo $i; ?></td>
                <td><img src="views/admin/image/<?= $item['image'] ?>" alt="" width=200></td>
                <td class="text-center " style="vertical-align:middle">
                    <a type="button" 
                       class="btn btn-sm btn-icon btn-bg-danger btn-active-color-danger w-30px h-30px"
                       onclick="xoa_anh(<?= $item['id'] ?>,<?= $id ?>)">
                        <i class="fa-solid fa-trash text-light"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" id="btnxacnhan" type="button"
                onclick="xacnhanupload(<?= $id ?>)">Xác nhận
        </button>
</div>