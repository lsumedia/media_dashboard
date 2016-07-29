<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require('config.php');
require('authenticator.php');

$auth = new authenticator();

if(isset($_GET['key'])){
    header('location:.');   
}

?>
<html>
    <head>
        <title>LSU Media Dashboard</title>
         <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        
        <nav class=''>
            <div class="nav-wrapper container white-text" >
                <div class="brand-logo">
                    <img src="res/media_reverse.png" />
                    <p>Media Dashboard</p>
                </div>
            </div>
        </nav>
        
        <main id="main" class="container">
            <div class="row">
            <?php foreach($pages as $i => $page){ 
                    if(in_array($page['perm_name'], $auth->profile()['permissions']) || strlen($page['perm_name']) < 1){
            ?>
            <form method="POST" action="<?= $page['url'] ?>" id="link_form_<?= $i ?>" target="_blank"> 
                <input type="hidden" name="key" value="<?= $auth->key ?>" />
            </form>
            <div class="page_link col s6 l3" onclick="document.getElementById('link_form_<?= $i ?>').submit();">
                <div class="page_icon">
                    <img src="<?= $page['thumbnail'] ?>" alt="<?= $page['title'] . ' icon' ?>" />
                </div>
                <div class="page_title">
                    <a href="<?= $auth->append_key($page['url']) ?>" target="_blank"><?= $page['title'] ?></a>
                </div>
            </div>
            <?php  }} ?>
            </div>
        </main>
        
        <?php $auth->status_bug(); ?>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
