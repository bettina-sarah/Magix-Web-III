<?php
require_once("action/LobbyAction.php");

$action = new LobbyAction();
$data = $action->execute();

$header = "lobbyHeader";
$pageTitle = "Lobby";

require_once("partial/header.php");


?>

<div>
    <form action="lobby.php" method="post">

        <input type="hidden" name="logout" value="n">

        <button class="button-49" type="submit">DÉCONNEXION</button>
    </form>

</div>
<?php
require_once("partial/footer.php");
