<?php

session_start();
session_destroy();
echo "<script>alert('Anda telah logout, Sampai jumpa lagi');
            window.location = 'login.php';</script>";