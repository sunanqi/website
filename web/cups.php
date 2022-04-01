<?php
  $title = "Cups Overview - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "杯赛总览 - 登山赛车2 攻略 技巧 排行榜";
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

    <h3>What is Cups Mode?</h3>
    <p>Cups are the core part of this game. You will probably spend most time in this mode, especially if you are new to the game. In this mode, you will compete with 3 randomly chosen opponents on a randomly chosen map. If you win, you will get 180 points, along with a chest. If all of the 3 chest slots are occupied, then you won't earn chest until you free up at least 1 slot. There are multiple types of chests, as described in next section. If you don't win, however, you will not get chest, plus you will only get 60pts, or even lose 60pts or 180pts, for 2nd, 3rd and 4th place. Opponents are the video recordings of real players' previous play, so you are indeed compete with real persons, except that it's not real time. Cups are considered to be relatively easy to win. Most pro players try to win as quickly as possible, as a way of grinding coins and parts.</p>

    <p>If you are new to this game, make sure to check our <a href="cups-tips.php">Cups Tips</a>.</p>

    <h3>Chests from Cups</h3>
    <p>There are many types of chests in this game <a href="chests-and-parts.php">(full list)</a>. In cups mode, you could earn any one of the following 5 chests: common, uncommon, rare, epic or champion chest. Each chest contains coins and parts. In order to open these chest, you can either wait for multiple hours, or use gems for instant open. Below is a brief summary of cups chests. For detailed data, see <a href="chests-and-parts.php">chests and parts page</a>.</p>
    <table>
      <caption>Chests from Cups</caption>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Waiting time</th>
        <th>Gems needed</th>
        <th>Coins</th>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/common.png" alt="common chest"></td>
        <td>common chest</td>
        <td>3 hrs</td>
        <td>12</td>
        <td>2250 ~ 3000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/uncommon.png" alt="uncommon chest"></td>
        <td>uncommon chest</td>
        <td>6 hrs</td>
        <td>24</td>
        <td>4500~6000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/rare.png" alt="rare chest"></td>
        <td>rare chest</td>
        <td>8 hrs</td>
        <td>32</td>
        <td>9000~12000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/epic.png" alt="epic chest"></td>
        <td>epic chest</td>
        <td>12 hrs</td>
        <td>48</td>
        <td>18000~24000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/champion.png" alt="champion chest"></td>
        <td>champion chest</td>
        <td>24 hrs</td>
        <td>96</td>
        <td>45000~60000</td>
      </tr>
    </table>

    <p>The champion chest has the best (per hour or per gem) value, then epic chest, rare chest. The common chest has the least per hour value. </p>

    <p>Although the types of chests you get seem to be random, they actually follow a pattern. You are getting chest in this order: </p>
    <p style="padding: 0 0 0 20px;"><span class="in-line-blue-bold">
      24, 333, 8333, 833, <br>
      6, 33333, 8333, <br>
      12, 33, 833333, 83333, 833, <br>
      6, 33333, 833333, 83333, 833333, 833333, <br>
      12, 3333, 8333, 8333333, 8333, 833, <br>
      6, 3, 833, 833333, 833333, 8333 <br>
    </span></p>

    <p>The numbers above mean the hours you need to wait to open the chest. For example, after you get a 24-hour chest (which is champion chest), you will then get three 3-hours (common) chest in a row, then an 8-hour chest, then three 3-hours chest, etc...</p>

    <p>That means, in one "round", there are 111 chests. Only 1 is champion, 2 are epic. Majority of them are common chests. </p>

    <table>
      <caption>Summary of 1 round of 111 chests</caption>
      <tr>
        <th>Type</th>
        <th>Count</th>
        <th>Gems needed</th>
        <th>Hours needed</th>
      </tr>
      <tr>
        <td>Common</td>
        <td>87</td>
        <td>12</td>
        <td>3</td>
      </tr>
      <tr>
        <td>Uncommon</td>
        <td>3</td>
        <td>24</td>
        <td>6</td>
      </tr>
      <tr>
        <td>Rare</td>
        <td>18</td>
        <td>32</td>
        <td>8</td>
      </tr>
      <tr>
        <td>Epic</td>
        <td>2</td>
        <td>48</td>
        <td>12</td>
      </tr>
      <tr>
        <td>Champion</td>
        <td>1</td>
        <td>96</td>
        <td>24</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>111</td>
        <td>1884</td>
        <td>471</td>
      </tr>
    </table>
    <p>For a round of 111 chests, if you choose not to use gem and only wait to be opened, it takes a total of 471 hours. Or, if you choose to use gems to open all, it'll need 1884 gems.</p>

    <h3>Leaderboard</h3>
    <p>Just like Adventure leaderboards, there are two types of leaderboards in Cups as well: <a href="cups-leaderboard.php">total Cups points leaderboard</a> and <a href="cups-leaderboard-all-maps.php">time attack leaderboard of each track</a>. Click the above links to see current world records.</p>

    <a id='cups_season_bonus'></a>
    <h3>Season Bonus (aka Trophy Road)</h3>
    <p>Every "Season", which is literally every calendar month, players will earn extra rewards for the first 50k Cups points. During the first 50k Cups points, for almost every 1000 points, players will get extra prizes ranging from coins to gems, from tuning parts to customizations. VIP subscribers and premium pass (PP) holders can earn even more prizes. The prizes at 50k points are usually a legendary chest, and a vehicle paint for VIP or PP holder. Beyond 50k Cups points, non-PP holder will not get more prizes, while VIP and PP holder will get a season chest at the end of the month. The level and the content of the chest depends on Cups points. More details at the end of this section. It's highly recommended to get 50k Cups points every month to fully take adventage of season bonus. This is equivalent to winning 8~9 Cups every day.</p>

    <p><span class="in-line-blue-bold">Season bonus (not including the season chest after 50k points)</span></p>
    <table>
      <caption>Season bonus for 2021-04</caption>
      <tr>
        <th>Item</th>
        <th>Non-PP</th>
        <th>PP extra</th>
        <th>Total for PP</th>
        <th>Previous month total</th>
      </tr>
      <tr>
        <td>Coins</td>
        <td>59000</td>
        <td>70000</td>
        <td>129000</td>
        <td>129000</td>
      </tr>
      <tr>
        <td>Gems</td>
        <td>150</td>
        <td>420</td>
        <td>570</td>
        <td>570</td>
      </tr>
      <tr>
        <td>Common part</td>
        <td>130</td>
        <td>0</td>
        <td>130</td>
        <td>130</td>
      </tr>
      <tr>
        <td>Rare part</td>
        <td>78</td>
        <td>19</td>
        <td>97</td>
        <td>97</td>
      </tr>
      <tr>
        <td>Epic part</td>
        <td>31</td>
        <td>0</td>
        <td>31</td>
        <td>31</td>
      </tr>
      <tr>
        <td>Legendary part</td>
        <td>10</td>
        <td>2</td>
        <td>12</td>
        <td>12</td>
      </tr>
      <tr>
        <td>Epic chest</td>
        <td>0</td>
        <td>4</td>
        <td>4</td>
        <td>4</td>
      </tr>
      <tr>
        <td>Legendary chest</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Skin/Customization</td>
        <td>Mr. Bunny Ht, Hd, B, L, Carrot;<br>Mrs. Bunny Ht, Hd, B, L;</td>
        <td>Shoe Hd, B, L, Guitar;<br>Bus tire and paint;</td>
        <td>Mr. Bunny Ht, Hd, B, L, Carrot;<br>Mrs. Bunny Ht, Hd, B, L;<br>
            Shoe Hd, B, L, Guitar;<br>
            Bus tire and paint;</td>
        <td>Leprechaun Ht, Hd, B, L;<br>
            Verne Ht, Hd, B, L;<br>
            Tank paint: Battle Damage</td>
      </tr>
    </table>
    <sup>*</sup>: Ht = Hat; Hd = Head; B = Body; L = Leg.

    <p><span class="in-line-blue-bold">Season chest after 50k Cups points</span></p>
    <p>After reaching 50k Cups points, for every 1000 Cups points, the chest level increases by 1. The relationship between chest level and coins, gems are as below:
      <ul>
        <li>
          Coins: 5000 + level*500
        </li>
        <li>
          Gems: 10 + level*1
        </li>
      </ul>
    Besides coins and gems, the season chest also has parts. The table below shows the amount of parts in the chest description. The actual amount is random, and it's possible to get 3 legendary parts.
    </p>
    <table>
      <caption>Season chest levels and items</caption>
      <tr>
        <th>Season Cups points</th>
        <th>Season chest level</th>
        <th>Coins</th>
        <th>Gems</th>
        <th>Parts (at least)</th>
      </tr>
      <tr>
        <td>50000~58999</td>
        <td>1~9</td>
        <td>5500~9500</td>
        <td>11~19</td>
        <td>Common*18，Rare*2</td>
      </tr>
      <tr>
        <td>59000~68999</td>
        <td>10~19</td>
        <td>10000~14500</td>
        <td>20~29</td>
        <td>Common*29，Rare*2</td>
      </tr>
      <tr>
        <td>69000~78999</td>
        <td>20~29</td>
        <td>15000~19500</td>
        <td>30~39</td>
        <td>Common*45，Rare*6</td>
      </tr>
      <tr>
        <td>79000~248999</td>
        <td>30~199</td>
        <td>20000~104500</td>
        <td>40~209</td>
        <td>Common*68，Rare*9，Epic*6</td>
      </tr>
      <tr>
        <td>250000+</td>
        <td>200</td>
        <td>105000</td>
        <td>210</td>
        <td>Common*68，Rare*9，Epic*6</td>
      </tr>
    </table>
    <p>As we can see from the table above, if you can reach chest level 30 (79000 Cups points), you can get max amount of parts. If you continue to play Cups, although you can get slightly more coins and gems, you won't get more parts. It seems that level 30 or 31 (79k or 80k Cups points) is a sweet point.</p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>杯赛模式</h3>
    <p>杯赛是这个游戏的核心部分。在杯赛模式下，系统会随机从50多个地图中选出一个，然后再选出3个之前玩家的录象，和你匹配。大部分地图都是三场比赛，但也有少数是一场，两场或者四场比赛。每场比赛的第1，2，3，4名分别获得3，2，1，0分。你的目标是获得总分第一。如果你获得第一名，你能获得180杯赛积分，和一个含有金币和配件的宝箱。每个宝箱需要等待3-24个小时后可以打开，但也可以直接花钻石打开。如果钻石足够，通过不断赢得比赛，然后用钻石打开宝箱，可以迅速累积金币和配件。如果你得到第2，3或4名，则没有宝箱，杯赛积分分别是加60，减60和减180。</p>

    <p>如果你是新手玩家，强烈建议先看 <a href="cups-tips.php?lang=zh">杯赛攻略</a>。</p>

    <h3>杯赛宝箱</h3>
    <p>在这个游戏中有很多类型的宝箱 <a href="chests-and-parts.php?lang=zh">(所有宝箱列表)</a>. 在杯赛模式下，你可以获得以下5个箱子中的任何一个：普通，罕见，稀有，史诗或冠军箱子。 每个箱子都包含硬币和零件。 为了打开这些箱子，您可以等待多个小时，也可以使用宝石立即打开。 以下是杯赛宝箱的简要摘要。详细数据在 <a href="chests-and-parts.php?lang=zh">宝箱与零件</a> 部分.</p>
    <table>
      <caption>杯赛宝箱</caption>
      <tr>
        <th>图片</th>
        <th>名字</th>
        <th>等待时间</th>
        <th>所需宝石数</th>
        <th>内含金币</th>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/common.png" alt="common chest"></td>
        <td>普通common chest</td>
        <td>3 hrs</td>
        <td>12</td>
        <td>2250 ~ 3000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/uncommon.png" alt="uncommon chest"></td>
        <td>罕见uncommon chest</td>
        <td>6 hrs</td>
        <td>24</td>
        <td>4500~6000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/rare.png" alt="rare chest"></td>
        <td>稀有rare chest</td>
        <td>8 hrs</td>
        <td>32</td>
        <td>9000~12000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/epic.png" alt="epic chest"></td>
        <td>史诗epic chest</td>
        <td>12 hrs</td>
        <td>48</td>
        <td>18000~24000</td>
      </tr>
      <tr>
        <td><img class="in_table" src="../img/chests/champion.png" alt="champion chest"></td>
        <td>冠军champion chest</td>
        <td>24 hrs</td>
        <td>96</td>
        <td>45000~60000</td>
      </tr>
    </table>

    <p>冠军宝箱（每小时或每颗宝石）的价值最高，然后是史诗宝箱和稀有宝箱。 普通箱子每小时的价值最少。 </p>

    <p>尽管您得到的箱子类型似乎是随机的，但实际上它们遵循一种模式。 您按此顺序得到宝箱: </p>
    <p style="padding: 0 0 0 20px;"><span class="in-line-blue-bold">
      24, 333, 8333, 833, <br>
      6, 33333, 8333, <br>
      12, 33, 833333, 83333, 833, <br>
      6, 33333, 833333, 83333, 833333, 833333, <br>
      12, 3333, 8333, 8333333, 8333, 833, <br>
      6, 3, 833, 833333, 833333, 8333 <br>
    </span></p>

    <p>上面的数字表示您需要等待打开宝箱的时间。 例如，在获得24小时的宝箱（即冠军宝箱）之后，您将连续获得3个3小时（普通）宝箱，然后是8小时的宝箱，然后是3个3小时的宝箱，依此类推。 </p>

    <p>就是说，在一个“回合”中，有111个箱子。 冠军只有1名，史诗级只有2名。 他们大多数是普通的箱子。</p>

    <table>
      <caption>一轮111个杯赛宝箱总结</caption>
      <tr>
        <th>类型</th>
        <th>数量</th>
        <th>所需钻石数</th>
        <th>所需小时数</th>
      </tr>
      <tr>
        <td>普通</td>
        <td>87</td>
        <td>12</td>
        <td>3</td>
      </tr>
      <tr>
        <td>罕见</td>
        <td>3</td>
        <td>24</td>
        <td>6</td>
      </tr>
      <tr>
        <td>稀有</td>
        <td>18</td>
        <td>32</td>
        <td>8</td>
      </tr>
      <tr>
        <td>史诗</td>
        <td>2</td>
        <td>48</td>
        <td>12</td>
      </tr>
      <tr>
        <td>冠军</td>
        <td>1</td>
        <td>96</td>
        <td>24</td>
      </tr>
      <tr>
        <td>总计</td>
        <td>111</td>
        <td>1884</td>
        <td>471</td>
      </tr>
    </table>
    <p>对于111个箱子的回合，如果您选择不使用宝石而仅等待打开，则总共需要471小时。 或者，如果您选择使用宝石来打开所有宝石，则将需要1884颗宝石。</p>

    <h3>排行榜</h3>
    <p>和冒险排行榜类似，杯赛的排行榜也分两种：总积分排行榜和单图竞速排行榜。点这里看<a href="cups-leaderboard.php?lang=zh">杯赛总积分排行榜</a> 和 <a href="cups-leaderboard-all-maps.php?lang=zh">单图竞速排行榜</a>。</p>

    <a id='cups_season_bonus_zh'></a>
    <h3>赛季奖励</h3>
    <p>每个赛季（也就是每个自然月），杯赛积分每到达一个1000的整数倍后，通常就有额外奖励。奖励包括金币，钻石，零件，宝箱，皮肤。高级通行证或VIP持有者还能得到额外更多的奖励。这样的单项奖励可以一直领到杯赛分数达到5万分。通常5万分的奖励是一个传奇宝箱和一个皮肤。5万分之后，没有高级通行证的玩家就没有额外奖励了；有高级通行证的玩家，到赛季结束后，还能拿到一个额外的赛季宝箱，宝箱等级和里面的物品根据赛季分数而定，具体见本章节之后的部分。建议玩家每个月都争取跑到5万杯赛分，相当于每天赢8-9场杯赛。</p>
    <p><span class="in-line-blue-bold">赛季奖励的具体物品（不包括超过5万分的赛季箱）</span></p>
    <table>
      <caption>2021年4月赛季奖励</caption>
      <tr>
        <th>物品</th>
        <th>非通行证玩家</th>
        <th>通行证额外奖励</th>
        <th>通行证玩家总奖励</th>
        <th>上月总奖励</th>
      </tr>
      <tr>
        <td>金币</td>
        <td>59000</td>
        <td>70000</td>
        <td>129000</td>
        <td>129000</td>
      </tr>
      <tr>
        <td>钻石</td>
        <td>150</td>
        <td>420</td>
        <td>570</td>
        <td>570</td>
      </tr>
      <tr>
        <td>普通零件</td>
        <td>130</td>
        <td>0</td>
        <td>130</td>
        <td>130</td>
      </tr>
      <tr>
        <td>稀有零件</td>
        <td>78</td>
        <td>19</td>
        <td>97</td>
        <td>97</td>
      </tr>
      <tr>
        <td>史诗零件</td>
        <td>31</td>
        <td>0</td>
        <td>31</td>
        <td>31</td>
      </tr>
      <tr>
        <td>传奇零件</td>
        <td>10</td>
        <td>2</td>
        <td>12</td>
        <td>12</td>
      </tr>
      <tr>
        <td>史诗宝箱</td>
        <td>0</td>
        <td>4</td>
        <td>4</td>
        <td>4</td>
      </tr>
      <tr>
        <td>传奇宝箱</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
      </tr>
      <tr>
        <td>皮肤<sup>*</sup></td>
        <td>Mr. Bunny Ht, Hd, B, L, Carrot;<br>Mrs. Bunny Ht, Hd, B, L;</td>
        <td>Shoe Hd, B, L, Guitar;<br>Bus tire and paint;</td>
        <td>Mr. Bunny Ht, Hd, B, L, Carrot;<br>Mrs. Bunny Ht, Hd, B, L;<br>
            Shoe Hd, B, L, Guitar;<br>
            Bus tire and paint;</td>
        <td>Leprechaun Ht, Hd, B, L;<br>
            Verne Ht, Hd, B, L;<br>
            Tank paint: Battle Damage</td>
      </tr>
    </table>
    <sup>*</sup>: Ht = Hat; Hd = Head; B = Body; L = Leg.

    <p><span class="in-line-blue-bold">赛季满5万分后的赛季宝箱</span></p>
    <p>满5万分后，赛季宝箱为1级。之后每增加1000杯赛分，宝箱等级增加1。宝箱内的金币和钻石和级数的关系如下：
      <ul>
        <li>
          金币：5000 + 级数*500
        </li>
        <li>
          钻石：10 + 级数*1
        </li>
      </ul>
    除了金币和钻石之外，宝箱内还有零件。以下表格显示了宝箱介绍里的零件数量。实际数量是随机的，并且有可能爆出3个传奇零件。
    </p>
    <table>
      <caption>赛季宝箱物品</caption>
      <tr>
        <th>赛季分</th>
        <th>宝箱等级</th>
        <th>金币数</th>
        <th>钻石数量</th>
        <th>零件</th>
      </tr>
      <tr>
        <td>50000~58999</td>
        <td>1~9</td>
        <td>5500~9500</td>
        <td>11~19</td>
        <td>普通*18，稀有*2</td>
      </tr>
      <tr>
        <td>59000~68999</td>
        <td>10~19</td>
        <td>10000~14500</td>
        <td>20~29</td>
        <td>普通*29，稀有*2</td>
      </tr>
      <tr>
        <td>69000~78999</td>
        <td>20~29</td>
        <td>15000~19500</td>
        <td>30~39</td>
        <td>普通*45，稀有*6</td>
      </tr>
      <tr>
        <td>79000~248999</td>
        <td>30~199</td>
        <td>20000~104500</td>
        <td>40~209</td>
        <td>普通*68，稀有*9，史诗*6</td>
      </tr>
      <tr>
        <td>250000+</td>
        <td>200</td>
        <td>105000</td>
        <td>210</td>
        <td>普通*68，稀有*9，史诗*6</td>
      </tr>
    </table>
    <p>从上面的表中不难看出，如果能跑到30级赛季宝箱(79000杯赛分)的话，可以多拿不少配件。而再继续跑的话，除了金币和钻石少量增加外，配件不会更多。时间允许的话，似乎跑到30级或31级(79000~80000杯赛分)最划算。</p>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
