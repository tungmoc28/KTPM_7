<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-image: url('https://meliawedding.com.vn/wp-content/uploads/2022/11/background-trong-dong-full-hd_095238210.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 100px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Đăng Nhập</h2>
            
                <div class="mb-3">
                    <label for="taikhoan" class="form-label">Tài khoản</label>
                    <input type="text" class="form-control" id="taikhoan" name="taikhoan" >
                </div>
                <div class="mb-3">
                    <label for="matkhau" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="matkhau" name="matkhau" >
                </div>
                <button type="button" class="btn btn-primary w-100" onclick="dangnhap()">Đăng Nhập</button>
           
        </div>
    </div>
</body>
</html>
<script>

    function dangnhap() {
        let taikhoan = $('#taikhoan').val();
        let matkhau = $('#matkhau').val();

        $.ajax({
            url: "../?controller=dangnhap&action=dangnhap",
            dataType: "json",
            data: {
                taikhoan,matkhau
            },
            type: "POST",
            success: function (data) {
                if(data.success == true){
                    thanhcong(data.message, 3000);
                    window.location.href = "../index.php?controller=hoso"; 
                }else{
                    thatbai(data.message, 3000);
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", status, error, xhr.responseText);
                thatbai("Đăng nhập thất bại!", 3000);
            }
        });
       
    }


    function thatbai(msg, duration) {
        let width = screen.width;
        let height = screen.height;
        var el = document.createElement("div");
        if(width <= height) {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:96%;z-index:999999");
        } else {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:25%;z-index:999999");
        }

        el.innerHTML = '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button> <strong>Error!! </strong>' + msg + '</div>';
        setTimeout(function () {
            el.parentNode.removeChild(el);
        }, duration);
        document.body.appendChild(el);
    }

    function thanhcong(msg, duration) {
        console.log(123)
        let width = screen.width;
        let height = screen.height;
        var el = document.createElement("div");
        if(width <= height) {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:96%;z-index:999999");
        } else {
            el.setAttribute("style", "position:fixed;bottom:2%;right:2%; width:25%;z-index:999999");
        }

        el.innerHTML = '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button> <strong>Success!! </strong>' + msg + '</div>';
        setTimeout(function () {
            el.parentNode.removeChild(el);
        }, duration);
        document.body.appendChild(el);
    }
</script>
