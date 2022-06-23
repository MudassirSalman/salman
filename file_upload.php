<?php
$username=$_POST['username'];
echo "username :" . $username;
$profile_image=$_FILES['profile_image'];

echo 'username :' . $username.'<br/>';
echo "<pre >";
print_r($profile_image);
echo"</pre";