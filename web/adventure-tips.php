<?php
  $title = "Adventure Tips - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "冒险攻略 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
  $json = file_get_contents('../data/adventure-tracks.json');
  $adv_tracks = json_decode($json,true);
  $json = file_get_contents('../data/players.json');
  $players = json_decode($json,true);
  $json = file_get_contents('../data/vehicles.json');
  $vehicles = json_decode($json,true);
  $curr_name = array();
  foreach ($players as $p) {
    if (trim($p['used_name']) !== '') {
      $used_name = explode(",", $p['used_name']);
      foreach ($used_name as $u) {
        $u = trim($u);
        if (array_key_exists($u, $curr_name)) {
          echo "Warning: dup used name found: ".$u;
        } else {
          $curr_name[$u] = [$p['in_game_nick'], $p['team']];
        }
      }
    }
  }
?>
<style>
  .adventure {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<?php
  if (!isset($_GET['map'])) $map = "none";
  else $map = $_GET['map'];
  if (!array_key_exists($map, $adv_tracks)) $map = "none";
?>

<div class="flex-container">
  <?php
    include "left-sidebar.html";
  ?>
  <div class="main">
    <p class="welcome">
      <?php echo ($lang=='en') ? 'Welcome' : '欢迎'?>
      <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!
    </p>

    <?php
      if ($map == "none") {
        if ($lang=='zh') {
          ?>
          <h3>攻略总览</h3>
          <p>跑冒险一般有两类目标：尽可能跑的远，或者稳定地跑到一万米。由于<a href="/web/adventure.php?lang=zh#adventure_ranking_zh">总星数的排名规则</a>，超过1万米就对总星数没有任何帮助，所以如何可以稳定的跑到1w米大关就成了目标。以上的1w米大关是针对14张普通图的。对于3张加强图，跑到超过5000米才不会增加总星数，而要跑到5000米是极度困难的。</p>
          <p>不管你的目标是创造距离记录还是提高总星数，都可以先看以下的单图攻略，点进你想跑的图，看大佬们的记录和所带的配件，以及最重要的，看他们的跑法视频。（部分图和车还没视频，我正在添加）。</p>
          <p>总体来说，这几个配件在跑冒险中都是非常有用的：磁铁，翅膀，冬胎，金币加速。这几个大部分情况都是毫无用处的（可以先不要花金币去升级，除非你跑队赛或竞速需要用到）：铁块，空翻，起步加速，翻转加速，超频引擎(后燃)，燃料加速(蓝瓶)，推进器(铃铛)。而护架，独轮加速，低燃加速，落地加速，涡轮增压(过充涡轮)，这些只对部分车，在部分图有用。弹簧对大部分普通玩家来说在冒险中都用不上，但如果你是高手玩家，想要创造距离记录，有些图中就需要使用弹簧+落地加速+翅膀的永动跑法。</p>
          <p>另一个需要知道的是每辆车的油量。油量少的车跑冒险会非常困难。这里有<a href="/web/adventure-misc.php?lang=zh#fuel_info_zh">每辆车的油量信息</a>。</p>

          <h3>单图攻略</h3>
          <p>
            <ul>
            <?php
              foreach ($adv_tracks as $map => $map_info) {
                echo "<li><a href='adventure-tips.php?lang=zh&map=".$map."'>".$map_info["zh"]."(".$map_info["en"].")</a></li>";
              }
            ?>
            </ul>
          </p>
          <?php
        } else {
          ?>
          <h3>Overall tips</h3>
          <p>There are mainly two goals when playing Adventure: drive as far as you can, or reach 10k meters with each vehicle (or 5k meters for 3 enhanced maps). Because of <a href="/web/adventure.php#adventure_ranking">the rule on how total stars are calculated</a>, there is no meaning to drive beyond 10k meters if your goal is to improve total stars. Instead, the goals are to reach 10k line, especially with vehicles that are hard to control or have a small fuel tank. The above goal of 10k meters are for the 14 regular maps. For the 3 enhanced maps, you will continue to get stars until 5000m. Since reaching 5000m on any of these 3 maps are extremely difficult, you don't need to worry that stars will be capped.
          </p>

          <p>No matter what goal, we recommend you to watch our adventure stratigies. Click the map you are going to play, check the places of fuel cans, and most importantly, watch video recordings of other top players.</p>

          <p>Overall, here are some really useful tuning parts: magnets, wings, winter tire and coin boost. These tuning parts are useless (don't upgrade them with coins for now. Upgrade later when needed in team events): heavyweight, air control, start boost, flip boost, afterburner, fuel boost. For some vehicles, at some maps, wheelie boot, fume boost, landing boost, overcharged turbo, thrusters might be useful. Jump shocks are not very useful for most novice players, but when top players are aiming for a record, it's sometimes essential along with wings and landing boost.</p>

          <p>Another thing you need to know if the fuel can size of each vehicle. Vehicles with small tank could be very difficult to reach 10k meters. Here are a list of <a href="/web/adventure-misc.php#fuel_info">vehicle tank sizes</a>.
          </p>

          <h3>Tips for each map</h3>
          <p>
            <ul>
            <?php
              foreach ($adv_tracks as $map => $map_info) {
                echo "<li><a href='adventure-tips.php?map=".$map."'>".$map_info["en"]."</a></li>";
              }
            ?>
            </ul>
          </p>
          <?php
        };
      } else {
        $total_v = 23;
        $v10k = 0;
        $v5k = 0;
        $global_dist = 0;
        $global_1st = '';
        $cn_dist = 0;
        $cn_1st = '';
        if ($lang=='zh') {
          ?>
          <table>
            <caption>冒险 - <?=$adv_tracks[$map]['zh'];?> ( <?=$adv_tracks[$map]['en'];?> )</caption>
            <tr>
              <th>赛车</th>
              <th>世界记录</th>
              <th>中国区记录</th>
              <th>参考视频</th>
            </tr>
        <?php

        foreach ($vehicles as $v => $v_info) {
          if (array_key_exists($adv_tracks[$map][$v]["wr"][0], $curr_name)) {
            $wr_curr_name = $curr_name[$adv_tracks[$map][$v]["wr"][0]][0];
            $wr_curr_team = $curr_name[$adv_tracks[$map][$v]["wr"][0]][1];
          } else {
            $wr_curr_name = '';
            $wr_curr_team = '';
            if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
              echo "Missing player info for: ".$adv_tracks[$map][$v]["wr"][0];
            }
          }
          if (array_key_exists($adv_tracks[$map][$v]["cr"][0], $curr_name)) {
            $cr_curr_name = $curr_name[$adv_tracks[$map][$v]["cr"][0]][0];
            $cr_curr_team = $curr_name[$adv_tracks[$map][$v]["cr"][0]][1];
          } else {
            $cr_curr_name = '';
            $cr_curr_team = '';
            if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
              echo "Missing player info for: ".$adv_tracks[$map][$v]["cr"][0];
            }
          }

          echo "<tr><td><img class='in_table_small' src='../".$v_info["img"]."' alt=''></td>";
          echo "<td>".$adv_tracks[$map][$v]["wr"][1]
              ."(<u class='dotted'><span title='现ID：".$wr_curr_name
              ."&#10;队伍：".$wr_curr_team
              ."'>".$adv_tracks[$map][$v]["wr"][0]."</span></u>)</td>";
          echo "<td>".$adv_tracks[$map][$v]["cr"][1]
              ."(<u class='dotted'><span title='现ID：".$cr_curr_name
              ."&#10;队伍：".$cr_curr_team
              ."'>".$adv_tracks[$map][$v]["cr"][0]."</span></u>)</td><td>";

          if (array_key_exists("video",$adv_tracks[$map][$v])) {
            foreach ($adv_tracks[$map][$v]["video"] as $video_player => $video_info) {
              echo $video_player." ".$video_info[0]."m ";
              for ($i=1; $i<count($video_info); $i++) {
                if ($video_info[$i][0] == "yt") {
                  echo "<a href='http://youtu.be/".$video_info[$i][1]."' target='_blank'>Youtube</a> ";
                }
                if ($video_info[$i][0] == "b") {
                  echo "<a href='https://www.bilibili.com/".$video_info[$i][1]."' target='_blank'>Bilibili</a> ";
                }
              }
              echo "<br>";
            }
          }
          echo "</td></tr>";
        }
        echo "</table>";
        ?>

        <h4>燃油位置</h4>
        <table>
          <caption>冒险 - <?=$adv_tracks[$map]['zh'];?> ( <?=$adv_tracks[$map]['en'];?> )</caption>
          <tr>
            <th>燃油序号</th>
            <th>燃油位置(米)</th>
            <th>距前一个(米)</th>
            <th>说明</th>
          </tr>

        <?php
        if (array_key_exists("fuels",$adv_tracks[$map])) {
          $last_fuel = 0;
          $fuel_cnt = 0;
          foreach ($adv_tracks[$map]["fuels"] as $loc => $notes) {
            $dist_from_last = $loc - $last_fuel;
            $last_fuel = $loc;
            $fuel_cnt++;
            echo "<tr><td>".$fuel_cnt."</td>";
            echo "<td>".$loc."</td>";
            echo "<td>".$dist_from_last."</td>";
            if (count($notes)>1) {
              echo "<td>".$notes[1]."</td></tr>";
            } else {
              echo "<td></td></tr>";
            }

          }
        } else {
          echo "<tr><td colspan=4>no info</td><tr>";
        }
        ?>
        </table>
        <p><a href="adventure-tips.php?lang=zh">返回冒险攻略首页</a></p>
        <?php
      } else { // $lang=='en'
        ?>
        <table>
          <caption>Adventure - <?=$adv_tracks[$map]['en'];?></caption>
          <tr>
            <th>Vehicle</th>
            <th>World Record</th>
            <th>Reference Videos</th>
          </tr>
      <?php
      foreach ($vehicles as $v => $v_info) {
        if (array_key_exists($adv_tracks[$map][$v]["wr"][0], $curr_name)) {
          $wr_curr_name = $curr_name[$adv_tracks[$map][$v]["wr"][0]][0];
          $wr_curr_team = $curr_name[$adv_tracks[$map][$v]["wr"][0]][1];
        } else {
          $wr_curr_name = '';
          $wr_curr_team = '';
          if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
            echo "Missing player info for: ".$adv_tracks[$map][$v]["wr"][0];
          }
        }

        echo "<tr><td><img class='in_table_small' src='../".$v_info["img"]."' alt=''></td>";
        echo "<td>".$adv_tracks[$map][$v]["wr"][1]
            ."(<u class='dotted'><span title='current ID：".$wr_curr_name
            ."&#10;current team：".$wr_curr_team
            ."'>".$adv_tracks[$map][$v]["wr"][0]."</span></u>)</td><td>";

        if (array_key_exists("video",$adv_tracks[$map][$v])) {
          foreach ($adv_tracks[$map][$v]["video"] as $video_player => $video_info) {
            echo $video_player." ".$video_info[0]."m ";
            for ($i=1; $i<count($video_info); $i++) {
              if ($video_info[$i][0] == "yt") {
                echo "<a href='http://youtu.be/".$video_info[$i][1]."' target='_blank'>Youtube</a> ";
              }
              if ($video_info[$i][0] == "b") {
                echo "<a href='https://www.bilibili.com/".$video_info[$i][1]."' target='_blank'>Bilibili</a> ";
              }
            }
            echo "<br>";
          }
        }
        echo "</td></tr>";
      }
      echo "</table>";
      ?>

      <h4>Fuel Positions</h4>
      <table>
        <caption>Adventure - <?=$adv_tracks[$map]['en'];?></caption>
        <tr>
          <th>Fuel Count</th>
          <th>Fuel position(m)</th>
          <th>Dist. from previous</th>
          <th>Note</th>
        </tr>

      <?php
      if (array_key_exists("fuels",$adv_tracks[$map])) {
        $last_fuel = 0;
        $fuel_cnt = 0;
        foreach ($adv_tracks[$map]["fuels"] as $loc => $notes) {
          $dist_from_last = $loc - $last_fuel;
          $last_fuel = $loc;
          $fuel_cnt++;
          echo "<tr><td>".$fuel_cnt."</td>";
          echo "<td>".$loc."</td>";
          echo "<td>".$dist_from_last."</td>";
          if (count($notes)>1) {
            echo "<td>".$notes[0]."</td></tr>";
          } else {
            echo "<td></td></tr>";
          }

        }
      } else {
        echo "<tr><td colspan=4>no info</td><tr>";
      }
      ?>
      </table>
      <p><a href="adventure-tips.php">Return to adventure tips</a></p>
    <?php
      };
    };
    ?>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
