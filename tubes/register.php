<?php 
$title = '| Kesehatan Mata';

require('functions.php');

if (isset($_POST["register"])) {
    if (signup($_POST) > 0) {
        echo "
        <script>
          alert('Sign up success!');
          document.location.href = './login.php';
        </script>
      ";
    } else {
        echo mysqli_error($conn);
    }
}


require('views/register.view.php');
