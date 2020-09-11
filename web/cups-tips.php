<?php
  require "header.php";
?>
<style>
  .cups {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Tips on winning cups</h3>
    <p>...</p>

    <h3>Tips on individual tracks</h3>
    <p>...</p>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>(快速)赢得杯赛的攻略</h3>
    <p>...</p>

    <h3>每个赛道的竞速攻略</h3>
    <p>...</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
