<?php
require_once("./models/user_model.php");
require_once("./models/user.php");
require_once("./models/group_model.php");
require_once("./models/group.php");
class user_controller
{
	private $user_model;

	function __construct()
	{
		$this->user_model = new user_model();
        $this->group_model = new group_model();

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
		$user = new User();

		if (!empty($_POST)) {
			$user->taikhoan = $_POST['taikhoan'];
            $user->matkhau = $_POST['matkhau'];
            $user->id_group = $_POST['group'];
			$result = $this->user_model->insert($user);
             
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
        $data_group = $this->group_model->getlist();
		require_once("./views/admin/user/themmoi.php");
	}

	function sua()
	{
		$id = $_POST['id'];
		$info = $this->user_model->getinfo($id)[0];
        $data_group = $this->group_model->getlist();

		require_once("./views/admin/user/edit.php");
	}

	function update()
	{
		$response = ["success" => false]; // Mặc định là thất bại
        $user = new User();
		$id = $_POST['id'];
		$user->taikhoan = $_POST['taikhoan'];
        $user->matkhau = $_POST['matkhau'];
        $user->id_group = $_POST['group'];
		$result = $this->user_model->update($id,$user);
		if ($result) {
				$response["success"] = true;
				$response["message"] = "Sửa thành công!";
		} else {
				$response["message"] = "Lỗi khi sửa!";
		}
		echo json_encode($response);
		exit();
		//require_once("./Views/userLaptop/update.php");
	}

	function delete()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$id = "";
			if (isset($_POST['id'])) {
				$id = $_POST['id'];
			}
			$result = $this->user_model->delete($id);
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
		require_once("./views/admin/user/list.php");
	}

	function vebang()
	{
		$data = $this->user_model->getlist();
        $data_group = array_column($this->group_model->getlist(),"groups","id");
		require_once("./views/admin/user/vebang.php");
	}
}

?>