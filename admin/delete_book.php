<?php

include "../db_connection.php";

$delete_query = "delete from books where bId = $_GET[bId]";
$res = mysqli_query($connect, $delete_query);

if ($res) {
?><script>
        alert("Book Deleted");
    </script><?php
                header("Location:./showBooks.php");
            } else {
                ?><script>
        alert("Book Not Deleted");
    </script><?php

            }




                ?>