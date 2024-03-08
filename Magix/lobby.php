<?php
require_once("action/LobbyAction.php");

$action = new LobbyAction();
$data = $action->execute();
    
?>

<div>
    <form action="lobby.php"  method="post">

        <input type="hidden" name="logout" value="n">

        <button type="submit">Deocnnecion</button>
    </form>

</div>
