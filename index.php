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
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */
require "./config/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>BucketList - HomePage </title>
</head>
<body>
    <div class="container">
        <header>
            <div class="navTop">
                <nav>
                    <h2>BL</h2>
                </nav>
                <ul class="top">
                    <li><a href="login.php">Log in</a></li> 
                    <li><a href="register.php">Sign Up</a></li>
                </ul>
            </div>
        </header>
    </div>
    <div class="main">
        <div class="main-text">
            <h1 class="main-content">
                <span class="main-context">Bucketlist</span>
                <span class="sub-context">create, accomplish and store</span>
            </h1>
            <a href="register.php" class="btn btn-white">try now</a>
        </div>  
    </div>
</body>
</html>