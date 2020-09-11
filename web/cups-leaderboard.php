<?php
  require "header.php";
?>
<style>
  .cups {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>

    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Leaderboard types</h3>
    <p>There are mainly two types of leaderboards, corresponding to two ways of playing cups.</p>

    <h3>Total points leaderboard</h3>
    <p>
      The first one is total points, which is the sum of all points you have won from Cups. For example, if your points were 50,000 yesterday, and won 10 Cups today, each of which gets you 180 points, then you will have 51,800 points now. This total points, comes with 2 variations: grand total which counts all points since you start this game, and seasonal total which counts the poinst you accrued this calendar month. Currently, on the grand total leaderboard, the top player PandalieYTB has a whopping 43 million points. Before that, Mubeen (now at 2nd) has long been at the top place. <br>

      <figure>
        <img src="../img/cups/cups-leaderboard-total-20200910.jpg" alt="cups grand total leaderboard">
        <figcaption>Cups total points leaderboard (as of 2020-09-10)</figcaption>
      </figure>
    </p>

    <h3>Racing leaderboard</h3>
    <p>The second type of leaderboard is about racing - the finish time of each track. For players that are enthusiastic in racing, they handpick the most suitable vehicle for each specific track, equipped with proper parts, and try to finish the track as fast as possible. Although there are a total of 147 tracks, it is extremely difficult to get the first place, or even top 3, in any of these tracks. After all, this game has been there for almost 4 years and tens or even hundreds millions of players have been challenging the leaderboard. Below is the leaderboard of "Landing Drive" track.<br>
      <figure>
        <img src="../img/cups/cups-boggy-road-muddy-road-20200910.jpg" alt="Boggy Road - Muddy Road">
        <figcaption>Big Air Cup - Landing Drive leaderboard (as of 2020-09-10)</figcaption>
      </figure>
    </p>

    <h3>Racing leaderboard, vehicle specific</h3>
    <p>There are also vehicle specific racing leaderboards. Although they are less popular, some players that are in favor of certain vehicles may like those leaderboard.</p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>

    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>排行榜的两种排名方式</h3>
    <p>排行榜主要有两种，分别对应两种玩法。</p>

    <h3>总积分榜</h3>
    <p>
      第一个是总积分，这是您从杯赛中赢得的所有积分的总和。 例如，如果您昨天的积分是50,000，今天赢得了10杯，每场都可以为您赢得180积分，那么现在您将获得51,800积分。 该总积分有2种变化：总分，它计算自开始游戏以来的所有积分；以及赛季分，其计算您在该日历月累积的收入。 目前，在总排行榜上，顶级选手PandalieYTB的得分高达4300万。 在此之前，目前排名第二的Mubeen长期位居榜首。在中国区，最高分是580万分左右。<br>

      <figure>
        <img src="../img/cups/cups-leaderboard-total-20200910.jpg" alt="cups grand total leaderboard">
        <img src="../img/cups/cups-leaderboard-total-china-20200910.jpg" alt="cups grand total leaderboard">
        <figcaption>杯赛总积分榜 (截至2020-09-10)</figcaption>
      </figure>
    </p>

    <h3>竞速排行榜</h3>
    <p>排行榜的第二种类型是赛车-每个赛道的完成时间。 对于狂热的赛车手，他们会为每个特定的赛道挑选最合适的车辆，并配备适当的零件，并尝试尽快完成赛道。 尽管总共有147条曲目，但要在所有这些曲目中获得第一名，甚至是前三名都非常困难。 毕竟，这款游戏已经存在了将近4年，成千上万的玩家一直在挑战排行榜。 以下是“陆上驾驶”赛道的页首横幅。<br>
      <figure>
        <img src="../img/cups/cups-boggy-road-muddy-road-20200910.jpg" alt="Big Air Cup - Landing Drive leaderboard">
        <figcaption>Big Air Cup - Landing Drive leaderboard (as of 2020-09-10)</figcaption>
      </figure>
    </p>

    <h3>竞速排行榜 - 某特定车辆</h3>
    <p>也有特定于赛车的排行榜。 尽管它们不太受欢迎，但某些支持某些车辆的玩家可能会喜欢那些排行榜。</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
