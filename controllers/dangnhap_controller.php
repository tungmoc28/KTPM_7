<?php
require_once("./models/user_model.php");
require_once("./models/user.php");
require_once("./models/group_model.php");
require_once("./models/group.php");
class dangnhap_controller
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

	function dangnhap()
	{
		$response = ["success" => false]; // Mặc định là thất bại
		if (!empty($_POST)) {
			$result = $this->user_model->dangnhap($_POST['taikhoan'],$_POST['matkhau'])[0];
			if ($result['id'] > 0) {
				$_SESSION['id_group'] = $result['id_group'];
				$_SESSION['user_id'] = $result['id']; 
				$response["success"] = true;
				$response["message"] = "Đăng nhập thành công!";
				$check_quyen = $this->group_model->check_quyen($result['id_group']);
				$_SESSION['permission'] = [];
				foreach ($check_quyen as $quyen) {
					$_SESSION['permission'][] = $quyen['module'];
				}
			} else {
				$response["message"] = "Đăng nhập thất bại!";
			}
		}
		echo json_encode($response);
		exit();
	}

	function dangxuat()
	{
		session_destroy();
		$response["success"] = true;
		$response["message"] = "Đăng xuất thành công!";
		echo json_encode($response);
		exit();
	}
}

?>