<?php
  $title = "Teams Misc - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "团队其他信息 - 登山赛车2 攻略 技巧 排行榜";
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

    <h3>Misc</h3>
    <p>...</p>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>队赛其他信息</h3>
    <p>暂无内容，待添加。</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
