<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $page = filter_input(INPUT_GET, 'page');        
        $page = intval($page)+1;
        
        $view = filter_input(INPUT_GET, 'view');
        
        echo '<h1>', $view, ' - ', $page, '</h1>';
        
        ?>
        
        
        <a href="?page=<?php echo $page; ?>&view=images">View Images</a>
        
    </body>
</html>
