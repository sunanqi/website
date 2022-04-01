<?php
  $title = "Cups Leaderboard - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "杯赛单图排行榜 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
  $json = file_get_contents('../data/cup-tracks.json');
  $cup_tracks = json_decode($json,true);
  $json = file_get_contents('../data/players.json');
  $players = json_decode($json,true);
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

  $wr_players = array();
  $wr_teams = array();

  $cr_players = array();
  $cr_teams = array();

  $csr_players = array();
  $csr_teams = array();

  $track_count = 0;
?>
<style>
  .cups {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html";
    // require "hcr2-data.php";
  ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>

    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Cups time attack records</h3>
    <p>The following shows time attack records. The date of last update is at the bottom of the table. I am trying to update it every month, but if you feel any data is wrong, or hope me to update a certain record quickly, <a href="contact.php">contact me</a>. If you are interested in total Cups points ranking, see <a href="cups-leaderboard.php">Cups total points ranking</a></p>
      <?php
      foreach ($cup_tracks as $cup => $cup_info) {
        $last_update = date("Y-m-d");
        echo "<table><caption>".$cup_info['en'][0]."</caption>
          <tr>
            <th>Track</th>
            <th>WR</th>
            <th>WR owner</th>
          </tr>";
        for ($i=1; $i<sizeof($cup_info['en']); $i++) {
          echo "<tr><td>".$cup_info['en'][$i]."</td>";
          if (array_key_exists($cup_info["wr_owner"][$i-1], $curr_name)) {
            $wr_curr_name = $curr_name[$cup_info["wr_owner"][$i-1]][0];
            $wr_curr_team = $curr_name[$cup_info["wr_owner"][$i-1]][1];
            if (array_key_exists($wr_curr_name,$wr_players)) $wr_players[$wr_curr_name] += 1;
            else $wr_players[$wr_curr_name] = 1;
            if (array_key_exists($wr_curr_team,$wr_teams)) $wr_teams[$wr_curr_team] += 1;
            else $wr_teams[$wr_curr_team] = 1;
          } else {
            $wr_curr_name = '';
            $wr_curr_team = '';
            if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
              echo "Missing player info for: ".$cup_info["wr_owner"][$i-1];
            }
          }

          echo "<td>".number_format((float)$cup_info['wr'][$i-1], 3, '.', '')."</td>";
          echo "<td><u class='dotted'><span title='current name：".$wr_curr_name
              ."&#10;team：".$wr_curr_team
              ."'>".$cup_info["wr_owner"][$i-1]."</span></u></td></tr>";

            // calculate stats
          $track_count += 1;
          if ($cup_info['update_dt']<$last_update) $last_update = $cup_info['update_dt'];
        }
        echo "</table>";
        echo "Last update: ".$last_update."<br><br>";
      }
    ?>
    <h3>Stats</h3>
    <b>Number of tracks：<?=$track_count?></b><br>

    <h4>Number of WR by players</h4>
    <?php
    arsort($wr_players);
    foreach ($wr_players as $player => $count) {
      echo $player.": ".$count."<br>";
    }
    ?>

    <h4>Number of WR by teams</h4>
    <?php
    arsort($wr_teams);
    foreach ($wr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
    }
    ?>

    <?php
    if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
      echo "
        <button type='button' onclick='toggle_leaderboard_form_en()'>Update</button>
      ";
    }
    ?>
    <div id="leaderboard_update_en" style="display: none;">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input leaderboard records below. One record per row.<br>
          Format: cup, track, scope(global or country-specific), player, player_team, rank, result(or score), vehicle, part_1, part_2, part_3,  update_date date(most likely today). <br>
          If any value is null, just put nothing (or blank) in between two commas.<br>
          Example: <br>
          Hill Climb Cup, Bottom Gear, global, SN|Carlos, 🇧🇷SN & PT🇵🇹, 1, 12.965, supercar, overcharged-turbo, afterburners, coin-boost, 2020-09-21
        </p>

        <textarea name="cups_leaderboard_update" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="cups_leaderboard_update_submit">Update</button>
      </form>
    </div>
  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>

    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>杯赛单图记录</h3>
    <p>以下显示的是单图排行榜，更新日期见表格底部。我们大约每个月更新一次。如果你打破了某个记录希望我们尽快更新，或者发现某些数据出错，<a href="contact.php?lang=zh">联系我们</a>。如果要看杯赛总分数排行榜，<a href="cups-leaderboard.php?lang=zh">点这里</a>。</p>
      <?php
      $track_count = 0;
      foreach ($cup_tracks as $cup => $cup_info) {
        $last_update = date("Y-m-d");
        echo "<table><caption>".$cup_info['zh'][0]." (".$cup_info['en'][0].")</caption>
          <tr>
            <th>赛道</th>
            <th>世界纪录</th>
            <th>中国区记录</th>
            <th>国服记录</th>
          </tr>";
        for ($i=1; $i<sizeof($cup_info['en']); $i++) {
          echo "<tr><td>".$cup_info['zh'][$i]." (".$cup_info['en'][$i].")</td>";
          if (array_key_exists($cup_info["wr_owner"][$i-1], $curr_name)) {
            $wr_curr_name = $curr_name[$cup_info["wr_owner"][$i-1]][0];
            $wr_curr_team = $curr_name[$cup_info["wr_owner"][$i-1]][1];
            if (array_key_exists($wr_curr_name,$wr_players)) $wr_players[$wr_curr_name] += 1;
            else $wr_players[$wr_curr_name] = 1;
            if (array_key_exists($wr_curr_team,$wr_teams)) $wr_teams[$wr_curr_team] += 1;
            else $wr_teams[$wr_curr_team] = 1;
          } else {
            $wr_curr_name = '';
            $wr_curr_team = '';
            if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
              echo "Missing player info for: ".$cup_info["wr_owner"][$i-1];
            }
          }

          if (array_key_exists($cup_info["cr_owner"][$i-1], $curr_name)) {
            $cr_curr_name = $curr_name[$cup_info["cr_owner"][$i-1]][0];
            $cr_curr_team = $curr_name[$cup_info["cr_owner"][$i-1]][1];
            if (array_key_exists($cr_curr_name,$cr_players)) $cr_players[$cr_curr_name] += 1;
            else $cr_players[$cr_curr_name] = 1;
            if (array_key_exists($cr_curr_team,$cr_teams)) $cr_teams[$cr_curr_team] += 1;
            else $cr_teams[$cr_curr_team] = 1;
          } else {
            $cr_curr_name = '';
            $cr_curr_team = '';
            if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
              echo "Missing player info for: ".$cup_info["cr_owner"][$i-1];
            }
          }

          echo "<td>".number_format((float)$cup_info['wr'][$i-1], 3, '.', '')
              ." (<u class='dotted'><span title='现ID：".$wr_curr_name
              ."&#10;队伍：".$wr_curr_team
              ."'>".$cup_info["wr_owner"][$i-1]."</span></u>)</td>";
          echo "<td>".number_format((float)$cup_info['cr'][$i-1], 3, '.', '')
              ." (<u class='dotted'><span title='现ID：".$cr_curr_name
              ."&#10;队伍：".$cr_curr_team
              ."'>".$cup_info["cr_owner"][$i-1]."</span></u>)</td>";
          // echo "<td>".number_format((float)$cup_info['csr'][i-1], 3, '.', '')." (<u class='dotted'><span title='现ID："."&#10;队伍："."'>"."</span></u>)</td>";
          echo "<td>无数据</td>";

          // if (array_key_exists($cup_info['en'][$i], $records[$cup])) {
          //   $row = $records[$cup][$cup_info['en'][$i]];
          //   echo "<td>".number_format((float)$row['global_score'], 3, '.', '')." (<u class='dotted'><span title='现ID：".$row['global_curr_name']."&#10;队伍：".$row['global_team']."'>".$row['global_board_name']."</span></u>)</td>";
          //   echo "<td>".number_format((float)$row['cn_score'], 3, '.', '')." (<u class='dotted'><span title='现ID：".$row['cn_curr_name']."&#10;队伍：".$row['cn_team']."'>".$row['cn_board_name']."</span></u>)</td>";
          //   echo "<td><img class='in_table_small' src='../".$vehicles[$row['vehicle']]["img"]."' alt=''> + <img class='in_table_small' src='../".$parts[$row['part_1']]["img"].
          //        "' alt=''><img class='in_table_small' src='../".$parts[$row['part_2']]["img"]."' alt=''><img class='in_table_small' src='../".$parts[$row['part_3']]["img"]."' alt=''></td></tr>";

          // calculate stats
          $track_count += 1;
          if ($cup_info['update_dt']<$last_update) $last_update = $cup_info['update_dt'];
          echo "</tr>";
        }
        echo "</table>";
        echo "最后更新：".$last_update."<br><br>";
      }
    ?>
    <h3>数据统计</h3>
    <b>赛道总数：<?=$track_count?></b><br>

    <h4>世界记录个数(每人)</h4>
    <?php
    arsort($wr_players);
    foreach ($wr_players as $player => $count) {
      echo $player.": ".$count."<br>";
    }
    ?>

    <h4>世界记录个数(每队)</h4>
    <?php
    arsort($wr_teams);
    foreach ($wr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
    }
    ?>

    <h4>中国区记录个数(每人)</h4>
    <?php
    arsort($cr_players);
    foreach ($cr_players as $player => $count) {
      echo $player.": ".$count."<br>";
    }
    ?>

    <h4>中国区记录个数(每队)</h4>
    <?php
    arsort($cr_teams);
    foreach ($cr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
    }
    ?>

    <?php
    if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
      echo "
        <button type='button' onclick='toggle_leaderboard_form_zh()'>更新</button>
      ";
    }
    ?>
    <div id="leaderboard_update_zh" style="display: none;">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input leaderboard records below. One record per row.<br>
          Format: cup, track, scope(global or country-specific), player, player_team, rank, result(or score), vehicle, part_1, part_2, part_3,  update_date date(most likely today). <br>
          If any value is null, just put nothing (or blank) in between two commas.<br>
          Example: <br>
          Hill Climb Cup, Bottom Gear, global, SN|Carlos, 🇧🇷SN & PT🇵🇹, 1, 12.965, supercar, overcharged-turbo, afterburners, coin-boost, 2020-09-21
        </p>

        <textarea name="cups_leaderboard_update" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="cups_leaderboard_update_submit">Update</button>
      </form>
    </div>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>

<script type="text/javascript">
  function toggle_leaderboard_form_en() {
    var x = document.getElementById("leaderboard_update_en");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function toggle_leaderboard_form_zh() {
    var x = document.getElementById("leaderboard_update_zh");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>
