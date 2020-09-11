<?php
  require "header.php";
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
        case "event-20200909-wheels-of-time":
          require "event/event-20200909-wheels-of-time.php";
          break;
        case "event-20200902-the-fabulous-four":
          require "event/event-20200902-the-fabulous-four.php";
          break;
        case "event-20200826-a-grand-day-out":
          require "event/event-20200826-a-grand-day-out.php";
          break;
        case "event-20200819-bouncing-bill":
          require "event/event-20200819-bouncing-bill.php";
          break;
        case "event-20200812-speed-bumps":
          require "event/event-20200812-speed-bumps.php";
          break;
        case "event-20200805-the-bill-effect":
          require "event/event-20200805-the-bill-effect.php";
          break;
        default:
          if ($lang=='en'):
    ?>
    <h3>Past events</h3>
    <p>Below is a list of previous events, their strategies and top scores screenshots.</p>
    <ul>
      <li><a href="event-past-events.php?event=event-20200909-wheels-of-time">20200909 - Wheels of Time</a></li>
      <li><a href="event-past-events.php?event=event-20200902-the-fabulous-four">20200902 - The Fabulous Four</a></li>
      <li><a href="event-past-events.php?event=event-20200826-a-grand-day-out">20200826 - A Grand Day Out</a></li>
      <li><a href="event-past-events.php?event=event-20200819-bouncing-bill">20200819 - Bouncing Bill</a></li>
      <li><a href="event-past-events.php?event=event-20200812-speed-bumps">20200812 - Speed Bumps</a></li>
      <li><a href="event-past-events.php?event=event-20200805-the-bill-effect">20200805 - The Bill Effect</a></li>
    </ul>
  <?php elseif ($lang=='zh'): ?>
    <h3>以往活动</h3>
    <p>以下是以往活动的详情，攻略和高分截图。</p>
    <ul>
      <li><a href="event-past-events.php?lang=zh&event=event-20200909-wheels-of-time">20200909 - Wheels of Time (时光之轮)</a></li>
      <li><a href="event-past-events.php?lang=zh&event=event-20200902-the-fabulous-four">20200902 - The Fabulous Four (传奇四侠)</a></li>
      <li><a href="event-past-events.php?lang=zh&event=event-20200826-a-grand-day-out">20200826 - A Grand Day Out (月球野餐行)</a></li>
      <li><a href="event-past-events.php?lang=zh&event=event-20200819-bouncing-bill">20200819 - Bouncing Bill (蹦跳比尔)</a></li>
      <li><a href="event-past-events.php?lang=zh&event=event-20200812-speed-bumps">20200812 - Speed Bumps</a></li>
      <li><a href="event-past-events.php?lang=zh&event=event-20200805-the-bill-effect">20200805 - The Bill Effect</a></li>
    </ul>
  <?php endif;
  }
  ?>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
