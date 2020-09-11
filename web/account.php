<?php
  require "header.php";
?>
<style>
  #homepage {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main">
    <p class="welcome">Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>My account</h3>
    <p>(This page is still under construction. Functionality such as changing username, password, etc will be added later.)</p>
    <hr>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
