<?php
require_once("./models/giayto_model.php");
require_once("./models/giayto.php");

class giayto_controller
{
	private $giayto_model;

	function __construct()
	{
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
		$giayto = new GiayTo();

		if (!empty($_POST)) {
			if (isset($_POST['giayto'])) {
				$giayto->tengiayto = $_POST['giayto'];
			}
			$result = $this->giayto_model->insert($giayto);
             
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
		require_once("./views/admin/giayto/themmoi.php");
	}

	function sua()
	{
		$id = $_POST['id'];
		$info = $this->giayto_model->getinfo($id)[0];
		require_once("./views/admin/giayto/edit.php");
	}

	function update()
	{
		$response = ["success" => false]; // Mặc định là thất bại

		$id = $_POST['id'];
		$giayto = $_POST['giayto'];
		$result = $this->giayto_model->update($id,$giayto);
		if ($result) {
				$response["success"] = true;
				$response["message"] = "Sửa thành công!";
		} else {
				$response["message"] = "Lỗi khi sửa!";
		}
		echo json_encode($response);
		exit();
		//require_once("./Views/giaytoLaptop/update.php");
	}

	function delete()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$id = "";
			if (isset($_POST['id'])) {
				$id = $_POST['id'];
			}
			$result = $this->giayto_model->delete($id);
			if ($result) {
				$response["success"] = true;
				$response["message"] = "Xóa thành công!";
			} else {
				$response["message"] = "Lỗi khi xóa!";
			}
			echo json_encode($response);
			exit();
		}
	}

	function index()
	{
		require_once("./views/admin/giayto/list.php");
	}

	function vebang()
	{
		$data = $this->giayto_model->getlist();
		require_once("./views/admin/giayto/vebang.php");
	}
}

?>