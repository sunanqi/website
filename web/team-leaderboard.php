<?php
  require "header.php";
?>
<style>
  .team {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Leaderboard</h3>
    <p>...</p>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>队赛排行榜</h3>
    <p>...</p>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
