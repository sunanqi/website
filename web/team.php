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

    <h3>Team event overview</h3>
    <p>...</p>

    <h3>Previous team events</h3>
    <p>See <a href="team-tips.php">Team Event Tips</a> section.</p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>队赛总览</h3>
    <p>...</p>

    <h3>以往赛事</h3>
    <p>详见 <a href="team-tips.php?lang=zh">队赛攻略</a> 板块.</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
