<?php
  $title = "Adventure Misc - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "冒险其他信息 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
  $json = file_get_contents('../data/vehicles.json');
  $vehicles = json_decode($json,true);
?>
<style>
  .adventure {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php
  include "left-sidebar.html";
  ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>misc info about adventure</h3>
    <a id="fuel_info"></a>
    <h4>Vehicle fuel tank size</h4>
    <table>
      <caption>Fuel tank size</caption>
      <tr>
        <th>Vehicle</th>
        <th>Image</th>
        <th>Fuel tank size (in seconds)</th>
      </tr>
      <?php
      foreach ($vehicles as $v => $v_info) {
        echo "<tr><td>".$v_info['en']."</td>";
        echo "<td><img class='in_table' src='../".$v_info["img"]."'></td><td>";
        if (is_array($v_info['fuel'])) {
          echo "Max ".end($v_info['fuel']);
        } else {
          echo $v_info['fuel'];
        }
        echo "</td></tr>";
      }
      ?>
    </table>
    <p>Except Chopper, Tank, Snowmobile and CC-EV, all other vehicles have the contact fuel tank size no matter what level the vehicle is. For these three vehicles, tank size is a compenent of the vehicle and depends on the level. In the above table, the number is based on level 20. The following shows tank size of each level.</p>
    <table>
      <caption>Fuel tank size for Chopper, Tank, Snowmobile and CC-EV</caption>
      <tr>
        <th>Fuel Component level</th>
        <th>Chopper<br><img class='in_table' src='../<?=$vehicles['Chopper']["img"]?>'></th>
        <th>Tank<br><img class='in_table' src='../<?=$vehicles['Tank']["img"]?>'></th>
        <th>Snowmobile<br><img class='in_table' src='../<?=$vehicles['Snowmobile']["img"]?>'></th>
        <th>CC-EV<br><img class='in_table' src='../<?=$vehicles['CC-EV']["img"]?>'></th>
      </tr>
      <?php
      for ($i=1; $i<=20; $i++) {
        echo "<tr><td>".$i."</td>";
        echo "<td>".$vehicles['Chopper']['fuel'][$i-1]."</td>";
        echo "<td>".$vehicles['Tank']['fuel'][$i-1]."</td>";
        echo "<td>".$vehicles['Snowmobile']['fuel'][$i-1]."</td>";
        echo "<td>".$vehicles['CC-EV']['fuel'][$i-1]."</td></tr>";
      }
      ?>
    </table>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>冒险模式 - 其他信息</h3>
    <a id="fuel_info_zh"></a>
    <h4>赛车油量</h4>
    <table>
      <caption>赛车油量</caption>
      <tr>
        <th>车名</th>
        <th>图片</th>
        <th>油量(秒)</th>
      </tr>
      <?php
      foreach ($vehicles as $v => $v_info) {
        echo "<tr><td>".$v_info['zh']."</td>";
        echo "<td><img class='in_table' src='../".$v_info["img"]."'></td><td>";
        if (is_array($v_info['fuel'])) {
          echo "最多 ".end($v_info['fuel']);
        } else {
          echo $v_info['fuel'];
        }
        echo "</td></tr>";
      }
      ?>
    </table>
    <p>除了哈雷摩托，坦克，雪地摩托 和 登斯拉，其他车都是固定油量。而对于这四辆车，油量和组件里的级别有关。上面显示的油量是升级到20的最大油量。不同的级别和油量如下：</p>
    <table>
      <caption>哈雷，坦克，雪摩的油量</caption>
      <tr>
        <th>油箱等级</th>
        <th>哈雷<br><img class='in_table' src='../<?=$vehicles['Chopper']["img"]?>'></th>
        <th>坦克<br><img class='in_table' src='../<?=$vehicles['Tank']["img"]?>'></th>
        <th>雪地摩托<br><img class='in_table' src='../<?=$vehicles['Snowmobile']["img"]?>'></th>
        <th>登斯拉<br><img class='in_table' src='../<?=$vehicles['CC-EV']["img"]?>'></th>
      </tr>
      <?php
      for ($i=1; $i<=20; $i++) {
        echo "<tr><td>".$i."</td>";
        echo "<td>".$vehicles['Chopper']['fuel'][$i-1]."</td>";
        echo "<td>".$vehicles['Tank']['fuel'][$i-1]."</td>";
        echo "<td>".$vehicles['Snowmobile']['fuel'][$i-1]."</td>";
        echo "<td>".$vehicles['CC-EV']['fuel'][$i-1]."</td></tr>";
      }
      ?>
    </table>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
