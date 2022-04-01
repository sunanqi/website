<?php
  $title = "Adventure Leaderboard - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "冒险单图排行榜 - 登山赛车2 攻略 技巧 排行榜";
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

<div class="flex-container">
  <?php include "left-sidebar.html";
  // require "hcr2-data.php";
  // require "includes/dbh.inc.php";
  // $records = adventure_all_map();
  ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>

    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <a id="adventure_specific_vehicle_wr"></a>

    <a id="wr_summary"></a>
    <h3>Adventure records(each vehicle)</h3>
    <p>There are 17 adventure maps and 23 vehicles, thus 391 vehicle-specific adventure records.</p>

    <?php
    $wr_players = array();
    $wr_teams = array();
    $last_update = date("Y-m-d");

    foreach ($adv_tracks as $map => $map_info) {
      echo "<table><caption>".$map_info['en']."</caption>
        <tr>
          <th>Vehicle</th>
          <th>WR</th>
          <th>WR owner</th>
        </tr>";
      foreach ($vehicles as $v => $v_info) {
        if (array_key_exists($map_info[$v]["wr"][0], $curr_name)) {
          $wr_curr_name = $curr_name[$map_info[$v]["wr"][0]][0];
          $wr_curr_team = $curr_name[$map_info[$v]["wr"][0]][1];
          if (array_key_exists($wr_curr_name,$wr_players)) $wr_players[$wr_curr_name] += 1;
          else $wr_players[$wr_curr_name] = 1;
          if (array_key_exists($wr_curr_team,$wr_teams)) $wr_teams[$wr_curr_team] += 1;
          else $wr_teams[$wr_curr_team] = 1;
        } else {
          $wr_curr_name = '';
          $wr_curr_team = '';
          if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
            echo "Missing player info for: ".$map_info[$v]["wr"][0];
          }
        }

        echo "<tr><td><img class='in_table_small' src='../".$v_info["img"]."' alt=''></td>";
        echo "<td>".$map_info[$v]["wr"][1]."</td>";
        echo "<td><u class='dotted'><span title='Current name：".$wr_curr_name
            ."&#10;team：".$wr_curr_team
            ."'>".$map_info[$v]["wr"][0]."</span></u></td></tr>";
      }
      echo "</table>";
      echo "Last update:".$map_info["update_dt"]."<br><br>";
    }
    ?>

    <h3>Stats</h3>

    <h4>WR per player (vehicle specific records)</h4>
    <?php
    arsort($wr_players);
    $total = 0;
    foreach ($wr_players as $player => $count) {
      echo $player.": ".$count."<br>";
      $total += $count;
    }
    echo "Total: ".$total;
    ?>

    <h4>WR per team (vehicle specific records)</h4>
    <?php
    $total = 0;
    arsort($wr_teams);
    foreach ($wr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
      $total += $count;
    }
    echo "Total: ".$total;
    ?>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>

    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <a id="adventure_specific_vehicle_wr_zh"></a>
    <h3>冒险记录(指定车) 数据统计</h3>
    <p>目前一共有17个冒险图，23辆车，所以一共有391个指定车的世界纪录。</p>

    <?php
    $wr_players = array();
    $wr_teams = array();
    $cr_players = array();
    $cr_teams = array();
    $csr_players = array();
    $csr_teams = array();
    $map_count = 0;
    $last_update = date("Y-m-d");
    foreach ($adv_tracks as $map => $map_info) {
      echo "<table><caption>".$map_info['zh']."(".$map_info['en'].")</caption>
        <tr>
          <th>赛车</th>
          <th>世界记录</th>
          <th>中国区记录</th>
          <th>国服记录</th>
        </tr>";
      foreach ($vehicles as $v => $v_info) {
        if (array_key_exists($map_info[$v]["wr"][0], $curr_name)) {
          $wr_curr_name = $curr_name[$map_info[$v]["wr"][0]][0];
          $wr_curr_team = $curr_name[$map_info[$v]["wr"][0]][1];
          if (array_key_exists($wr_curr_name,$wr_players)) $wr_players[$wr_curr_name] += 1;
          else $wr_players[$wr_curr_name] = 1;
          if (array_key_exists($wr_curr_team,$wr_teams)) $wr_teams[$wr_curr_team] += 1;
          else $wr_teams[$wr_curr_team] = 1;
        } else {
          $wr_curr_name = '';
          $wr_curr_team = '';
          if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
            echo "Missing player info for: ".$map_info[$v]["wr"][0];
          }
        }
        if (array_key_exists($map_info[$v]["cr"][0], $curr_name)) {
          $cr_curr_name = $curr_name[$map_info[$v]["cr"][0]][0];
          $cr_curr_team = $curr_name[$map_info[$v]["cr"][0]][1];
          if (array_key_exists($cr_curr_name,$cr_players)) $cr_players[$cr_curr_name] += 1;
          else $cr_players[$cr_curr_name] = 1;
          if (array_key_exists($cr_curr_team,$cr_teams)) $cr_teams[$cr_curr_team] += 1;
          else $cr_teams[$cr_curr_team] = 1;
        } else {
          $cr_curr_name = '';
          $cr_curr_team = '';
          if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
            echo "Missing player info for: ".$map_info[$v]["cr"][0];
          }
        }

        echo "<tr><td><img class='in_table_small' src='../".$v_info["img"]."' alt=''></td>";
        echo "<td>".$map_info[$v]["wr"][1]
            ."(<u class='dotted'><span title='现ID：".$wr_curr_name
            ."&#10;队伍：".$wr_curr_team
            ."'>".$map_info[$v]["wr"][0]."</span></u>)</td>";
        echo "<td>".$map_info[$v]["cr"][1]
            ."(<u class='dotted'><span title='现ID：".$cr_curr_name
            ."&#10;队伍：".$cr_curr_team
            ."'>".$map_info[$v]["cr"][0]."</span></u>)</td>";
        echo "<td>无数据</td></tr>";
      }
      echo "</table>";
      echo "最后更新：".$map_info["update_dt"]."<br><br>";
    }
    ?>

    <h3>数据统计</h3>

    <h4>世界纪录(指定车)，每人</h4>
    <?php
    $total = 0;
    arsort($wr_players);
    foreach ($wr_players as $player => $count) {
      echo $player.": ".$count."<br>";
      $total += $count;
    }
    echo "总计: ".$total;
    ?>

    <h4>世界纪录(指定车)，每队</h4>
    <?php
    $total = 0;
    arsort($wr_teams);
    foreach ($wr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
      $total += $count;
    }
    echo "总计: ".$total;
    ?>

    <h4>中国区纪录(指定车)，每人</h4>
    <?php
    $total = 0;
    arsort($cr_players);
    foreach ($cr_players as $player => $count) {
      echo $player.": ".$count."<br>";
      $total += $count;
    }
    echo "总计: ".$total;
    ?>

    <h4>中国区纪录(指定车)，每队</h4>
    <?php
    $total = 0;
    arsort($cr_teams);
    foreach ($cr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
      $total += $count;
    }
    echo "总计: ".$total;
    ?>

    <?php
    if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
      echo "
        <button type='button' onclick='toggle_leaderboard_form_zh()'>Update</button>
      ";
    }
    ?>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
