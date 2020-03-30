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

$error = array();
if (isset($_POST['submit'])) {

    if (!$_POST['username'] | !$_POST['email'] | !$_POST['password1'] | !$_POST['confirm']) {
        array_push($error, "All input Fields are Required");
    } else {
        $fullname = urlencode($_POST['username']);

        if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
            array_push($error, "Only letters and white space allowed");
        } else {

            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($error, "Invalid email format");
            } else {
                $query = "SELECT * FROM user WHERE email = '$email'";
                $query = mysqli_query($connect, $query);

                $number = mysqli_num_rows($query);
                if ($number > 0) {
                    array_push($error, "The user with the email '$email' already exists,"
                    ." <a href='login.php'>log in</a> instead?" );
                } else {
                    $password1 = sha1(md5(urlencode($_POST['password1'])));
                    $password2 = sha1(md5(urlencode($_POST['confirm'])));

                    if ($password1 != $password2) {
                        array_push($error, "Passwords don't match");
                    } else {
                        if (strlen($password1) < 8) {
                            array_push($error, "Password should be at least 8 characters long ");
                        } else {

                            $query = "INSERT INTO user SET username = '$fullname',
                             email = '$email', password = '$password1', role = 1";

                            if (mysqli_query($connect, $query)) {
                                session_start();
                                $_SESSION['email'] = $email;
                                header("Location: login.php");
                                // exit();
                            } else {
                                echo mysqli_error($connect);
                                echo 'There was an error ' . $error;
                            }
                        }
                    }
                }
            }
        }
    }
}
