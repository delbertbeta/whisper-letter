<?php
session_start();
unset($_SESSION['flag']);
echo ("<script type='text/javascript'>{window.location = './';} </script>");
?>