<?php
  require "header.php";
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>

    <p class="welcome">Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>About</h3>
    <p>This website is created by PR-Rou (肉串爸爸) to provide tips, strategies as well as useful and prompt info for enthusiastic HCR2 players. For any feedback, contact me at PR-Rou#3033 on Discord.</p>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>

    <p class="welcome">欢迎, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>关于此网站</h3>
    <p>此网站由 PR-Rou (肉串爸爸) 创建，旨在为登山赛车2的玩家提供攻略，技巧，以及各种及时的信息。如有任何反馈，欢迎联系我。QQ登2群：255579428。</p>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
