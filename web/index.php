<?php
  require "header.php";
?>
<style>
  #homepage {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Quick links</h3>
    <p><a href="team-tips.php">Recent team event</a></p>
    <p><a href="event-past-events.php">Recent public events</a></p>

    <h3>About Hill Climb Racing 2</h3>
    <p>Hill Climb Racing 2 is the sequel to an addictive and entertaining physics based driving game. And it’s free! </p>

    <h3>How to play (as a newbie)</h3>
    <p>tips for newbie...</p>

    <h3>New updates</h3>
    <p>Currently the newest version is 1.38.</p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>快速导航</h3>
    <p><a href="team-tips.php?lang=zh">近期队赛</a></p>
    <p><a href="event-past-events.php?lang=zh">近期每周活动</a></p>

    <h3>关于登山赛车2</h3>
    <p>登山赛车2是一款休闲物理赛车手游，由芬兰公司Fingersoft开发，分“国际版”和“国内版”两个版本。国际版和国内版几乎全部一样，除了两点：1) 国际版可以存档，国内版不行；2) 国际版可以订阅VIP，国内版仅在苹果上可以订阅，安卓上不行。另外，两个版本之间数据不共享，也就是说，所有排行榜都是独立的。算上全球所有玩家，绝大多数玩家都玩国际版。</p>
    <p>总体上来说，国际版成本更低，玩法更多样，还能和老外车队对战。如果你正打算玩这个游戏，建议玩国际版。加我们的QQ群：255579428。（微信：rousong_2013；Discord: PR-Rou#3033）。群管理员会帮助你快速上手！</p>
    <p>如果你还是打算玩国内版，我们也有国服版的QQ群：634441170。请加入！</p>

    <h3>如何愉快的玩耍 (作为新手)</h3>
    <p>tips for newbie...</p>

    <h3>最新更新</h3>
    <p>目前最新版本是1.38。</p>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
