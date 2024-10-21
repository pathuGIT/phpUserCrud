<?php
    require_once '../include/headre.php';
    require_once '../Connect/connect.php';
?>
<h2>Delete User</h2>

<form action="" method="post" onsubmit="return confirmfun()">
    <table>
        <tr>
            <td><input type="text" name="delete_id" placeholder="Enter User ID to Delete"></td>
            <td><input type="submit" name="delete" value="Delete"></td>
        </tr>
    </table>
</form>

<script>
    function confirmfun() {
        return confirm("Are you sure you want to delete this user?");
    }
</script>

<?php
// PHP block to handle the deletion
if (isset($_POST['delete'])) {
    if (!empty($_POST['delete_id'])) {
        $id = $_POST['delete_id'];
        $delete = "DELETE FROM user WHERE id = $id";

        if ($conn->query($delete)) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
    } else {
        echo "Please provide a valid ID.";
    }
}
?>
