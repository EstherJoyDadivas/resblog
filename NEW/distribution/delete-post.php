<?php
require('templates/dbconnection.php');
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    $deleteUsersSql = $conn->prepare("Delete from post where post_id='$post_id'");
    $deleteUsersSql->execute();

    echo "
				<script>
			    	alert ('Succes');
			    </script> ";

    header("Location: manage-post.php");
} else {
    echo "
				<script>
			    	alert ('fail');
			    </script> ";
}
