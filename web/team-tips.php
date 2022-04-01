<?php
  $title = "Teams Match Tips - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "队赛攻略 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
  $json = file_get_contents('../data/team-events.json');
  $team_events = json_decode($json,true);
  $json = file_get_contents('../data/vehicles.json');
  $vehicles = json_decode($json,true);
?>
<script src="../js/cal_score.js"></script>
<style>
  .team {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<?php
  if (!isset($_GET['event'])) $event = "none";
  else $event = $_GET['event'];
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main">
    <p class="welcome">
    <?php if ($lang == 'en'): ?>
      Welcome
    <?php elseif ($lang == 'zh'): ?>
      欢迎
    <?php endif;
    echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>
      !
    </p>

    <?php
    if (array_key_exists($event, $team_events)) {
      $e = $team_events[$event];
      if ($lang == 'zh') {
        echo "<h3>比赛模式</h3>";
        echo "<p>活动名字：".$e['match_name']['zh']."</p>";
        echo "<ul>";
        $i=1;
        for ($i=1; $i<=sizeof($e["maps"]["zh"]); $i++) {
          echo "<li>Stage ".$i.": ".$e["maps"]["zh"][$i-1].". 满分线：<span class='in-line-red'>".$e["scores"][$i-1][1]."</span></li>";
        }
        echo "</ul><h3>可用车辆</h3>";
        foreach ($e["vehicles_allowed"] as $v) {
          echo "<img class='allowed' src='../".$vehicles[$v]["img"]."'>";
        }
        echo "<h3>计分方法</h3><table id='cal_score'>";
        echo "<caption>计算你的分数</caption>";
        echo "<tr><th>图</th>";
        echo "<th>你的成绩（秒或者米）</th>";
        echo "<th>分数</th></tr>";
      } else {
        echo "<h3>Game modes</h3>";
        echo "<p>Event name: ".$e['match_name']['en']."</p>";
        echo "<ul>";
        $i=1;
        for ($i=1; $i<=sizeof($e["maps"]["en"]); $i++) {
          echo "<li>Stage ".$i.": ".$e["maps"]["en"][$i-1].". 10k mark: <span class='in-line-red'>".$e["scores"][$i-1][1]."</span></li>";
        }
        echo "</ul><h3>Allowed vehicles</h3>";
        foreach ($e["vehicles_allowed"] as $v) {
          echo "<img class='allowed' src='../".$vehicles[$v]["img"]."'>";
        }
        echo "<h3>Scores</h3><table id='cal_score'>";
        echo "<caption>Calculate your scores</caption>";
        echo "<tr><th>stage</th>";
        echo "<th>your result (in sec or meter)</th>";
        echo "<th>your score</th></tr>";
      }
      ?>
      <tr>
        <td>1</td>
        <td><input name="result1" type="text" size=10 id='num0'></td>
        <td><input type="text" id="score0" readonly></td>
      </tr>
      <tr>
        <td>2</td>
        <td><input name="result2" type="text" size=10 id='num1'></td>
        <td><input type="text" id="score1" readonly></td>
      </tr>
      <tr>
        <td>3</td>
        <td><input name="result3" type="text" size=10 id='num2'></td>
        <td><input type="text" id="score2" readonly></td>
      </tr>
      <tr>
        <td>4</td>
        <td><input name="result4" type="text" size=10 id='num3'></td>
        <td><input type="text" id="score3" readonly></td>
      </tr>
      <?php if (sizeof($e["maps"]["en"])==5) {?>
      <tr>
        <td>5</td>
        <td><input name="result5" type="text" size=10 id='num4'></td>
        <td><input type="text" id="score4" readonly></td>
      </tr>
      <?php }; ?>
      <tr>
        <td>total</td>
        <td></td>
        <td><input type="text" id="total" readonly></td>
      </tr>
      <tr>
        <td colspan="3">
          <button onclick="cal_score(<?=$n?>, <?php echo "[".$row['score_setup']."]"; ?>)">
          <?php if ($lang == 'en'): ?>
            Calculate
          <?php elseif ($lang == 'zh'): ?>
            计算
          <?php endif; ?>
          </button>
        </td>
      </tr>
    </table>
    <?php

    if ($lang == 'zh') {
      foreach ($e["ref_videos"] as $player => $video_info) {
        if (empty($video_info[1]["b"])) continue;
        echo $video_info[0]." 分视频 来自 ".$player."<br>";
        echo "<iframe src='http://player.bilibili.com/player.html?bvid=".$video_info[1]["b"]."' scrolling='no' border='0' frameborder='no' framespacing='0' allowfullscreen='true' style='width: 100%; height: 500px; max-width: 100%；align:center; padding:20px 0;'></iframe>";
      }
      echo "<p><a href='team-tips.php?lang=zh'>返回队赛攻略首页</a></p>";
    } else {
      foreach ($e["ref_videos"] as $player => $video_info) {
        echo $video_info[0]." pts by ".$player."<br>";
        if (!empty($video_info[1]["yt"])) {
          echo "<iframe width='720' height='405' src='https://www.youtube.com/embed/".$video_info[1]["yt"]."' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
        } else {
          echo "<iframe src='http://player.bilibili.com/player.html?bvid=".$video_info[1]["b"]."' scrolling='no' border='0' frameborder='no' framespacing='0' allowfullscreen='true' style='width: 100%; height: 500px; max-width: 100%；align:center; padding:20px 0;'></iframe>";
        }
      }
      echo "<p><a href='team-tips.php'>Return to team event tips</a></p>";
    }
  } else {
    $curr_dt = date('Y-m-d');
    if ($lang=='zh') echo "每轮队赛详情";
    else echo "Team event details";
    echo "<ul>";
    foreach ($team_events as $dt => $te_info) {
      if (substr($dt, -10) > $curr_dt) continue;
      echo "<li><a href='team-tips.php?event=".$dt;
      if ($lang=='zh') echo "&lang=zh";
      echo "'>".$te_info['match_starts'].": ".$te_info['match_name']['en'];
      if ($lang=='zh') echo " (".$te_info['match_name']['zh'].")";
      echo "</a></li>";
    echo "</ul>";
    }
  }
  ?>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
