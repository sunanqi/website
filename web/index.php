<?php
  $title = "Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "登山赛车2 攻略 技巧 排行榜";
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
    <p>Hill Climb Racing 2 (HCR2) is a 2D, physics-based mobile racing game developed by <a href="https://goo.gl/maps/dDzw8BYFUABABgZw8">Fingersoft, a company based in Oulu, Finland</a> (~600 km north of Helsinki). The player controls a vehicle by two pedals: an accelerator pedal that can move the vehicle forward, and a brake pedal that can slow down or back the vehicle. Physics engine is used to simulate objects in the game to mimic the real world.</p>

    <p>Although the game's UI and style is somewhat cartoonish, there’s a surprising amount of ways to play the game due to its wide selection of vehicles (<a href="/web/upgrade-cost.php#upgrade_cost_vehicles">list of all vehicles</a>) and tuning parts (<a href="/web/upgrade-cost.php#upgrade_cost_parts">list of all tuning parts</a>). You will start with a basic vehicle "Hill Climber" with no customization. When you play on and accrue coins and parts, you can upgrade your vehicles and tuning parts, and buy new vehicles. There are also multiple modules in the game, featuring different goals.
      <ul>
        <li><span class="in-line-blue-bold">Adventure</span>. In the Adventure mode, your goal is to drive as far as you can. You do not have opponents, so you could drive slowly and leisurely, or to try different vehicles and tuning parts, or even to enjoy yourself with some weird neck flips or air time. Of course, you can play adventure only for grinding coins. While you drive on, the fuel can along the road will get sparser and sparser, so if you want to break record, you need to drive fast. The adventure module is a good place to earn coins if you do not have enough gems (If you do have abundant gems, playing cups and open chests with gems is a better choice). Every 12 hours you will receive tasks and double coins opportunities. Take adventage of these to earn coins even faster. Please see <a href="adventure.php">Adventure overview</a> and <a href="adventure-tips.php">Tip & Strategies</a>.</li>

        <li><span class="in-line-blue-bold">Cups</span>. In the Cups mode, a random map will be chosen from all 50+ maps, and you will compete with 3 other opponents asynchronously. The opponents are real human beings, except that you are not racing at the same time. Instead, what you see are their previous recordings. Most maps are consisted of 3 tracks, but some have 1, 2 or 4. After each track, 4 players will get 3, 2, 1 and 0 point based on finish order. Your goal is to get 1st place in total scores from all tracks. After getting 1st place, you will be awarded with a chest, containing coins, tuning parts and sometime a customization (skin). For every chest you'll need to wait for 3 to 24 hours before opening. However, you can also open it instantly with gems. So if you have enough gems, you can rapidly earn coins and tuning parts by winning cups and opening chests repeatedly. Please see <a href="cups.php">Cups overview</a> and <a href="cups-tips.php">Tips & Strategies</a>.</li>

        <li><span class="in-line-blue-bold">Team</span>. Once you reach Gold I in the Cups mode (which is pretty easy), you can join a team. Then you will earn <a href="/web/team.php#team_chest">weekly team chests</a>, and <a href="/web/team.php#team_match_prize">match prizes</a> after every 2-day-long matches (no matter win or loss). It's highly recommended to join a team. Please see <a href="team.php">Team Overview</a> and <a href="team-tips.php">Tips & Strategies</a>.</li>

        <li><span class="in-line-blue-bold">Public event</span> (aka Weekly event). Every week there is an event featuring different goals. They can be time attack, jump as far as you can, flip as much as you can, and many more. You will get points based on performance. Once you get enough total points, you can get various rewards, from coins to chests, from tuning parts to even purple ticket (used in team matches). Please see <a href="event.php">Public event overview</a> and <a href="event-past-events.php">Each event details</a>.</li>
        <li><span class="in-line-blue-bold">Friend challenge, daily & weekly race</span>. In the challenge mode, you can play a challenge that was sent by your friend, using exactly the same vehicle and tuning parts, playing the exactly same track (adventure or cup). In the daily and weekly race mode, the system will assign a Cups track every day or week, and every one can play with any vehicle from their garage. You will see results and rankings from your friends. This mode is enjoyed by a lot of Passionate Racers. However, most players don't play much in challenge and daily/weekly races since there are no rewards.</li>
      </ul>
    </p>


    <h3>New updates</h3>
    <ul>
      <?php
      $json = file_get_contents('../data/update-history.json');
      $json_data = json_decode($json,true);

      foreach ($json_data as $row) {
        echo "<li>V".$row['Version']."(".$row['Date']."): ";
        echo $row["What's New"]."</li>";
      }
      ?>
    </ul>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>快速导航</h3>
    <p><a href="team-tips.php?lang=zh">近期队赛</a></p>
    <p><a href="event-past-events.php?lang=zh">近期每周活动</a></p>

    <h3>关于登山赛车2</h3>
    <p>登山赛车2是一款休闲物理赛车手游，由芬兰公司Fingersoft开发，分“国际版”和“国内版”两个版本。国际版和国内版几乎全部一样，除了：1) 国际版可以存档，国内版不行（目前可以找客服转移存档，但较麻烦）；2) 国际版可以订阅VIP，国内版仅在苹果上可以订阅，安卓上不行；3) 国际版可以加好友，和好友比赛，国服版无这个功能。另外，两个版本之间数据不共享，也就是说，所有排行榜都是独立的。算上全球所有玩家，绝大多数玩家都玩国际版。</p>
    <p>总体上来说，国际版成本更低，玩法更多样，还能和老外车队对战。如果你正打算玩这个游戏，建议玩国际版（最新版安装包在本页下面的“<a href="#hcr2_latest_version">最新更新</a>”）。加我们的<span class="in-line-blue-bold">登2国际版QQ群：255579428</span>，群管理员会帮助你快速上手！无论是升级车库，还是队赛攻略；无论是网络连接问题，还是如何最有效氪金，都有热心群友会帮助你！你也可以看我们的<a href="/web/grinding-coins.php?lang=zh">新手攻略+赚金币</a>，<a href="/web/upgrade-cost.php?lang=zh">升级成本</a>，<a href="/web/chests-and-parts.php?lang=zh">宝箱与零件</a>，<a href="/web/spend-money.php?lang=zh">氪金攻略</a>等。</p>
    <p>如果你还是打算玩国内版，我们也有<span class="in-line-blue-bold">国服版QQ群：634441170</span>。请加入！</p>

    <h3>如何愉快的玩耍 (作为新手)</h3>
    <p>总体来说这个游戏的玩法是非常多元的，不是相对单一的通关游戏。游戏分好几个模块：冒险、杯赛、队赛(团队)、每周活动和好友挑战。你可以选择最感兴趣的玩法。
    <ul>
      <li><span class="in-line-blue-bold">升级车库</span>。不管哪种模式，要想跑出好的分数，车子等级就不能太低。看我们的<a href="/web/grinding-coins.php?lang=zh">新手攻略+赚金币</a>页面，最高效的升级车库！
      <li><span class="in-line-blue-bold">冒险</span>。在冒险模式下，你的目标是尽可能跑得远。游戏中没有对手，所以你大可以慢慢跑，尝试不同的车辆，也可以做各种特技动作，当然，也可以纯粹为了赚取沿途的金币。随着游戏的进行，路上的油桶会越来越稀少，所以如果你真想突破自己的记录，就得跑的快一些。如果你钻石数量不够，你可以在冒险模式下赚取金币（如果钻石数量足够，杯赛模式是赚取金币更有效地方式）。每隔数个小时，你会收到“任务”和“双倍金币活动”，利用好这些可以快速积累金币。详见<a href="adventure.php?lang=zh">冒险总览</a>和<a href="adventure-tips.php?lang=zh">冒险攻略专区</a>。</li>
      <li><span class="in-line-blue-bold">杯赛</span>。在杯赛模式下，系统会随机从50多个地图中选出一个，然后再选出3个之前玩家的录象，和你匹配。大部分地图都是三场比赛，但也有少数是一场，两场或者四场比赛。每场比赛的第1，2，3，4名分别获得3，2，1，0分。你的目标是获得总分第一。获得第一后，你就能获得一个含有金币和配件的宝箱。每个宝箱需要等待3-24个小时后可以打开，但也可以直接花钻石打开。如果钻石足够，通过不断赢得比赛，然后用钻石打开宝箱，可以迅速累积金币和配件。详见<a href="cups.php?lang=zh">杯赛总览</a>和<a href="cups-tips.php?lang=zh">杯赛攻略专区</a>。</li>
      <li><span class="in-line-blue-bold">队赛(团队)</span>。在队赛模式下，你可以加入一支队伍，然后和另一支队伍对战，获得对战奖励。另外，每周还能额外获得团队宝箱。加入团队可以额外获得大量的金币和配件，玩家应该尽可能加入一支团队。详见<a href="team.php?lang=zh">团队总览</a>和<a href="team-tips.php?lang=zh">队赛攻略专区</a>。</li>
      <li><span class="in-line-blue-bold">每周活动</span>。每个星期都会有一个主题的活动，可能是竞速，可能是跳远，可能是技巧，等等。同一时间段进入的玩家会被分到一组，进行“实时PK”。一组大约是100人左右，数量不定。第一名拿10分，之后若干个9分，再是若干个8分，以此类推。拿满一定的分数后，就会有一定的奖励。奖励通常是宝箱，皮肤，配件，金币等等。详见<a href="event.php?lang=zh">每周活动总览</a>和<a href="event-past-events.php?lang=zh">活动高分截图专区</a>。</li>
      <li><span class="in-line-blue-bold">好友挑战</span>。在活动模块下，你可以看到好友发送的挑战，也就是用和他一模一样的车和配件，跑同样的地图，比赛谁跑的更快(如果是杯赛图)或跑的更远(如果是冒险图)。另外，每天和每周游戏方也会指定一个杯赛地图，各位玩家可以各自用自己车库的车进行竞速。这个模块吸引了不少竞速爱好者，但由于没有任何奖励，大部分玩家可能都不玩这一块。</li>
    </ul>
    </p>

    <a id="hcr2_latest_version"></a>
    <h3>最新更新</h3>
    <ul>
      <?php
      $json = file_get_contents('../data/update-history.json');
      $json_data = json_decode($json,true);

      foreach ($json_data as $row) {
        echo "<li>V".$row['Version']."(".$row['Date']."): ";
        echo $row["新特性"]."</li>";
      }
      ?>
    </ul>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
