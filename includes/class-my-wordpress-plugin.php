<?php
class My_WordPress_Plugin {
    private static $instance;

    public static function get_instance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        // Initialize hooks.
        add_action('init', array($this, 'init'));
    }

    public function init() {
        // Add your initialization code here.
    }
}
