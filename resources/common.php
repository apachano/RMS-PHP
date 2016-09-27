<?php
$servername = "localhost";
$username = "access";
$password = "Y67bDDCCte5MmeTX";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

    // This tells the web browser that your content is encoded using UTF-8
    // and that it should submit content back to you using UTF-8
    header('Content-Type: text/html; charset=utf-8');

    // This initializes a session.  Sessions are used to store information about
    // a visitor from one web page visit to the next.  Unlike a cookie, the information is
    // stored on the server-side and cannot be modified by the visitor.  However,
    // note that in most cases sessions do still use cookies and require the visitor
    // to have cookies enabled.  For more information about sessions:
    // http://us.php.net/manual/en/book.session.php
    session_start();
?>