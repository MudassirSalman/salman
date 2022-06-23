<?php
session_start();

echo"before logout";
echo "<pre >";
print_r($_SESSION);
echo '</pre>';

session_unset();

echo"after logout";
echo "<pre >";
print_r($_SESSION);
echo '</pre>';
