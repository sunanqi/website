<?php
  $title = "Adventure Leaderboard - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "冒险总星数排行榜 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>
<style>
  .adventure {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <?php
    $json = file_get_contents('../data/adventure-tracks.json');
    $adv_tracks = json_decode($json,true);
    $json = file_get_contents('../data/players.json');
    $players = json_decode($json,true);
    $json = file_get_contents('../data/vehicles.json');
    $vihicles = json_decode($json,true);
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
    $map_count = 0;
    $last_update = date("Y-m-d");
  ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <p>
      As of 2022-03-05, global top score is 3634126 points from Zorro. <br>
      <img src='../img/leaderboard/adventure-leaderboard-20220305.png'>
    </p>

    <?php
    echo "<table><caption>Adventure Records</caption>
      <tr>
        <th>Map</th>
        <th>World Record</th>
        <th>WR Owner</th>
      </tr>";
    foreach ($adv_tracks as $map => $map_info) {
      // $top is used to store non-vehicle-specific records
      $top = array('wr'=>0, 'cr'=>0);
      if ($map_info['update_dt']<$last_update) $last_update = $map_info['update_dt'];
      foreach ($vihicles as $v => $_) {
        if ($top['wr'] < $map_info[$v]['wr'][1]) {
          $top['wr'] = $map_info[$v]['wr'][1];
          $top['wr_owner'] = $map_info[$v]['wr'][0];
        }
      }

      if (array_key_exists($top['wr_owner'], $curr_name)) {
        $wr_curr_name = $curr_name[$top['wr_owner']][0];
        $wr_curr_team = $curr_name[$top['wr_owner']][1];
        if (array_key_exists($wr_curr_name,$wr_players)) $wr_players[$wr_curr_name] += 1;
        else $wr_players[$wr_curr_name] = 1;
        if (array_key_exists($wr_curr_team,$wr_teams)) $wr_teams[$wr_curr_team] += 1;
        else $wr_teams[$wr_curr_team] = 1;
      } else {
        $wr_curr_name = '';
        $wr_curr_team = '';
        if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          echo "Missing player info for: ".$top['wr_owner'];
        }
      }

      echo "<tr><td>".$map_info['en']."</td>";
      echo "<td>".$top['wr']."</td>";
      echo "<td><u class='dotted'><span title='current name：".$wr_curr_name
          ."&#10;team：".$wr_curr_team
          ."'>".$top['wr_owner']."</span></u></td></tr>";

      // calculate stats
      $map_count += 1;
    }
    echo "</table>";
    echo "Last update：".$last_update."<br>";
    ?>
    <h3>Stats</h3>
    <b>Number of adventure maps：<?=$map_count?></b><br>

    <h4>WR per player</h4>
    <?php
    arsort($wr_players);
    foreach ($wr_players as $player => $count) {
      echo $player.": ".$count."<br>";
    }
    ?>

    <h4>WR per team</h4>
    <?php
    arsort($wr_teams);
    foreach ($wr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
    }
    ?>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <p>
      截至2022-03-05, 全球最高分是 <span class='in-line-blue-bold'>Zorro</span> 的 <span class='in-line-blue-bold'>3634126</span> 分。<br>
      <img src='../img/leaderboard/adventure-leaderboard-20220305.png'>
    </p>
    <p>
      中国区最高分是 <span class='in-line-blue-bold'> CN-极速飞飞</span> 的 <span class='in-line-blue-bold'> 3598135</span> 分。<br>
      <img src='../img/leaderboard/adventure-leaderboard-cn-20220305.png'>
    </p>
    <?php
      // echo "<img src='../".$row_global['filename']."'>";
      // echo "<img src='../".$row_cn['filename']."'>";
    ?>

    <a id="adventure_all_vehicle_detail_zh"></a>
    <h3>单图排行榜</h3>
    <h3>冒险记录(不限车) 详细数据</h3>
    <p>目前一共有17个冒险图。以下显示的是单图排行榜，更新日期见表格底部。我们大约每个月更新一次。如果你打破了某个记录希望我们尽快更新，或者发现某些数据出错，<a href="contact.php?lang=zh">联系我们</a>。如果要看总星数排行榜，<a href="adventure-leaderboard.php?lang=zh">点这里</a>。</p>
    <?php


    // $cn_all_vehicle_player_stat = array();
    // $global_specific_vehicle_player_stat = array();
    // $cn_specific_vehicle_player_stat = array();
    //
    // $global_all_vehicle_team_stat = array();
    // $cn_all_vehicle_team_stat = array();
    // $global_specific_vehicle_team_stat = array();
    // $cn_specific_vehicle_team_stat = array();
    //
    // $global_vehicle_stat = array();
    //
    // $map_count = 0;
    // $map_vehicle_count = 0;

    echo "<table><caption>冒险图记录</caption>
      <tr>
        <th>冒险图</th>
        <th>世界记录</th>
        <th>中国区记录</th>
        <th>国服记录</th>
      </tr>";
    foreach ($adv_tracks as $map => $map_info) {
      // $top is used to store non-vehicle-specific records
      $top = array('wr'=>0, 'cr'=>0);
      if ($map_info['update_dt']<$last_update) $last_update = $map_info['update_dt'];
      foreach ($vihicles as $v => $_) {
        if ($top['wr'] < $map_info[$v]['wr'][1]) {
          $top['wr'] = $map_info[$v]['wr'][1];
          $top['wr_owner'] = $map_info[$v]['wr'][0];
        }
        if ($top['cr'] < $map_info[$v]['cr'][1]) {
          $top['cr'] = $map_info[$v]['cr'][1];
          $top['cr_owner'] = $map_info[$v]['cr'][0];
        }
      }

      if (array_key_exists($top['wr_owner'], $curr_name)) {
        $wr_curr_name = $curr_name[$top['wr_owner']][0];
        $wr_curr_team = $curr_name[$top['wr_owner']][1];
        if (array_key_exists($wr_curr_name,$wr_players)) $wr_players[$wr_curr_name] += 1;
        else $wr_players[$wr_curr_name] = 1;
        if (array_key_exists($wr_curr_team,$wr_teams)) $wr_teams[$wr_curr_team] += 1;
        else $wr_teams[$wr_curr_team] = 1;
      } else {
        $wr_curr_name = '';
        $wr_curr_team = '';
        if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          echo "Missing player info for: ".$top['wr_owner'];
        }
      }

      if (array_key_exists($top['cr_owner'], $curr_name)) {
        $cr_curr_name = $curr_name[$top['cr_owner']][0];
        $cr_curr_team = $curr_name[$top['cr_owner']][1];
        if (array_key_exists($cr_curr_name,$cr_players)) $cr_players[$cr_curr_name] += 1;
        else $cr_players[$cr_curr_name] = 1;
        if (array_key_exists($cr_curr_team,$cr_teams)) $cr_teams[$cr_curr_team] += 1;
        else $cr_teams[$cr_curr_team] = 1;
      } else {
        $cr_curr_name = '';
        $cr_curr_team = '';
        if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          echo "Missing player info for: ".$top['wr_owner'];
        }
      }

      echo "<tr><td>".$map_info['zh']."(".$map_info['en'].")</td>";
      echo "<td>".$top['wr']
          ."(<u class='dotted'><span title='现ID：".$wr_curr_name
          ."&#10;队伍：".$wr_curr_team
          ."'>".$top['wr_owner']."</span></u>)</td>";

      echo "<td>".$top['cr']
          ."(<u class='dotted'><span title='现ID：".$cr_curr_name
          ."&#10;队伍：".$cr_curr_team
          ."'>".$top['cr_owner']."</span></u>)</td>";

      echo "<td>无数据</td></tr>";

      // calculate stats
      $map_count += 1;
    }
    echo "</table>";
    echo "最后更新：".$last_update."<br>";
    ?>
    <h3>数据统计</h3>
    <b>冒险图总数：<?=$map_count?></b><br>

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

    <h4>世界记录个数(每队)</h4>
    <?php
    arsort($cr_teams);
    foreach ($cr_teams as $team => $count) {
      echo $team.": ".$count."<br>";
    }
    ?>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
