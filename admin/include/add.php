<?php
    require_once "../../connect/db.php";
?>
<?php
    require_once "header.php";
?>

<form action="#" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><input type="text" name="role"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pswd"></td>
        </tr>
        <tr>
            <td><input type="submit" value="ADD" name="add"></td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $pswd = $_POST['pswd'];

        if(empty(($name) || empty($email) || empty($role) || empty($age) || empty($city) || empty($pswd))){
            echo "Please fill all the fields..";
        }else{
            $sql = "INSERT INTO user (name,email,role,age,city,pswd) VALUES ('$name','$email','$role',$age,'$city','$pswd')";

            if($conn->query($sql)){
                echo "Data added..";
                header("Location: ".$_SERVER['PHP_SELF']);
                exit(); 
            }else{
                echo "Add failed..";
            }
        }
    }
?>
