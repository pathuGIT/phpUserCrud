<?php
    require_once '../include/headre.php';
    require_once '../Connect/connect.php';
?>

<h2>View user</h2>
<table id="user">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Password</th>
        <th>Email</th>
    </tr>
<?php
    $sql = 'select * from user';
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['pswd']}</td>
            <td>{$row['email']}</td>
        </tr>";
    }
?>
</table>