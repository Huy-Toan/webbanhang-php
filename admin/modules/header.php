<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>
<div class="header">
    <p><a style="color:white;line-height:50px;" href="index.php?dangxuat=1">Đăng xuất: <?php if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    }?> </a></p>
</div>

