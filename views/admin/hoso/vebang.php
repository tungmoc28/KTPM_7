 <table id="bang" class="table table-row-dashed align-middle gs-0 gy-3 my-0">
        <thead>
        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
            <th class="p-0 pb-3 min-w-100px">STT</th>
            <th class="p-0 pb-3 min-w-100px pe-13">Họ và tên</th>
            <th class="p-0 pb-3 min-w-100px pe-13">Giới tính</th>
            <th class="p-0 pb-3 min-w-100px pe-13">Căn cước</th>
            <th class="p-0 pb-3 min-w-100px pe-13">Ngày cấp</th>
            <th class="p-0 pb-3 min-w-100px pe-13">Địa chỉ</th>
            <th class="p-0 pb-3 w-100px">Chức năng</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php foreach ($data as $item) { ?>
            <?php $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item['hovaten']; ?></td>
                <td><?php echo $item['gioitinh'] == 1 ? "Nam" : "Nữ"; ?></td>
                <td><?php echo $item['cccd']; ?></td>
                <td><?php echo date('d-m-Y',strtotime($item['ngaycap'])); ?></td>
                <td><?php echo $item['diachi']; ?></td>
                <td class="text-center d-flex justify-content-center">
                    <button type="button" onclick="sua(<?= $item['id'] ?>)"
                            class="btn btn-sm btn-icon btn-bg-success btn-active-color-success w-30px h-30px">
                        <i class="fa-solid fa-pen text-light"></i>
                    </button>
                    <button type="button" onclick="getupload(<?= $item['id'] ?>)"
                            class="btn btn-sm btn-icon btn-bg-info btn-active-color-success w-30px h-30px">
                        <i class="fa-solid fa-upload text-light"></i>
                    </button>
                    <a href="?controller=tracuu&param=<?= $item['cccd_hash']?>" target="_blank">
                        <button type="button" onclick="getupload(<?= $item['id'] ?>)"
                            class="btn btn-sm btn-icon btn-bg-warning btn-active-color-success w-30px h-30px">
                            <i class="fa-solid fa-info text-light"></i>
                        </button>
                    </a>
                    <a type="button"
                       class="btn btn-sm btn-icon btn-bg-danger btn-active-color-danger w-30px h-30px"
                       onclick="xoa(<?= $item['id'] ?>)">
                        <i class="fa-solid fa-trash text-light"></i>
                    </a>
                  
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <script>
          $('#bang').DataTable();
    </script>   