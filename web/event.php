<?php
  $title = "Event Overview - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "每周活动 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>
<style>
  .event {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>What is Event Mode?</h3>
    <p>Every week there is a public event open to all players above Silver I level (> 10,000 total Cups points). The event consists of many short races, mostly ranging from 2 to 4 minutes. The topics of the event change from week to week - could be anything from the pure time attack, to jumping as far as you can, or perfroming as many tricks as you can.</p>

    <p>Players can enter the race at any time, as long as the event is open. Players entering the race at the same time will be grouped and competed together. So the competition is real time. During the 2 to 4 minutes races, players can make multiple tries - the one with best score will be recorded. At the end of the race, results will be ranked within that group. The 1st place gets 10 points, then multiple 9s, 8s, etc. (When not enough players in the group, there could be only 1 or even no 9s or 8s.) </p>

    <p>Each player is initially given 4 tickets to play in the event. Every multiple of 4 hours after the initial joining, tickets will be refreshed to 4. So basically 4 tickets are given every day. If you don't use them up, they are wasted. If you don't have tickets but still want to play, you can buy 4 tickets with 20 gems. You can buy as many as you can.</p>

    <h3>Event rewards</h3>
    <p>The event comes with good rewards. When you reach certain total points, you get corresponding rewards. Most of the time the rewards end at 400 or 500 points. That means, after 400 or 500 points, you can still play in the event as many time as you can, but you won't get extra rewards. Most of the time, the rewards include 1 common, 1 rare, 1 epic and 1 legendary chest, along with some coins, parts, outfits. Sometimes there are also a champion chest and/or a team event ticket.</p>

    <h3>Double points for VIP</h3>
    <p>If you subscribe VIP, you will get double points in the event. That means, you can accumulate points and "finish" the event twice as fast. This is one of the major benefit as a VIP. For other benefits and whether we recommend subscription, please see <a href="spend-money.php">spend money section</a>.</p>

    <h3>Past events</h3>
    <p>
      Please refer to <a href="event-past-events.php">Past Events</a> section.
    </p>
  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>活动模式</h3>
    <p>游戏每周都有一个主题的活动，所有银级I以上的玩家均可参加。整个活动持续5~7天，每场比赛大约2-4分钟，随时可以加入。活动的主题每周都不一样，有竞速，有技巧赛，等等。</p>

    <p>玩家可以随时加入一场比赛。接近同时进入的玩家将被分到一组，排名是实时的。在2至4分钟的比赛中，玩家可以进行多次尝试，最好的成绩会被记录。比赛结束后，根据排名会得到2~10分不等。有VIP的玩家可以获得双倍积分。</p>

    <h3>活动奖励</h3>
    <p>每周活动的奖励相当不错。每达到一定的总积分后，就会获得相应的礼品，从金币到钻石，从皮肤到宝箱，有时候还会有一张蓝票（队赛用）。多数情况下，奖励在400或500分结束。之后，你可以继续玩，但就不会获得额外的奖励了。</p>

    <h3>VIP会员双倍积分</h3>
    <p>如果您订阅VIP，您将在活动中获得双倍积分。 这意味着，您可以积累积分，并以两倍快的速度“完成”活动。 这是VIP的主要好处之一。 有关其他好处以及我们是否建议订阅，请看<a href="spend-money.php?lang=zh">氪金攻略</a>板块.</p>

    <h3>以往活动</h3>
    <p>
      请看 <a href="event-past-events.php?lang=zh">以往活动</a> 板块.
    </p>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
