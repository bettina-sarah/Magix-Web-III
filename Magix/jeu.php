<?php
require_once("action/JeuAction.php");

$action = new JeuAction();
$data = $action->execute();

$header = "lobbyHeader";
$body = "lobbyBody";
$pageTitle = "Lobby";

require_once("partial/header.php");


?>

<div>
    JEU
</div>

<?php
require_once("partial/footer.php");