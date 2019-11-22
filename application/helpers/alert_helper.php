<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();
$CI->load->helper(['url']);
if(!function_exists('alert_main')) {
    function alert_main($msg) {
        $baseURL = 'base_url';
 
        echo <<< HTML
                <script type="text/javascript">
                    alert('{$msg}');
                    window.location = "{$baseURL()}";
                </script>
HTML;
    }
}
 
if(!function_exists('alert')) {
    function alert($msg) {
 
        echo <<< HTML
                <script type="text/javascript">
                    alert('{$msg}');
                </script>
HTML;
    }
}

if(!function_exists('alert_move')) {
    function alert_move($msg,$location) {
 
        echo <<< HTML
                <script type="text/javascript">
                    alert('{$msg}');
					window.location = "{$location}";
                </script>
HTML;
    }
}

if(!function_exists('alert_back')) {
    function alert_back($msg) {
 
        echo <<< HTML
                <script type="text/javascript">
                    alert('{$msg}');
					history.back();
                </script>
HTML;
    }
}
?>