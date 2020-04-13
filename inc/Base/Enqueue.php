<?php

/**
 * @package yoast_focus_kw_auto_complete
 */

 namespace Inc\Base;
 
 class Enqueue{
     public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
     }
     function enqueue()
        {
            //enqueue all our scripts here...
            wp_enqueue_style('mypluginstyle', PLUGIN_URL . '/assets/mystyle.css');
            wp_enqueue_script('mypluginscript', PLUGIN_URL . '/assets/myscript.js');
        }
 }