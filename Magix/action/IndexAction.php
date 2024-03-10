<?php
require_once("action/CommonAction.php");

class IndexAction extends CommonAction
{

	public function __construct()
	{
		parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
	}

	protected function executeAction()
	{
		$hasConnectionError = false;

		if (isset($_POST["username"]) && isset($_POST["password"])) {

			$data = [];
			$data["username"] = $_POST["username"];     //remplacé par $username … 
			$data["password"] = $_POST["password"];

			$result = parent::callAPI("signin", $data);     //(callapi de commonact)

			if ($result == "INVALID_USERNAME_PASSWORD") {
				$hasConnectionError = true;
			} else {
				//connexion reussie: membre
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_MEMBER;
				$key = $result->key;
				//stocker clé dans var de session pour logout
				$_SESSION["key"] = $key;
				header("Location: lobby.php");
				exit;
			}
		}

		return compact("hasConnectionError");
	}
}