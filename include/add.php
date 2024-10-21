<?php
    require_once '../include/headre.php';
    require_once '../Connect/connect.php';
?>

    <h2>Add User</h2>
    <form action="" method="post">
        <!-- <p>Id</p><input type="text" name="id"><br>
        <p>Name</p><input type="text" name="name"><br>
        <p>Password</p><input type="text" name="pswd"><br>
        <p>Age</p><input type="text" name="age"><br>
        <p>Email</p><input type="text" name="email"><br>
        <input type="submit" name="Add" value="Add"> -->

        <table>
            <tr>
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pswd"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="Add" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['Add'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $pswd = $_POST['pswd'];
            $age = $_POST['age'];
            $email = $_POST['email'];

            if(empty($id)||empty($name)||empty($pswd)||empty($age)||empty($email)){
                echo 'Requre all fieled..';
            }else{
                $sql = "Insert into user value ($id,'$name',$age,$pswd,'$email')";

                if($conn->query($sql)){
                    echo"Add Successfull.";
                }else{
                    echo"Add failed!";
                }
            }            
        }
    ?>