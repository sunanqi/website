<?php
  $title = "Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "添加好友 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>
<style>
  .friend_link {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

  <?php
  if ($lang!='zh') {
    echo "<script type='text/javascript'>location.href = '/web/index.php';</script>";
  }
  ?>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>好友链接</h3>
    <p>如果想加入你自己的好友链接，加我们的<span class='in-line-blue-bold'>QQ群：255579428</span>，发给群管理员。<br>
      如果不知道如何添加好友，拉到以下好友表格的下面看加好友方法。
    </p>

  <script src="../js/sort-table.js"></script>
  <table id="friend_link">
    <caption>好友链接</caption>
    <tr>
      <th>#</th>
      <th>玩家</th>
      <th onclick="sortTable('friend_link',2, false)">所在队伍</th>
      <th onclick="sortTable('friend_link',3)">车库值</th>
      <th>好友链接</th>
    </tr>

  <?php
  $json = file_get_contents('../data/players.json');
  $friend_data = json_decode($json,true);
  $row_number = 1;

  foreach ($friend_data as $row) {
    if ($row["link"] == "") continue;
    echo "<tr><td>".$row_number."</td>";
    echo "<td>" . $row['in_game_nick'] . "</td>";
    echo "<td>" . $row['team'] . "</td>";
    echo "<td>" . $row['gp'] . "</td>";
    echo "<td><a href='https://playhcr.com/invite?id=" . $row['link'] . "'>https://playhcr.com/invite?id=". $row['link'] ."</a></td>";
    // echo "<td>" . $row['update_date'] . "</td>";
    echo "</tr>";
    $row_number += 1;
  }
  ?>
</table>
<?php
echo '<script type="text/javascript">
  sortTable("friend_link",3);
  </script>';
?>

<h3>加好友方法</h3>
<p>(感谢 "TC | 战狼96" 提供) </p>

<ul>
  <li><span class='in-line-blue-bold'>发送好友链接给他人</span></li>
  打开游戏，到“活动”页，找到自己的链接，发送到QQ、微信等社交平台。<br>
  <img src="../img/team-china/add-friend-1.jpg" alt=""><br>
  <img src="../img/team-china/add-friend-2.jpg" alt=""><br>
  <img src="../img/team-china/add-friend-4.jpg" alt=""><br>

  <li><span class='in-line-blue-bold'>通过他人的好友链接加好友</span></li>
  第一步：一般你会在QQ或者微信里收到好友链接，点击后app会用自带的浏览器打开链接。点击右上角，选择在浏览器app里打开(safari, chrome等)。<br>
  <img src="../img/team-china/add-friend-3.jpg" alt=""> <br>
  <img src="../img/team-china/add-friend-5.jpg" alt=""> <br><<br>

  第二步：大部分情况下，链接打开后，会让你选择在游戏中打开，还是在应用商店打开。选择在游戏中打开（Tap here to play if you have Hill Climb Racing 2)。<br>
  如果浏览器没让你选择，而是直接用应用商店打开，那就退回去重新开始第一步。如果还是不行，加我们的QQ群在群里询问。
  <img src="../img/team-china/add-friend-9.jpg" alt=""> <br><br>

  第三步：跳转到游戏后，不会收到添加好友的确认信息，但应该是已经添加好了。可以点这里查看。好友多的话，找起来会麻烦一些。<br>
  <img src="../img/team-china/add-friend-8.jpg" alt=""> <br><br>
</ul>
</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
