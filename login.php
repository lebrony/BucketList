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
 
require './config/connect.php';
require "./handler/login-handler.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Bucketlist - Login</title>
</head>
<body>
    <div class="errors">
        <?php
        if ($errors) {
            echo '<div class="error"><ul>';
            foreach ($errors as $value) {
                echo "<li>" . $value . "</li>";
            }
            echo '</ul></div>';
        }
        ?>
    </div>
<div class="primary-main">
        <div class="login-primary-container">
            <h1 class="header">
               <span> B L</span>
               <span class="sub-login">login</span>
            </h1>
            <div class="form-box">
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email Address" autocomplete="off" required>
                    <input type="password" name="password1" placeholder="Password" required>
                    <input type="submit" class="btn-submit" value="Login" name="login" >
                </form>
            </div>
        </div>
    </div>
</body>
</html>