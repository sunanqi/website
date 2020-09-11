<?php
  require "header.php";
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
      switch ($event) {
        case "team-20200911-falling-with-style":
          require "team/team-20200911-falling-with-style.php";
          break;
        case "team-20200904-member-berries":
          require "team/team-20200904-member-berries.php";
          break;
        case "team-20200828-breathe-in-breathe-out":
          require "team/team-20200828-breathe-in-breathe-out.php";
          break;
        case "team-20200821-cresting-the-hill":
          require "team/team-20200821-cresting-the-hill.php";
          break;
        case "team-20200814-spring-into-action":
          require "team/team-20200814-spring-into-action.php";
          break;
        case "team-20200807-trackday-day-2":
          require "team/team-20200807-trackday-day-2.php";
          break;
        case "team-20200731-trackday-day-1":
          require "team/team-20200731-trackday-day-1.php";
          break;
        default:
          $event = "none";
      }
    ?>

  <?php
    if ($lang=='en') {
      if ($event == "none") {
    ?>

    <h3>General tips</h3>
    <p> < how to upgrade garage efficientlly > </p>

  <?php }; ?>

    <h3>Past team events tips</h3>
    <p><a href="team-tips.php?event=team-20200911-falling-with-style">Falling with Style - 20200911</a></p>
    <p><a href="team-tips.php?event=team-20200904-member-berries">Member Berries - 20200904</a></p>
    <p><a href="team-tips.php?event=team-20200828-breathe-in-breathe-out">Breathe in, Breathe out - 20200828</a></p>
    <p><a href="team-tips.php?event=team-20200821-cresting-the-hill">Cresting the Hill - 20200821</a></p>
    <p><a href="team-tips.php?event=team-20200814-spring-into-action">Spring Into Action - 20200814</a></p>
    <p><a href="team-tips.php?event=team-20200807-trackday-day-2">Trackday Day 2 - 20200807</a></p>
    <p><a href="team-tips.php?event=team-20200731-trackday-day-1">Trackday Day 1 - 20200731</a></p>

  <?php } elseif ($lang=='zh') {
      if ($event == "none") {
    ?>

    <h3>队赛攻略总览</h3>
    <p> < how to upgrade garage efficientlly > </p>

  <?php }; ?>

    <h3>以往队赛攻略</h3>
    <p><a href="team-tips.php?lang=zh&event=team-20200911-falling-with-style">Falling with Style (坠落艺术) - 20200911</a></p>
    <p><a href="team-tips.php?lang=zh&event=team-20200904-member-berries">Member Berries (浆果战队) - 20200904</a></p>
    <p><a href="team-tips.php?lang=zh&event=team-20200828-breathe-in-breathe-out">Breathe in, Breathe out (吸气呼气) - 20200828</a></p>
    <p><a href="team-tips.php?lang=zh&event=team-20200821-cresting-the-hill">Cresting the Hill(勇攀高峰) - 20200821</a></p>
    <p><a href="team-tips.php?lang=zh&event=team-20200814-spring-into-action">Spring Into Action(膝跳反应) - 20200814</a></p>
    <p><a href="team-tips.php?lang=zh&event=team-20200807-trackday-day-2">Trackday Day 2 - 20200807</a></p>
    <p><a href="team-tips.php?lang=zh&event=team-20200731-trackday-day-1">Trackday Day 1 - 20200731</a></p>
  <?php }; ?>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
