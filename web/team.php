<?php
  $title = "Teams Overview - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "团队总览 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
  $json = file_get_contents('../data/chests.json');
  $chests = json_decode($json,true);
  $json = file_get_contents('../data/others.json');
  $others = json_decode($json,true);
?>
<style>
  .team {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Team event overview</h3>
    <p>The game introduced the Teams module in version 1.25 which was released in April 2019. Players can freely choose a team and join, or open a team. A team can have at most 50 players. The system will randomly choose two close teams to compete.</p>

    <a id="team_chest"></a>
    <h3>Team (distance) chest</h3>
    <p>Team chest aka distance chest is based on total distances driven from all team members. Every member can open the chest once a week, exactly at 3AM Monday EEST (or 1AM Monday German time, 7PM Sunday NY time). The chest contains coins, tuning parts and gems. The amount is based on chest level. Of course, the more the team members drive, the high the chest level. Distances from all modules count towards the team chest, no matter adventure, cups, public events, etc., as long as the player is online. Offline distances used to be counted but not any more. The table below shows the relationship between chest level, distance required and rewards in the chest.</p>

    <table>
      <caption>Teams distance chest</caption>
      <tr>
        <th>Level</th>
        <th>Km required</th>
        <th>Coins</th>
        <th>Gems</th>
        <th>Common</th>
        <th>Rare</th>
        <th>Epic</th>
        <th>Legendary</th>
      </tr>

    <?php
    for ($i=1; $i<=45; $i++) {
      $km = (2*35+($i-1)*30)*$i/2-35;
      $coins = 20000+$i*4000;
      $gems = ($i>=23)?50:(5+$i*2);
      $common = ($i>=14)?113:array(10,10,16,16,29,45,45,45,45,68,68,68,68)[$i-1];
      $rare = ($i>=14)?0:array(1,1,1,1,2,6,6,6,6,9,9,9,9)[$i-1];
      $epic = ($i>=14)?12:array(0,0,0,0,0,0,0,0,0,6,6,6,6)[$i-1];
      $legendary = ($i>=18)?3:0;

      echo "<tr><td>".$i."</td>";
      echo "<td>".$km."</td>";
      echo "<td>".$coins."</td>";
      echo "<td>".$gems."</td>";
      echo "<td>".$common."</td>";
      echo "<td>".$rare."</td>";
      echo "<td>".$epic."</td>";
      echo "<td>".$legendary."</td></tr>";
    }
    ?>
    </table>
    <p>
    Level 46 and up requires more km but the amount of prizes are capped at level 45.</p>

    <a id="team_match_zh"></a>
    <h3>Team match</h3>
    <p>Team match is the core part of Teams module. Once you join a team, you can join the match. Every week the game will assign some maps and some vehicles that can be used in the match. Most of the time there are 4 maps, although sometimes 5 maps. The goals of each map differ - can be anything from pure time attack, time attack with tricks, fly as far as you can, coin stunt, etc. No matter what goal, the result will be converted to a score between 0 to 10k. After finishing 4 or 5 maps, total points will be calculated. </p>

    <p>Every match is 2-days long. During these 2 days, the highest score you get will be your final score. You don't have unlimited number of tries. Instead, you will get 2 tries every 4 hours. If you don't use these 2 tries, they will be wasted. If you are not happy with the score, you can re-try by using a purple tickets. Purple tickest are very precious - the only two ways to get them are team match and public event prizes. Think again when you use a purple ticket. The best way to use purple tickets is probably when you did well in the first 3 or 4 maps, and failed in the last track. Try again by spending a purple ticket.</p>

    <p>After match is ended, scores from all players will be ranked. The top player will get 300 pts, then 280, 262, 244, etc. Scores from the same team will be added up to get the team score. Whichever team has higher team score will win. The winning team will get some trophies while losing team will lose some. Team trophies are used to rank teams. Prizes are based on team score - even if the team loses, as long as the team score is not too low, participants still have a little bit of prizes. Prizes are maxed when team score is 3000. There are two types of prizes. In the past Fingersoft has changed between them for multiple times.</p>
    <a id="team_match_prize"></a>
    <table>
      <caption>Team match prizes</caption>
      <tr>
        <th>Team score</th>
        <th>Prize type I</th>
        <th>Prize type II</th>
      </tr>
      <tr>
        <td>300</td>
        <td><img src="<?='../'.$chests['common']['img'];?>" class="in_table_small"></td>
        <td>1 <img src="<?='../'.$others['blue_ticket']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>600</td>
        <td>10,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
        <td>10,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>1000</td>
        <td>500 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
        <td>500 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>1400</td>
        <td>1 <img src="<?='../'.$others['blue_ticket']['img'];?>" class="in_table_very_small"></td>
        <td>1 <img src="<?='../'.$others['blue_ticket']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>1800</td>
        <td><img src="<?='../'.$chests['uncommon']['img'];?>" class="in_table_small"></td>
        <td>20,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>2200</td>
        <td>20,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
        <td>a skin</td>
      </tr>
      <tr>
        <td>2600</td>
        <td>30 <img src="<?='../'.$others['gem']['img'];?>" class="in_table_very_small"></td>
        <td>50 <img src="<?='../'.$others['gem']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>3000</td>
        <td>1000 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
        <td>1000 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
      </tr>
    </table>

    <h3>Team match strategies</h3>
    <p>Please see <a href="team-tips.php">Team match stratigies</a> section.</p>

    <h3>Teams rankings</h3>
    <p>Please see <a href="team-leaderboard.php">Teams ranking </a> section.</p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>团队总览</h3>
    <p>从2019年4月推出的v1.25版本开始，游戏里增加了团队功能。玩家们可以自行组队，每个队最多50人。系统会随机匹配实力相对接近的两个队伍进行PK。杯赛达到 金I 即可加入团队。</p>

    <a id="team_chest_zh"></a>
    <h3>团队(距离)宝箱</h3>
    <p>团队宝箱又称距离箱，每位队员每周可以领一次。宝箱内有金币和配件，数量根据级别而定，而宝箱级别根据所有队员跑的总距离而定。任意一位团队成员都能为团队宝箱做贡献。不管是冒险，杯赛，还是队赛，每周活动，甚至是在杯赛里练习，都能算进总距离。以下是每个级别对距离的要求，以及含有的金币和配件数量。</p>

    <table>
      <caption>团队距离宝箱</caption>
      <tr>
        <th>等级</th>
        <th>公里数</th>
        <th>金币</th>
        <th>钻石</th>
        <th>普通</th>
        <th>稀有</th>
        <th>史诗</th>
        <th>传奇</th>
      </tr>

    <?php
    for ($i=1; $i<=45; $i++) {
      $km = (2*35+($i-1)*30)*$i/2-35;
      $coins = 20000+$i*4000;
      $gems = ($i>=23)?50:(5+$i*2);
      $common = ($i>=14)?113:array(10,10,16,16,29,45,45,45,45,68,68,68,68)[$i-1];
      $rare = ($i>=14)?0:array(1,1,1,1,2,6,6,6,6,9,9,9,9)[$i-1];
      $epic = ($i>=14)?12:array(0,0,0,0,0,0,0,0,0,6,6,6,6)[$i-1];
      $legendary = ($i>=18)?3:0;

      echo "<tr><td>".$i."</td>";
      echo "<td>".$km."</td>";
      echo "<td>".$coins."</td>";
      echo "<td>".$gems."</td>";
      echo "<td>".$common."</td>";
      echo "<td>".$rare."</td>";
      echo "<td>".$epic."</td>";
      echo "<td>".$legendary."</td></tr>";
    }
    ?>
    </table>
    46级或以上的队箱需要更多的公里数，但金币和配件都和45级一样，封顶就是这些。

    <a id="team_match_zh"></a>
    <h3>队赛</h3>
    <p>队赛是团队模式的核心部分。当你加入一支团队后，就能参加队赛。游戏方每周会指定比赛用图，比赛用车，和比赛模式。通常是4个图（偶尔是5个图），指定5~6辆车。你可以用这5-6辆车中的任何一辆跑任何一个图。通常每辆车只能用一次。比赛形式一般是竞速或者探险的衍生版，比如在竞速的同时，翻转赛车可以获得时间奖励，或者在没有燃油补给的情况下，比谁跑得远。不管是什么形式的比赛，完成后会折算成一个0 ~ 1万的分数。跑完所有4个图后，总分就是你的成绩。</p>

    <p>每场比赛持续两天，在这期间你获得的最高分，就是结算后的分数。在这期间，你不能无限制的试跑。每4个小时，你有两次试跑机会。如果用完了这些免费试跑机会你对分数还是不满意，可以用“蓝票”。蓝票非常宝贵，唯二的获得途径是队赛奖励和每周活动奖励，且数量很少。除了可以用蓝票再一次参加比赛，你也可以在某个图后，用蓝票再跑一次。比如在一场5个图的比赛中，前4图你都发挥出色，然而图5暴毙，这时候你可以用蓝票再跑一次图5。这样用蓝票的方式可能是最划算的。</p>

    <p>比赛结束后，双方所有人的分数会进行排序，排名第一的队员获得300分，第二获得280分，之后是262，244，等。同一队的队员分数加总，就是这个队的分数，分数高的队伍获胜。获胜的队伍会得到奖杯奖励，而失败的一方会被扣除一些奖杯。不论是获胜方还是失利方，队员都有机会获得奖励。当然获胜方得到的奖励多一些，而且分数越高，奖励越多。队分达到3000后，可以拿到最多的奖励。奖励会是以下种类的一种，Fingersoft在这两种奖励之间切换过多次。</p>
    <a id="team_match_prize_zh"></a>
    <table>
      <caption>队赛奖励</caption>
      <tr>
        <th>队分</th>
        <th>奖励种类1</th>
        <th>奖励种类2</th>
      </tr>
      <tr>
        <td>300</td>
        <td><img src="<?='../'.$chests['common']['img'];?>" class="in_table_small"></td>
        <td>1 <img src="<?='../'.$others['blue_ticket']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>600</td>
        <td>10,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
        <td>10,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>1000</td>
        <td>500 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
        <td>500 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>1400</td>
        <td>1 <img src="<?='../'.$others['blue_ticket']['img'];?>" class="in_table_very_small"></td>
        <td>1 <img src="<?='../'.$others['blue_ticket']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>1800</td>
        <td><img src="<?='../'.$chests['uncommon']['img'];?>" class="in_table_small"></td>
        <td>20,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>2200</td>
        <td>20,000 <img src="<?='../'.$others['coin']['img'];?>" class="in_table_very_small"></td>
        <td>一个皮肤</td>
      </tr>
      <tr>
        <td>2600</td>
        <td>30 <img src="<?='../'.$others['gem']['img'];?>" class="in_table_very_small"></td>
        <td>50 <img src="<?='../'.$others['gem']['img'];?>" class="in_table_very_small"></td>
      </tr>
      <tr>
        <td>3000</td>
        <td>1000 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
        <td>1000 <img src="<?='../'.$others['scrap']['img'];?>" class="in_table_very_small"></td>
      </tr>
    </table>

    <h3>队赛攻略</h3>
    <p>详见 <a href="team-tips.php?lang=zh">队赛攻略</a> 板块.</p>

    <h3>队伍排行榜</h3>
    <p>详见 <a href="team-leaderboard.php?lang=zh">队赛排行榜</a> 板块.</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
