<?php
    require_once "../../connect/db.php";
?>
<?php
    require_once "header.php";
?>

<?php 
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $pswd = $_POST['pswd'];

        if(empty(($name) || empty($email) || empty($role) || empty($age) || empty($city) || empty($pswd))){
            echo "Please fill all the fields..";
        }else{
            $sql = "UPDATE user SET name='$name', email='$email', role='$role', age='$age', city='$city', pswd='$pswd' WHERE id=$id ";

            if($conn->query($sql)){
                echo "Update Successfull";
                header("Location: ".$_SERVER['PHP_SELF']);
                exit(); 
            }else{
                echo "Update failed..";
            }
        }
    }
?>

<?php
    if(isset($_POST['search'])){
        if(!empty($_POST['searchId'])){
            $uid = $_POST['searchId'];
            $sqlSearch = "SELECT * FROM user WHERE id = $uid";
            
            $result = $conn->query($sqlSearch);
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $role = $row['role'];
                $age = $row['age'];
                $city = $row['city'];
                $pswd = $row['pswd'];
            }
        }
    }
?>

<form action="#" method="post">
    <table>
        <tr>
            <td><input type="text" name="searchId" placeholder="Enter users ID"></td>
            <td><input type="submit" name="search" Value="SEARCH"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php if(isset($id)) echo $id;?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php if(isset($name)) echo $name;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php if(isset($email)) echo $email;?>"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><input type="text" name="role" value="<?php if(isset($role)) echo $role;?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age" value="<?php if(isset($age)) echo $age;?>"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" value="<?php if(isset($city)) echo $city;?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="pswd" value="<?php if(isset($pswd)) echo $pswd;?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="UPDATE" name="update"></td>
        </tr>
    </table>
</form>