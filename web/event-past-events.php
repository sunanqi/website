<?php
  $title = "Event - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "每周活动 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
  $json = file_get_contents('../data/weekly-events.json');
  $weekly_events = json_decode($json,true);
?>
<style>
  .event {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<?php
  if (!isset($_GET['event'])) $event = "none";
  else $event = $_GET['event'];
?>

<div class="flex-container">
  <?php include "left-sidebar.html";
  ?>
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
    if (array_key_exists($event, $weekly_events)) {
      $e = $weekly_events[$event];
      if ($lang == 'zh') {
        echo "<h3>活动信息</h3>";
        echo "<p>名字: ".$e['event_name']["zh"]."</p>";
        echo "<p>开始时间: ".$e["event_starts"]." 7:00PM (北京时间)</p>";
        echo "<p>活动时长: 5天 1小时</p><p>目标: ".$e["event_goal"]["zh"]."</p>";
        foreach ($e["ref_videos"] as $player => $video_info) {
          if (!array_key_exists("b", $video_info) or empty($video_info["b"])) continue;
          echo $player."的视频<br>";
          echo "<iframe src='http://player.bilibili.com/player.html?bvid=".$video_info["b"]."' scrolling='no' border='0' frameborder='no' framespacing='0' allowfullscreen='true' style='width: 100%; height: 500px; max-width: 100%；align:center; padding:20px 0;'></iframe>";
        }
        echo "<p><a href='event-past-events.php?lang=zh'>返回每周活动攻略首页</a></p>";
      } else {
        echo "<h3>Event Info</h3>";
        echo "<p>Name: ".$e['event_name']["en"]."</p>";
        echo "<p>Start date and time: ".$e["event_starts"]." 13:00PM EEST (finland time)</p>";
        echo "<p>Duration: 5d 1h</p><p>Goal: ".$e["event_goal"]["en"]."</p>";
        foreach ($e["ref_videos"] as $player => $video_info) {
          echo "Video by ".$player."<br>";
          if (!empty($video_info["yt"])) {
            echo "<iframe width='720' height='405' src='https://www.youtube.com/embed/".$video_info["yt"]."' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
          } else {
            echo "<iframe src='http://player.bilibili.com/player.html?bvid=".$video_info["b"]."' scrolling='no' border='0' frameborder='no' framespacing='0' allowfullscreen='true' style='width: 100%; height: 500px; max-width: 100%；align:center; padding:20px 0;'></iframe>";
          }
        }
        echo "<p><a href='event-past-events.php'>Return to weekly event page</a></p>";
      }
    } else {
      $curr_dt = date('Y-m-d');
      if ($lang == 'zh') echo "<h3>每周活动详情</h3><ul>";
      else "<h3>Public event details</h3><ul>";
      foreach ($weekly_events as $dt => $we_info) {
        if (substr($dt, -10) > $curr_dt) continue;
        echo "<li><a href='event-past-events.php?event=".$dt;
        if ($lang=='zh') echo "&lang=zh";
        echo "'>".$we_info['event_starts'].": ".$we_info['event_name']['en'];
        if ($lang=='zh') echo " (".$we_info['event_name']['zh'].")";
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
