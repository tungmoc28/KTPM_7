<?php
require_once("./models/hoso_model.php");
require_once("./models/hoso.php");
require_once("./models/giayto_model.php");
require_once("./models/giayto.php");

class hoso_controller
{
	private $hoso_model;

	function __construct()
	{
		$this->hoso_model = new hoso_model();
		$this->giayto_model = new giayto_model();

	}

	public function run()
	{

		$actionGET = filter_input(INPUT_GET, "action");
		if (method_exists($this, $actionGET))
			/* Gọi đến phương thức có tên tương ứng với actionGET */
			$this->$actionGET();
		else {
			$this->index();
		}

	}

	function create()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		$hoso = new HoSo();

		if (!empty($_POST)) {
			$hoso->hovaten = $_POST['hovaten'];
			$hoso->gioitinh = $_POST['gioitinh'];
			$hoso->cccd = $_POST['cccd'];
			$hoso->ngaycap = $_POST['ngaycap'];
			$hoso->diachi = $_POST['diachi'];
			$result = $this->hoso_model->insert($hoso);
			if ($result) {
				$response["success"] = true;
				$response["message"] = "Thêm thành công!";
			} else {
				$response["message"] = "Lỗi khi thêm!";
			}
		}
		echo json_encode($response);
		exit();
	}

	function them()
	{
		require_once("./views/admin/hoso/themmoi.php");
	}

	function sua()
	{
		$id = $_POST['id'];
		$info = $this->hoso_model->getinfo($id)[0];
		require_once("./views/admin/hoso/edit.php");
	}

	function update()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		$hoso = new HoSo();
		$id = $_POST['id'];
		$hoso->hovaten = $_POST['hovaten'];
		$hoso->gioitinh = $_POST['gioitinh'];
		$hoso->cccd = $_POST['cccd'];
		$hoso->ngaycap = $_POST['ngaycap'];
		$hoso->diachi = $_POST['diachi'];
		$result = $this->hoso_model->update($id,$hoso);
		if ($result) {
				$response["success"] = true;
				$response["message"] = "Sửa thành công!";
		} else {
				$response["message"] = "Lỗi khi sửa!";
		}
		echo json_encode($response);
		exit();
		//require_once("./Views/hosoLaptop/update.php");
	}

	function delete()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$id = "";
			if (isset($_POST['id'])) {
				$id = $_POST['id'];
			}
			$result = $this->hoso_model->delete($id);
			if ($result) {
				$response["success"] = true;
				$response["message"] = "Xóa thành công!";
			} else {
				$response["message"] = "Lỗi khi sửa!";
			}
			echo json_encode($response);
			exit();
		}
	}
	function xoa_anh()
	{
		
	
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$id = "";
			if (isset($_POST['id'])) {
				$id = $_POST['id'];
			}
			$info = $this->hoso_model->getinfo_image($id)[0]['image'];
			if(!empty($info)){
				$file = dirname(__DIR__) . "/views/admin/image/" . $info;
			unlink($file);
			}
			$result = $this->hoso_model->delete_anh($id);
			if ($result) {
				$response["success"] = true;
				$response["message"] = "Xóa thành công!";
			} else {
				$response["message"] = "Lỗi khi sửa!";
			}
			echo json_encode($response);
			exit();
		}
	}
	function index()
	{
		require_once("./views/admin/hoso/list.php");
	}

	function vebang()
	{
		$data = $this->hoso_model->getlist();
		require_once("./views/admin/hoso/vebang.php");
	}

	function upload()
	{
		$id = $_POST['id'];
		$data = $this->giayto_model->getlist();
		require_once("./views/admin/hoso/upload.php");
	}

	function vebangupload(){
		$id = $_POST['id'];
		$giayto = $_POST['giayto'];
		$data = $this->hoso_model->getThongtinhoso($id,$giayto);
		require_once("./views/admin/hoso/vebangupload.php");

	}

	function createupload(){
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$id = $_POST['id'];
			$giayto = $_POST['giayto'];
			$targetDir = dirname(__DIR__) . "/views/admin/image/";
			$file_name = $_FILES['file']['name'];
		
			if(!empty($_FILES['file']['name'][0])){
				$targetFilePath = $targetDir . $_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath); 
			}else{
				$file_name = '';
			}
			$result = $this->hoso_model->insert_hoso_giayto($id,$file_name,$giayto);
			if ($result) {
				$response["success"] = true;
				$response["message"] = "Thêm thành công!";
			} else {
				$response["message"] = "Lỗi khi thêm!";
			}
		}
		echo json_encode($response);
		exit();
	}
}

?>