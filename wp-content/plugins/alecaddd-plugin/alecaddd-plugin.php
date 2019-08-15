<?php 
/**
 * @package AlecaddPlugin
 */

/*
Plugin Name: AlecaddPlugin
Plugin URI: https://akismet.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 4.1.2
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

if(!defined('ABSPATH')){
    die;//plugin terminate
};

class AlecadddPlugin
{
    //public 
    //protected
        //can be accessed only within the class itself or extension of that class
    //private
        //can be access by the class itself , not even it's sub class

     static function register(){
        add_action('admin_enqueue_scripts',array('AlecadddPlugin','enqueue'));
    }

    function create_post_type(){
        add_action('init',array($this,'custom_post_type'));
    }

    function activate(){
        $this->custom_post_type();
       flush_rewrite_rules();
    }


    function deactivate(){
       
    }

    function uninstall(){

    }

    function custom_post_type(){
        register_post_type('book',['public'=>true,'label'=>'Books']); //register customer post type
    }

    static function enqueue(){
        //enqueue all our scripts
        wp_enqueue_style('mypluginstyle',plugins_url('/assets/mystyle.css',__FILE__));
        wp_enqueue_script('mypluginscript',plugins_url('/assets/myscript.js',__FILE__));
    }

}


if(class_exists('AlecadddPlugin')){
    // $alecadddPlugin=new AlecadddPlugin('Alecadd get instantiated!!!!!!!!!!!!!!!!'); //instantiate
    // $alecadddPlugin->register(); //php function call

    AlecadddPlugin::register();
}

// // activation
// register_activation_hook(__FILE__,array($alecadddPlugin,'activate'));

// //deactivation
// register_deactivation_hook(__FILE__,array($alecadddPlugin,'deactivate'));

// // //uninstall
// // register_uninstall_hook(__FILE__,array($alecadddPlugin,'uninstall'));