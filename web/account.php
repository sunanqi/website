<?php
  $title = "My Account - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "我的账号 - 登山赛车2 攻略 技巧 排行榜";
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
    <p>
      <?php
        echo "My userid: ".$_SESSION['userid']."<br>";
        echo "My username: ".$_SESSION['username']."<br>";
        if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          echo "点<a href='/web/data-update.php?lang=zh'>这里</a>进入更新数据页面<br><br>";
          echo "点<a href='/web/players.php?lang=zh'>这里</a>管理玩家信息";
        }
       ?>
    </p>

    <hr>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
