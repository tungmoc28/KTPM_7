<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Người Dùng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://meliawedding.com.vn/wp-content/uploads/2022/11/background-trong-dong-full-hd_095238210.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Thông Tin Tra Cứu</h2>
        <div class="card p-4">
            <div class="row">
                <div class="col-md-6">
                    <label><strong>Họ và Tên:</strong></label>
                    <p id="fullName"><?= $info['hovaten']?></p>
                </div>
                <div class="col-md-6">
                    <label><strong>Giới tính:</strong></label>
                    <p id="cccd"><?= $info['gioitinh']  == 1 ? "Nam" : "Nữ"?></p>
                </div>
                <div class="col-md-6">
                    <label><strong>CCCD:</strong></label>
                    <p id="address"><?= $info['cccd']?></p>
                </div>
                <div class="col-md-6">
                    <label><strong>Ngày cấp:</strong></label>
                    <p id="gender"><?= date('d-m-Y',strtotime($info['ngaycap']))?></p>
                </div>
                <div class="col-md-6">
                    <label><strong>Địa Chỉ:</strong></label>
                    <p id="address"><?= $info['diachi']?></p>
                </div>
            </div>
        </div>
        
        <h3 class="mt-4">Ảnh Giấy Tờ</h3>
        <div class="row">
            <div class="col-md-6">
                <?php 
                    foreach($data_giayto as $value){
                        if(isset($arr_data_anh[$value['id']])){
                            ?>
                            <h5><?= $value['tengiayto']?></h5>
                            <div id="giayto_xe" class="d-flex flex-wrap gap-2">
                            <?php
                            foreach($arr_data_anh[$value['id']] as $item){
                                ?>
                                    <img src="views/admin/image/<?= $item['image'] ?>" class="img-fluid border rounded" alt="<?= $value['tengiayto']?>" style="width: 150px; height: auto;">
                                <?php
                            }
                            ?>
                            </div>
                            <?php
                        }
                        ?>
                    
                        <?php
                    }
                ?>
               
            </div>
            <!-- <div class="col-md-6">
                <h5>Ảnh Giấy Tờ Đất</h5>
                <div id="giayto_dat" class="d-flex flex-wrap gap-2">
                    <img src="images/giayto_dat1.jpg" class="img-fluid border rounded" alt="Giấy tờ đất" style="width: 150px; height: auto;">
                    <img src="images/giayto_dat2.jpg" class="img-fluid border rounded" alt="Giấy tờ đất" style="width: 150px; height: auto;">
                </div>
            </div> -->
        </div>
    </div>
</body>
</html>
