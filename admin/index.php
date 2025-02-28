<?php
session_start();
if(isset($_SESSION["Username"])){
    header('Location: dashboard.php'); // Redirect To Dashboard Page   law l2ny mtsgl hyd5lny 3ltol m4 lsa login 
    exit();
}

$noNavbar = "not-included";

include 'init.php';

//check if user coming from http  post req
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["user"]) && isset($_POST["pass"])) {
    echo "post data";
    print_r($_POST);
    echo "<br>";
    echo "session data";
    print_r($_SESSION);

    $password = trim($_POST["pass"]);
    $file_path = "10-million-password-list-top-100.txt"; // File containing words (one per line)

    if (!file_exists($file_path)) {
        echo "Error: Password file not found";
    } else {
        // Read file into an array
        $passwords = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (in_array($password, $passwords)) {
             echo "✅ Password found!</div>";
        } else {
            echo "❌ Password not found.</div>";
        }
    }


$username = $_POST['user'];
$password = $_POST['pass'];
$hashedPass = sha1($password);

// Check If the User Exists in the Database
$stmt = $con->prepare("SELECT Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1 ");
$stmt->execute(array($username, $hashedPass));
$count = $stmt->rowCount();

// If Count > 0 This Means the Database Contains a Record About This Username
if ($count > 0) {
    $_SESSION['Username'] = $username; // Register Session Name el gay mn el form
    header('Location: dashboard.php'); // Redirect To Dashboard Page
    exit();//Prevents Further Execution
}
}
?>
<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
    <input class="btn btn-primary btn-block" type="submit" value="Attack">

</form>

<?php   
include $tpl .'footer.php';
?>