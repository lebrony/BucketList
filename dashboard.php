<?php
/**
 * This is a home screen fo bucket list app
 *
 * Long description for file (if any)...
 *
 * PHP version 5.6
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    BucketListApp
 * @author     Adam Simon <asandler778@gmail.com>
 * @author     Tatu Kassim <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
 
require './config/connect.php';
require 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="./assets/fontawesome/css/all.css" rel="stylesheet">
    <title>Bucketlist | Dashboard</title>
</head>

<body>
    <div class="dash-container">
        <div class="dash-content">
            <h1 class="dash-head">
                <span>B L</span>
            </h1>
        <ul class="dash">
            <li><a href="dashboard.php" title="Home" ><i class="fas fa-home"></i></a></li>
            <li><a href="javascript:void(0)" onclick="open_profile(this)" title="Profile"><i class="fas fa-search"></i></a></li>
            <li><a href="javascript:void(0)" onclick="open_profile(this)" title="Add"><i class="fas fa-plus"></i></a></li>
            <li><a href=""><i class="fas fa-bell"></i></a></li>
            <li><a href="javascript:void(0)" onclick="open_profile(this)" title="Profile"><i class="fas fa-user"></i></a></li>
        </ul>
        </div>
    </div>
    <div class="dash-main">
    <div style='display:none;position:absolute;right:25px;margin-top:0.2rem;' id='googleSearch'>
        <div class="dash-nav">
            <ul>
                <li><a class="nav-link" href="http://">Profile</a></li>
                <li><a href="http://">Buckets</a></li>
                <li class="split"><a class="nav-link" href="http://">Settings</a></li>
                <li><a href="http://">Assistance</a></li>
                <li class="split"></li>
                <li><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
        <a id="navbtn_tutorials" style="display:none"></a>
    </div>
    <script>
        function open_profile(elmnt) {
  var a = document.getElementById("googleSearch");
  document.getElementById("googleSearch").style.visibility = "visible";
  if (a.style.display == "") {
    a.style.display = "none";
    elmnt.innerHTML = "<i class='fas fa-user'></i>";    
  } else {
    a.style.display = "";  
    if (document.getElementById("gsc-i-id1")) {document.getElementById("gsc-i-id1").focus(); }
    elmnt.innerHTML = "<i class='fas fa-user'></i>";
  }
        }
    </script>
</body>
    
</html>