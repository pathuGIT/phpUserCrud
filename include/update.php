<?php
    require_once '../include/headre.php';
    require_once '../Connect/connect.php';
?>
<?php
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $pswd = $_POST['pswd'];
            $age = $_POST['age'];
            $email = $_POST['email'];

            if(empty($id)||empty($name)||empty($pswd)||empty($age)||empty($email)){
                echo 'Requre all fieled..';
            }else{
                $sql = "Update user set name='$name', pswd=$pswd, age=$age, email='$email' where id = $id";

                if($conn->query($sql)){
                    echo"Update Successfull.";
                }else{
                    echo"Update failed!";
                }
            }            
        }
    ?>

    <?php
        if(isset($_POST['search'])){
            if(!empty($_POST['search_d'])){
                $id = $_POST['search_d'];
                $sel_search  = "select * from user where id = $id";
                $result = $conn->query($sel_search);
                while($row = $result->fetch_assoc()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $age = $row['age'];
                    $pswd = $row['pswd'];
                    $email = $row['email'];
                }
            }
        }
    ?>

    <h2>Update user</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="search_d"></td>
                <td><input type="submit" name="search" value="Search"></td>
                </tr>
        </table><br>
        <table>
            <tr>
                <td>Id</td>
                <td><input type="text" name="id" value="<?php if(isset($id)) echo $id; ?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pswd" value="<?php if(isset($pswd)) echo $pswd; ?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" value="<?php if(isset($age)) echo $age; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

    