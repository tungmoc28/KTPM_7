<?php
			session_start();
			error_reporting(0);
			$controller = filter_input(INPUT_GET, "controller");
			if(empty($controller)) $controller = "giayto";
			$controller_name = $controller . "_controller";
			
			require_once ("./Controllers/{$controller_name}.php");
			$controllerObj = new $controller_name();
			$controllerObj->run();
			?>