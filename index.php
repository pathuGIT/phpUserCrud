<?php
    session_start();
    require_once 'connect/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/school/css/common.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="login">
        <h3>Login</h3>
        <table>
            <tr>
                <td><input type="text" name="email" placeholder="User email"></td>
            </tr>
            <tr>
                <td><input type="password" name="pswd" placeholder="User pswd"></td>
            </tr>
            <tr>
                <td><input type="submit" value="LOGIN" name="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];

        $sql = "SELECT id,email,role,pswd FROM user WHERE email = '$email' and pswd = '$pswd'";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
            if($row['role'] == 'admin'){
                header("Location: /school/admin/index.php");
                exit();
            }elseif($row['role'] == 'student'){
                $_SESSION['userId'] = $row['id'];
                header("Location: /school/user/index.php");
                exit();
            }else{
                echo "Wrong user Type..";
            }
        }
    }
?>