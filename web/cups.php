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

    <h3>What is Cups Mode?</h3>
    <p>Cups are the core part of this game. You will probably spend most time in this mode, especially if you are new to the game. In this mode, you will compete with 3 randomly chosen opponents on a randomly chosen map. If you win, you will get 180 points, along with a chest. (Note: if all of the 3 chest slots are occupied, then you won't earn chest until you free up at least 1 slot.) There are multiple types of chests, as described in next section. If you don't win, however, you will not get chest, plus you will only get 60pts, or even lose 60pts or 180pts, for 2nd, 3rd and 4th place. Opponents are the records of true plays from other players, so you are indeed compete with real players, except that it's not real time. Cups are considered to be relatively easy to win. Most pro players try to win as quickly as possible, as a way of grinding coins and parts.</p>

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
    <p style="padding: 0 0 0 20px;">
      24, 333, 8333, 833, <br>
      6, 33333, 8333, <br>
      12, 33, 833333, 83333, 833, <br>
      6, 33333, 833333, 83333, 833333, 833333, <br>
      12, 3333, 8333, 8333333, 8333, 833, <br>
      6, 3, 833, 833333, 833333, 8333 <br>
    </p>

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
    <p>please see <a href="cups-leaderboard.php">cups leaderboard section</a>.</p>

    <h3>Season bonus</h3>
    <p>...</p>
  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>杯赛模式</h3>
    <p>杯赛是这场比赛的核心部分。 您可能会在这种模式下花费大部分时间，特别是如果您是游戏新手。 在这种模式下，您将在随机选择的地图上与3个随机选择的对手竞争。 如果您赢了，您将获得180分以及宝箱。 （注意：如果3个胸部插槽全部被占用，则只有释放至少1个插槽才能赚钱。）有多种类型的胸部，如下一节所述。 但是，如果您没有获胜，您将不会获得胸部，再者，您只能获得60分，甚至失去60分或180分，分别排在第二，第三和第四位。 对手是其他球员的真实比赛记录，因此您确实在与真正的球员竞争，只是那不是实时的。 杯子被认为是相对容易赢的。 大多数职业玩家都试图尽可能快地获胜，这是磨硬币和零件的一种方式。</p>

    <h3>杯赛宝箱</h3>
    <p>在这个游戏中有很多类型的宝箱 <a href="chests-and-parts.php?lang=zh">(所有宝箱列表)</a>. 在杯子模式下，您可以获得以下5个箱子中的任何一个：普通，罕见，稀有，史诗或冠军箱子。 每个箱子都包含硬币和零件。 为了打开这些箱子，您可以等待多个小时，也可以使用宝石立即打开。 以下是杯赛宝箱的简要摘要。详细数据在 <a href="chests-and-parts.php?lang=zh">宝箱与零件</a> 部分.</p>
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
    <p style="padding: 0 0 0 20px;">
      24, 333, 8333, 833, <br>
      6, 33333, 8333, <br>
      12, 33, 833333, 83333, 833, <br>
      6, 33333, 833333, 83333, 833333, 833333, <br>
      12, 3333, 8333, 8333333, 8333, 833, <br>
      6, 3, 833, 833333, 833333, 8333 <br>
    </p>

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
    <p>请看 <a href="cups-leaderboard.php?lang=zh">杯赛排行榜</a>.</p>

    <h3>赛季奖励</h3>
    <p>...</p>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
