<?php
session_start();

require_once("action/constantes.php");

abstract class CommonAction
{
    protected static $VISIBILITY_PUBLIC = 0;
    protected static $VISIBILITY_MEMBER = 1;
    protected static $VISIBILITY_MODERATOR = 2;
    protected static $VISIBILITY_ADMINISTRATOR = 3;
    private $pageVisibility;

    public function __construct($pageVisibility)
    {
        $this->pageVisibility = $pageVisibility;
    }

    public function execute()
    {

        //si logout declenché:
        if (!empty($_POST["logout"])) {

            $data = [];
            $data["key"] = $_SESSION["key"];

            $result = CommonAction::callAPI("signout", $data);

            if ($result == "INVALID_KEY") {
                //

            } else {
                session_unset();
                session_destroy();
                //visibility = public: redirige vers index.php
                session_start();

            }

        }

        //si pas de visibilité -> public
        if (empty($_SESSION["visibility"])) {
            $_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
        }

        if ($this->pageVisibility > $_SESSION["visibility"]) {
            header("location:index.php");
            exit;
        }

        $data = $this->executeAction();
        $data["isConnected"] = $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;

        return $data;
    }

    protected abstract function executeAction();

    //************code prof api pour login */
    /**
     * data = ['key1' => 'value1', 'key2' => 'value2'];
     */
    protected function callAPI($service, $data)
    {
        $apiURL = "https://magix.apps-de-cours.com/api/" . $service;
        $result = null;

        if ($service == "games/action") {
            $milliseconds = microtime(true) * 1000;

            if (
                !empty($_SESSION["lastActionCall"]) &&
                $milliseconds - $_SESSION["lastActionCall"] < 250
            ) {
                $result = json_encode("TOO_MANY_ACTIONS");
            }

            $_SESSION["lastActionCall"] = $milliseconds;
        }

        if (empty($result)) {
            $options = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data)
                ]
            ];

            $context = stream_context_create($options);

            $result = file_get_contents($apiURL, false, $context);
            if (strpos($result, "<br") !== false) {
                $result = json_encode($result);
            }
        }

        return json_decode($result);
    }



}