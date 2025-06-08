<?php
require_once("./models/module_model.php");
require_once("./models/module.php");

class module_controller
{
	private $module_model;

	function __construct()
	{
		$this->module_model = new module_model();
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
		$module = new module();

		if (!empty($_POST)) {
			if (isset($_POST['module'])) {
				$module->module = $_POST['module'];
                $module->chucnang = $_POST['chucnang'];
			}
			$result = $this->module_model->insert($module);
             
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
		require_once("./views/admin/module/themmoi.php");
	}

	function sua()
	{
		$id = $_POST['id'];
		$info = $this->module_model->getinfo($id)[0];
		require_once("./views/admin/module/edit.php");
	}

	function update()
	{
		$response = ["success" => false]; // Mặc định là thất bại

		$id = $_POST['id'];
		$module = $_POST['module'];
        $chucnang = $_POST['chucnang'];
		$result = $this->module_model->update($id,$module,$chucnang);
		if ($result) {
				$response["success"] = true;
				$response["message"] = "Sửa thành công!";
		} else {
				$response["message"] = "Lỗi khi sửa!";
		}
		echo json_encode($response);
		exit();
		//require_once("./Views/moduleLaptop/update.php");
	}

	function delete()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$id = "";
			if (isset($_POST['id'])) {
				$id = $_POST['id'];
			}
			$result = $this->module_model->delete($id);
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
		require_once("./views/admin/module/list.php");
	}

	function vebang()
	{
		$data = $this->module_model->getlist();
		require_once("./views/admin/module/vebang.php");
	}
}

?>