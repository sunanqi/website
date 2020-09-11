<?php
  if (isset($_GET['lang'])) $lang = $_GET['lang'];
  else $lang = 'en';

  require "header.php";
?>
<style>
  .adventure {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Current leaderboard based on stars</h3>
    <p>Todo: add a table of leaderboard here</p>

    <h3>Original way of ranking based on max distance</h3>
    <p>Before version 1.37, the game does not provide a leaderboard. Instead, every player can see their own "total best", which is the sum of the records from each map. Now (as of version 1.37), although "total best" is not shown, one can still calculate that based on the public map-specific leaderboard.</p>
    <p>Todo: add a table of total best (maybe 2, 1 for only the 13 legacy maps, 1 with 3 enhanced maps)</p>

    <h3>Map-specific leaderboard</h3>
    <p>The map-specific leaderboards provided by the game show max distance by any vehicle.</p>
    <p>Todo: add 16 tables of map-specific leaderboards</p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>新版的排行榜(基于星星数量)</h3>
    <p>Todo: add a table of leaderboard here</p>

    <h3>经典排名(基于每个图的最远距离)</h3>
    <p>在1.37版之前，游戏不提供排行榜。 相反，每个玩家都可以看到自己的“最佳总成绩”，这是每张地图中记录的总和。 现在（从1.37版开始），虽然未显示“ total best”，但仍可以根据特定于公共地图的页首横幅计算得出。</p>
    <p> Todo：添加一张总分最好的表格（也许2张，只有13张旧版地图，一张有3张增强版地图）</p>

    <h3>单图排行榜</h3>
    <p>游戏提供的特定于地图的排行榜显示了任何车辆的最大距离。</p>
    <p>Todo: add 16 tables of map-specific leaderboards</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
