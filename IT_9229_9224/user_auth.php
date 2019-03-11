<?php
$u = "fyit3";
$p = "2019";

$un = $_POST["un"];
$pw = $_POST["pw"];

if ($un == $u && $pw == $p)
{
  echo "Welcome";
  }
  else
  {
  echo "Invalid credentials";
  }
?>