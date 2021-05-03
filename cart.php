<?php
require 'inc/head.php';
if (!isset($_SESSION['username'])){
    header('Location: login.php') ; 
}
?>
<section class="cookies container-fluid">
    <div class="row">
<?php var_dump(S_SESSION['cart']) ?>    </div>
</section>
<?php require 'inc/foot.php'; ?>
