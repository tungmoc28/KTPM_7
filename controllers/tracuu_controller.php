<?php
require_once("./models/tracuu_model.php");
require_once("./models/tracuu.php");

class tracuu_controller
{
	private $tracuu_model;

	function __construct()
	{
		$this->tracuu_model = new tracuu_model();
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

	function index()
	{
        $param = $_GET['param'];
		$info = $this->tracuu_model->getinfo($param)[0];
        $data_anh = $this->tracuu_model->getanh($info['id']);
        $arr_data_anh = [];
        foreach($data_anh as $value){
            $arr_data_anh[$value['id_giayto']][] = $value;
        }
        $data_giayto = $this->tracuu_model->getgiayto();
		
		require_once("./views/thongtin.php");
	}


}

?>