<?php
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
    <p>Every week there is a public event open to all players above Silver I level (> 10,000 total Cups points). The event consists of many short races, mostly ranging from 2 to 4 minutes. The topic of the event change from week to week - could be anything from the vanilla racing, to jumping as far as you can, or perfroming as many tricks as you can.</p>

    <p>Players can enter the race at any time, as long as the event is open. Players entering the race at the same time will be grouped and competed together. So the competition is real time. During the 2 to 4 minutes races, players can make multiple tries - the one with best score will be recorded. At the end of the race, results will be ranked within that group. The 1st place gets 10 points, then multiple 9s, 8s, etc. (When not enough players in the group, there could be only 1 or even no 9s or 8s.) </p>

    <p>Each player is initially given 4 tickets to play in the event. Every multiple of 4 hours after the initial joining, tickets will be refreshed to 4. So basically 4 tickets are given every day. If you don't use them up, they are wasted. If you don't have tickets but still want to play, you can buy 4 tickets with 20 gems. You can buy as many as you can.</p>

    <h3>Event rewards</h3>
    <p>The event comes with good rewards. When you reach certain total points, you get corresponding rewards. A typical series of rewards looks like this: </p>
    <p>Most of the time the rewards end at 400 or 500 points. That means, after 400 or 500 points, you can still play in the event as many time as you can, but you won't get extra rewards. Most of the time, the rewards include 1 common, 1 rare, 1 epic and 1 legendary chest, along with some coins, parts, outfits. Sometimes there are also a champion chest and/or a team event ticket.</p>

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
    <p>每周都有一次公开赛，所有银级I以上（总杯分> 10,000点）的玩家均可参加。 该赛事包括许多短距离比赛，大多为2至4分钟。 事件的主题每周变化一次-可能是从原始赛车到跳到尽可能远的任何事情，或者是尽可能多的花样表演。</p>

    <p>只要赛事开放，玩家就可以随时参加比赛。 同时参加比赛的玩家将被分组并比赛。 因此，竞争是实时的。 在2至4分钟的比赛中，玩家可以进行多次尝试-记录得分最高的一次。 比赛结束时，结果将排在该组中。 第一名得到10分，然后是9分，8分等等。（如果组中没有足够的玩家，则可能只有1分，甚至没有9分或8分。） </p>

    <p>最初，每位玩家将获得4张入场券。 初次加入后每24小时将刷新为4张票。因此，基本上每天都会发出4张票。 如果您不使用它们，它们将被浪费。 如果您没有门票，但仍然想玩，可以购买4张20颗宝石的门票。 您可以购买尽可能多的商品。</p>

    <h3>活动奖励</h3>
    <p>该活动有丰厚的回报。 当您达到一定的总积分时，您将获得相应的奖励。 典型的一系列奖励如下所示：</p>
    <p>多数情况下，奖励以400或500点结束。 这意味着，在获得400或500点之后，您仍然可以在比赛中尽可能多地玩游戏，但不会获得额外的奖励。 大多数时候，奖励包括1个普通，1个稀有，1个史诗和1个传奇宝箱，以及一些硬币，零件和装备。 有时也有冠军宝箱和/或团队活动门票。</p>

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
