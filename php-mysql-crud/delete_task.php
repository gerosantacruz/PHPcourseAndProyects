<?php 
    include('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(!$result){
            $_SESSION['message'] = 'Task don`t found';
            $_SESSION['message_type'] = 'danger';

        }

        $_SESSION['message'] = 'Task delete';
        $_SESSION['message_type'] = 'danger';

        header('Location: index.php');
    }
?>