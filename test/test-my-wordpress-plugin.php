<?php
class My_WordPress_Plugin_Test extends WP_UnitTestCase {
    public function test_instance() {
        $plugin = My_WordPress_Plugin::get_instance();
        $this->assertInstanceOf('My_WordPress_Plugin', $plugin);
    }
}
