<?php 
        function mytheme_menu(){
        	register_nav_menu('primary','Top Navigation');
        }


        add_action('init','mytheme_menu');


        function mytheme_footermenu(){
        	register_nav_menu('footer','Footer Navigation');
        }


        add_action('init','mytheme_footermenu');


        add_theme_support('post-thumbnails');

     

 ?>