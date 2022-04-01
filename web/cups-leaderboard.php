<?php
  $title = "Cups Leaderboard - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "杯赛总分排行榜 - 登山赛车2 攻略 技巧 排行榜";
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

    <h3>Cups total points leaderboard</h3>
    <p>The following shows total points leaderboard. For time attack leaderboard of each map, <a href="cups-leaderboard-all-maps.php">see here</a>.</p>

    <p>As of 2022-03-29, the highest Cups points is <span class='in-line-blue-bold'><?=number_format(59683492);?></span> by <span class='in-line-blue-bold'>LadyC.</span>.
    <img src='../img/leaderboard/cups-leaderboard-20220330.png'>
    </p>
  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>

    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>杯赛总分积分榜</h3>
    <p>以下显示的是杯赛总分排行榜。<a href="cups-leaderboard-all-maps.php?lang=zh">单图排行榜见这里</a>。</p>
    <p>
      截至2022-03-29, 全球最高分是 <span class='in-line-blue-bold'>LaydC.</span> 的 <span class='in-line-blue-bold'><?=number_format(59683492);?></span> 分。
      中国区最高分是 <span class='in-line-blue-bold'> chefi </span> 的 <span class='in-line-blue-bold'> <?=number_format(7801721);?></span> 分。有关排行榜的更多详细信息，请参见<a href="cups-leaderboard.php?lang=zh">杯赛排行榜</a>部分。
    <img src='../img/leaderboard/cups-leaderboard-20220330.png'>
    <img src='../img/leaderboard/cups-leaderboard-cn-20220330.png'>
    </p>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
