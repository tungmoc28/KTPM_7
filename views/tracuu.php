<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra Cứu Căn Cước</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <style>
        body {
            background-image: url('https://meliawedding.com.vn/wp-content/uploads/2022/11/background-trong-dong-full-hd_095238210.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container {
            background: none;
            padding: 20px;
            border-radius: 10px;
        }
        #qrcode-container {
            text-align: center;
            margin-top: 20px;
        }
        #qrcode {
            display: inline-block;
        }
        #qr-text {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Tra Cứu Thông Tin</h2>
        <div class="card p-4">
            <label for="cccd_input"><strong>Nhập Mã Căn Cước:</strong></label>
            <input type="text" id="cccd_input" class="form-control" placeholder="Nhập mã căn cước">
            <button class="btn btn-primary mt-3" onclick="generateQRCode()">Tạo QR Code</button>
            <div id="qrcode-container">
                <div id="qrcode"></div>
                <p id="qr-text"></p>
            </div>
        </div>
    </div>

    <script>
        function generateQRCode() {
            var cccd = document.getElementById("cccd_input").value;
            if (cccd.trim() === "") {
                alert("Vui lòng nhập mã căn cước!");
                return;
            }
            var hashedCCCD = CryptoJS.SHA256(cccd).toString();
            document.getElementById("qrcode").innerHTML = "";
            new QRCode(document.getElementById("qrcode"), {
                text: "http://localhost/baitaplon/?controller=tracuu&param=" + hashedCCCD,
                width: 200,
                height: 200
            });
            document.getElementById("qr-text").textContent = "http://localhost/baitaplon/?controller=tracuu&param=" + CCCD;
        }
    </script>
</body>
</html>
