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
    <script src="./assets/js/dashboard.js"></script>
    <title>Bucketlist | Dashboard</title>
</head>

<body>
    <div class="dash-container">
        <div class="dash-content">
            <h1 class="dash-head">
                <span>B L</span>
            </h1>
        <ul class="dash">
            <li>
                <a href="dashboard.php" title="Home" >
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="" title="Profile">
                    <i class="fas fa-search"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="add_bucket(this)" title="Add">
                    <i class="fas fa-plus"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="open_profile(this)" title="Profile">
                    <i class="fas fa-user"></i>
                </a>
            </li>
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
        <div style='display:none;position:absolute;right:25px;margin-top:0.2rem;' id='addItem'>
            <div class="dash-nav2">
                <ul>
                    <li>
                        <a class="nav-link" href="add_bucket.php">
                            <span><i class="fas fa-folder-plus" aria-hidden="true"></i></span>
                            <span class="bucket-text">Create Bucket…</span>
                            <p class="dash-section">
                                A bucket is made up of cards ordered on lists. 
                            </p>
                        </a>
                    </li>
                <li>
                    <a href="bucket_team.php">
                        <span><i class="fas fa-people-carry"></i></span>
                        <span>Create Bucket Team…</span> 
                        <p class="dash-section">
                            A bucket team are the people or group of people in which you share and accomplish a certain list.
                        </p>
                    </a>
                </li>
                </ul>
            </div>
        </div>
        <div class="dash-home-content">
            <div class="dash-left-content" style="position: sticky;top:0px">
                <ul>
                <li>
                <a href="http://">
                    <span><i class="fa fa-trash" aria-hidden="true"></i></span>
                    Buckets
                </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span><i class="fa fa-home" aria-hidden="true"></i></span>
                        Home
                    </a>
                </li>
                <li class="split"></li>
                <li>
                    <a href="http://">
                        <span><i class="fas fa-plus"></i></span>
                            Create Team
                    </a>
                </li>
                <li>
                    <a href="http://">
                        <span><i class="fas fa-folder-plus"></i></span>
                            Create a Bucket
                    </a>
                </li>
                </ul>
            </div>
            <div class="dash-main-content">
                <div class="content-dash-mix">
                <div class="dash-main-image">
                </div>
                <div class="dash-main-text">
                    <span class="dash-main-text-head">Keep on track things to do before...</span>
                    <span class="dash-main-sub-text">Create and invite people to buckets, leave comments, add lists, and we'll show various important list here.</span>
                </div>
                </div>
            </div>
            <div class="dash-left-content" style="position: sticky;top:0px">
            </div>

        </div>
        
    </div>
</body>
    
</html>