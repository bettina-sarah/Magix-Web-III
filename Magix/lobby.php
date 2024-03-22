<?php
require_once("action/LobbyAction.php");

$action = new LobbyAction();
$data = $action->execute();

$header = "lobbyHeader";
$body = "lobbyBody";
$pageTitle = "Lobby";

$link_chat = "https://magix.apps-de-cours.com/server/#/chat/".$_SESSION["key"]."/large";
$link_deck = "https://magix.apps-de-cours.com/server/#/deck/".$_SESSION["key"];

//injecter clé de session pour le chat
//

require_once("partial/header.php");


?>

<div class="div-glow-btn">
    <form action="jeu.php" method="post">

        <input type="hidden" value="n">
            <button class='glowing-btn'><span class='glowing-txt'>J<span class='faulty-letter'>O</span>UER</span></button>

    </form>
</div>

<div>
<form action="pratique.php" method="post">

<input type="hidden" name="logout" value="n">

<button class="button-49" type="submit">PRATIQUER</button>
</form>
</div>


<div>
    <form action="lobby.php" method="post">

        <input type="hidden" name="logout" value="n">

        <button class="button-49" type="submit">DÉCONNEXION</button>
    </form>

</div>

<div class="deck">
    <button id="btn-deck">Deck</button>
    <iframe id="iframe-deck" src="<?= $link_deck ?>">
    </iframe>
</div>

<div class="chat">

    <iframe style="width:900px;height:800px;" onload="applyStyles(this)" src="<?= $link_chat ?>"> 
    </iframe>


</div>
<?php
require_once("partial/footer.php");
