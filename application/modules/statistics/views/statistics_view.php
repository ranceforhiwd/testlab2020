<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Testing CodeIgniter</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="w3-container">
            <header class="w3">
                <div class="w3-panel w3-black"><h1>Testing CodeIgniter 3 HMVC</h1></div>
            </header>
            <div class="w3-container">
            <?php  echo $main_menu->show_menu();?>
            </div>
            <div class="w3-container" style="margin-left:15%">
                <div class="w3-bar w3-border">
                    <a href="#" class="w3-bar-item w3-button">Link 1</a>
                    <a href="#" class="w3-bar-item w3-button">Link 2</a>
                    <a href="#" class="w3-bar-item w3-button">Link 3</a>
                </div>          
                <?php //echo $d->show_form();?>
                <div class="w3-panel">
                    <p>This is a sample application module:</p>
                    <ul class="w3-ul">
                        <li><b>Performance Statistics</b> - the segment of an analytical dashboard displaying charts or graphcs with the ability to export tabulated data.  This is a common feature for most of the dashboards I've created.</li>
                    </ul>
                </div>
            </div>
            <div class="w3-container" style="margin-left:25%">
                <p><?php //echo anchor('signin', 'Signin', 'title="Signin Here"'); ?></p>
            </div> 
        </div>
        <div class="w3-container">
        <div style="display:none;" class="w3-container w3-black">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></div>
        </div>
    </body>
</html>