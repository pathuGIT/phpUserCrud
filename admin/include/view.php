<?php
    require_once "../../connect/db.php";
?>
<?php
    require_once "header.php";
?>

<table id="user">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Age</th>
        <th>City</th>
        <th>Password</th>
    </tr>

<?php 

    $sql = "SELECT * FROM user";

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['role']}</td>
                <td>{$row['age']}</td>
                <td>{$row['city']}</td>
                <td>{$row['pswd']}</td>
            </tr>

        ";
    }

?>


</table>