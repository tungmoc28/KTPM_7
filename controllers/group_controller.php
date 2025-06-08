<?php
require_once("./models/group_model.php");
require_once("./models/group.php");
require_once("./models/module_model.php");
require_once("./models/module.php");
class group_controller
{
	private $group_model;

	function __construct()
	{
		$this->group_model = new group_model();
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
		$group = new Group();

		if (!empty($_POST)) {
			if (isset($_POST['group'])) {
				$group->group = $_POST['group'];
			}
			$result = $this->group_model->insert($group);
             
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
		require_once("./views/admin/group/themmoi.php");
	}

	function sua()
	{
		$id = $_POST['id'];
		$info = $this->group_model->getinfo($id)[0];
		require_once("./views/admin/group/edit.php");
	}

	function update()
	{
		$response = ["success" => false]; // Mặc định là thất bại

		$id = $_POST['id'];
		$group = $_POST['group'];
		$result = $this->group_model->update($id,$group);
		if ($result) {
				$response["success"] = true;
				$response["message"] = "Sửa thành công!";
		} else {
				$response["message"] = "Lỗi khi sửa!";
		}
		echo json_encode($response);
		exit();
		//require_once("./Views/groupLaptop/update.php");
	}

	function delete()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$id = "";
			if (isset($_POST['id'])) {
				$id = $_POST['id'];
			}
			$result = $this->group_model->delete($id);
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
		require_once("./views/admin/group/list.php");
	}

	function vebang()
	{
		$data = $this->group_model->getlist();
		require_once("./views/admin/group/vebang.php");
	}

	function phanquyen()
	{
		$data = $this->module_model->getlist();
		$id = $_POST['id'];
		$info = $this->group_model->getinfo($id)[0];
		$data_phanquyen = array_column($this->group_model->permissions_now($id),"id_chucnang");
	
		require_once("./views/admin/group/phanquyen.php");
	}

	function permissions(){
		$id = $_POST['id'];
		$per = $_POST['permissions'];
		$response = ["success" => false];
		$result = $this->group_model->permissions($id,$per);
		if ($result) {
			$response["success"] = true;
			$response["message"] = "Thêm thành công!";
		} else {
			$response["message"] = "Thêm thất bại!";
		}
		echo json_encode($response);
		exit();
	}
}

?>