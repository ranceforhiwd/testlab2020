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
                    <p>This is a sample application to demonstrate the following as it regards web application development:</p>
                    <ul class="w3-ul">
                        <li><b>Performance Statistics</b> - the segment of an analytical dashboard displaying charts or graphcs with the ability to export tabulated data.  This is a common feature for most of the dashboards I've created.</li>
                        <li><b>Reporting Modules</b> - internal clients need reports so one primary repsonsibility is to create reporting modules capable of displaying and routing information such as location based reports that use geolocated data</li>
                        <li><b>Email Marketing</b> - this module was originally designed to provide end users with the ability to review the activity of email subscribers and aggregate responses such as opens, clicks, bounces, or suppressions.</li>
                        <li><b>Data Visualizations</b> - The globe, using Cesium, a Javascript API for geo-spatial charting, can be used to promote the organization and visualize some of the operations as they occur.</li>
                        <li><b>DB Manager</b> - an administrative module originally created to manage copies of the main application database and allow organizational partners the ability to update their database structure.</li>
                        <li><b>Cron Jobs</b> - mainly maintence routines that run through PHP CLI to support long query processes.  These background processes enhance application usability by providing pre-processed data whenever possible.</li>
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