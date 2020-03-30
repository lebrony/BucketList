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
 

$errors = array();

if (isset($_POST['login'])) {

    if (!$_POST['email'] | !$_POST['password1']) {
        array_push($errors, "All input fields are required");
    } else {
        $email = $_POST['email'];
        $password = sha1(md5(urlencode($_POST['password1'])));

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid email format");
        } else {
            $query = "SELECT * FROM user WHERE 
            email = '$email' AND password = '$password'";
            $result = mysqli_query($connect, $query);
            $num = mysqli_num_rows( $result);

            if ($num == 1) {
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
            } else {
                array_push($errors, "Email or password incorrect");
            }
        }
    }
}

?>