<?php
    session_start();

   require_once("action/constantEs.php");

    abstract class CommonAction {
        protected static $VISIBILITY_PUBLIC = 0;
        // protected static $VISIBILITY_MEMBER = 1;
        // protected static $VISIBILITY_MODERATOR = 2;
        // protected static $VISIBILITY_ADMINISTRATOR = 3;
        private $pageVisibility;

        public function __construct($pageVisibility) {
            $this->pageVisibility = $pageVisibility;
        }

        public function execute() {
            return [];
        }

        protected abstract function executeAction();
    }