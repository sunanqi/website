<?php
  $title = "Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "Team China - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>
<script src="../js/sort-table.js"></script>
<style>
  .teamchina_header {
    background-color: #4AAA31; /* 74,170,49 */
  }

  #team_china_score_table {
    font-size: 16px;
  }

  #team_china_score_table td {
    font-size: 14px;
  }

  #team_china_score_table td.no-wrap-td {
    white-space: nowrap;
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Team China</h3>
    <p>...</p>
    <?php
    if ($lang!='zh') {
      echo "<script type='text/javascript'>location.href = '/web/index.php';</script>";
    }
    ?>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Team China</h3>
    <p>Team China是我们所有车队中战力最强的一支，集合了中国绝大部分高手玩家，是所有以中国人为班底的队伍中最强的一支。Team China的前身是极速狂热。历史最高排名第三，之后在Fingersoft几波有争议的严打后，损失多位前排大佬，逐渐下降到15名左右，又逐渐下降到40名左右。目前Team China在CC级（最高级别）联赛中排名 30 ~ 40 名。</p>
      <ul>
        <li><a href="#team_china_roster">Team China现役队员</a></li>
        <li><a href="#team_china_score">近期战绩</a></li>
        <li><a href="#past_ranking">队伍排名</a></li>
      </ul>

    <a id="team_china_roster"></a>
    <h3>Team China现役队员</h3>
    <p>点击首行冒险分数，杯赛分数，车库值可以排序 <br></p>
    <table id="tc_roster_table">
      <caption>Team China队员名单</caption>
      <tr>
        <th>#</th>
        <th>队员</th>
        <th onclick="sortTable('tc_roster_table',2)">杯赛分数</th>
        <th onclick="sortTable('tc_roster_table',3)">冒险分数</th>
        <th onclick="sortTable('tc_roster_table',4)">车库值</th>
        <?php
        if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          echo "<th>最后更新</th>";
        }
         ?>
      </tr>

      <?php
      $json = file_get_contents('../data/players.json');
      $players = json_decode($json,true);
      $team_rank = 1;
      $last_update = '';

      foreach ($players as $player => $row) {
        if ($row['team'] != "Team China🇨🇳") continue;
        echo "<tr><td>".$team_rank."</td>";
        echo "<td>" . $player . "</td>";
        echo "<td>" . $row['cup_pt'] . "</td>";
        echo "<td>" . $row['adv_pt'] . "</td>";
        echo "<td>" . $row['gp'] . "</td>";
        if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          echo "<td>" . $row['last_update'] . "</td>";
        }
        echo "</tr>";

        $team_rank += 1;
        if (empty($last_update)) {
          $last_update = $row['last_update'];
        } else {
          $last_update = min($last_update, $row['last_update']);
        }

      }
      ?>
    </table>
    <?php
    echo '<script type="text/javascript">
      sortTable("tc_roster_table",2);
      </script>';
    ?>
    最后更新：<?=$last_update;?> <br>

    <a id="team_china_score"></a>
    <h3>Team China近期战绩</h3>
    <table id="tc_score_table" class="smaller_text">
      <caption>Team China近期战绩</caption>
      <tr>
        <th onclick="sortTable('tc_score_table',0,false,false)">日期</th>
        <th>对手</th>
        <th>比赛结果</th>
        <th>我队高分</th>
        <th>结算视频</th>
      </tr>

      <?php
      $json = file_get_contents('../data/match_scores.json');
      $match_scores = json_decode($json,true);

      foreach ($match_scores as $row) {
        if ($row['host'] != "Team China🇨🇳") continue;
        echo "<tr><td>" . $row['match_date'] . "</td>";
        echo "<td>" . $row['guest'] . "</td>";
        echo "<td>" . $row['host_pt']." : ".$row['guest_pt'] . "</td>";

        echo "<td>" . $row['host_top3_pt'][0][0]."(".$row['host_top3_pt'][0][1]."), "
                    . $row['host_top3_pt'][1][0]."(".$row['host_top3_pt'][1][1]."), "
                    . $row['host_top3_pt'][2][0]."(".$row['host_top3_pt'][2][1].")". "</td>";

        if (strlen($row['video_link'])) {
          echo "</td><td><a href='https://www.bilibili.com/video/".$row['video_link']."' target='_blank'>Bilibili</a>";
        } else {
          echo "</td><td>";
        }
        echo "</tr>";

      }
      ?>
    </table>
    <?php
    echo '<script type="text/javascript">
      sortTable("tc_score_table",0,false,false);
      </script>';
    ?>

    <a id="past_ranking"></a>
    <h3>Team China排名</h3>
    <?php
    echo "编辑中";
    #include "team-china-past-ranking.php" ?>
    <p>

    </p>


  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
