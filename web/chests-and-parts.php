<?php
  require "header.php";
?>
<style>
  .protips {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>What's in the chest</h3>
    <p>The following numbers are all from real data of more than 5000+ chests. Credit to PR-Rou and CN|PR-five.
      <table>
        <caption>Chest data</caption>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Source</th>
          <th>Coin</th>
          <th>Common</th>
          <th>Rare</th>
          <th>Epic</th>
          <th>Legendary</th>
          <th>Gem</th>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/common.png" alt="Common chest"></td>
          <td>Common chest</td>
          <td>Cups, Event</td>
          <td>2714</td>
          <td>22.5</td>
          <td>2.7</td>
          <td>0.1</td>
          <td>≈0</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/uncommon.png" alt="Uncommon chest"></td>
          <td>Uncommon chest</td>
          <td>Cups</td>
          <td>5537</td>
          <td>33.7</td>
          <td>4.7</td>
          <td>0.5</td>
          <td>≈0</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/rare.png" alt="Rare chest"></td>
          <td>Rare chest</td>
          <td>Cups, Event</td>
          <td>10971</td>
          <td>50.4</td>
          <td>9.3</td>
          <td>1.5</td>
          <td>0.2</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/epic.png" alt="Epic chest"></td>
          <td>Epic chest</td>
          <td>Cups, Event</td>
          <td>21816</td>
          <td>77.9</td>
          <td>13.7</td>
          <td>7.4</td>
          <td>n/a*</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/champion.png" alt="Champion chest"></td>
          <td>Champion chest</td>
          <td>Cups, Event</td>
          <td>55733</td>
          <td>121.3</td>
          <td>5.7</td>
          <td>12.4</td>
          <td>1.4</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/legendary.png" alt="Legendary chest"></td>
          <td>Legendary chest</td>
          <td>Event</td>
          <td>27731</td>
          <td>125.3</td>
          <td>5.3</td>
          <td>12.7</td>
          <td>3</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/vip.png" alt="VIP chest"></td>
          <td>VIP chest</td>
          <td>VIP sub</td>
          <td>2657</td>
          <td>22.8</td>
          <td>2.4</td>
          <td>0.1</td>
          <td>≈0</td>
          <td>60</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/daily_blue.png" alt="Blue chest"></td>
          <td>Blue chest</td>
          <td>Free</td>
          <td>1407</td>
          <td>22.5</td>
          <td>2.7</td>
          <td>0.1</td>
          <td>≈0</td>
          <td>1.7</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/daily_red.png" alt="Red chest"></td>
          <td>Red chest</td>
          <td>Free after 10 races</td>
          <td>5416</td>
          <td>33.6</td>
          <td>3.8</td>
          <td>0.7</td>
          <td>0.1</td>
          <td>4.8</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/adventure.png" alt="Adventure chest"></td>
          <td>Adventure chest</td>
          <td>Finish adventure task</td>
          <td colspan=6>see next section</td>
        </tr>
      </table>
      *: no enough data
    </p>

    <h3>What's in the Adventure chest</h3>
    <p>In the adventure chest, you could get coins, all types of parts, gems and outfit. The amount depend on chest level. For every 500m you drive, you get one level up.
      <ul>
        <li>Coin: 400*level + 1000, no upper bound.</li>
        <li>Parts: level 1-6 get similar amount of parts. Same for level 7~12, level 13 and above. That means, beyond level 13, you won't get additional parts.</li>
        <li>Gems: floor(level/4)+1, capped at 8 per task. That means, after level 28, you won't get additional gems</li>
        <li>Outfit: if you already own, it will be converted to coins just like other chests</li>
      </ul>
    </p>
    <table>
      <caption>Adventure Chest data</caption>
      <tr>
        <th>Image</th>
        <th>Level</th>
        <th>Coin</th>
        <th>Common</th>
        <th>Rare</th>
        <th>Epic</th>
        <th>Legendary</th>
        <th>Gem</th>
      </tr>
      <tr>
        <td rowspan=3><img class="in_table" src="../img/chests/adventure.png" alt="Adventure chest"></td>
        <td>1~6</td>
        <td rowspan=3>400*level + 1000</td>
        <td>22.8</td>
        <td>2.6</td>
        <td>0.1</td>
        <td>≈0</td>
        <td rowspan=3>floor(level/4)+1</td>
      </tr>
      <tr>
        <td>7~12</td>
        <td>33.9</td>
        <td>3.4</td>
        <td>1.0</td>
        <td>≈0</td>
      </tr>
      <tr>
        <td>13~∞</td>
        <td>51.3</td>
        <td>9.8</td>
        <td>1.2</td>
        <td>≈0</td>
      </tr>
    </table>
  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>宝箱里有什么</h3>
    <p>以下数据来自于超过5000个箱子的实际数据。数据由 PR-Rou 和 CN|PR-five 提供。</p>
      <table>
        <caption>宝箱数据</caption>
        <tr>
          <th>图片</th>
          <th>名称</th>
          <th>获得来源</th>
          <th>金币数</th>
          <th>普通配件数</th>
          <th>稀有配件数</th>
          <th>史诗配件数</th>
          <th>传奇配件数</th>
          <th>钻石数</th>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/common.png" alt="Common chest"></td>
          <td>普通宝箱</td>
          <td>杯赛, 每周活动</td>
          <td>2714</td>
          <td>22.5</td>
          <td>2.7</td>
          <td>0.1</td>
          <td>≈0</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/uncommon.png" alt="Uncommon chest"></td>
          <td>罕见宝箱</td>
          <td>杯赛</td>
          <td>5537</td>
          <td>33.7</td>
          <td>4.7</td>
          <td>0.5</td>
          <td>≈0</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/rare.png" alt="Rare chest"></td>
          <td>稀有宝箱</td>
          <td>杯赛, 每周活动</td>
          <td>10971</td>
          <td>50.4</td>
          <td>9.3</td>
          <td>1.5</td>
          <td>0.2</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/epic.png" alt="Epic chest"></td>
          <td>史诗宝箱</td>
          <td>杯赛, 每周活动</td>
          <td>21816</td>
          <td>77.9</td>
          <td>13.7</td>
          <td>7.4</td>
          <td>n/a*</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/champion.png" alt="Champion chest"></td>
          <td>冠军宝箱</td>
          <td>杯赛, 每周活动(有时)</td>
          <td>55733</td>
          <td>121.3</td>
          <td>5.7</td>
          <td>12.4</td>
          <td>1.4</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/legendary.png" alt="Legendary chest"></td>
          <td>传奇宝箱</td>
          <td>每周活动</td>
          <td>27731</td>
          <td>125.3</td>
          <td>5.3</td>
          <td>12.7</td>
          <td>3</td>
          <td>0</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/vip.png" alt="VIP chest"></td>
          <td>VIP宝箱</td>
          <td>VIP订阅</td>
          <td>2657</td>
          <td>22.8</td>
          <td>2.4</td>
          <td>0.1</td>
          <td>≈0</td>
          <td>60</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/daily_blue.png" alt="Blue chest"></td>
          <td>每日蓝色宝箱</td>
          <td>免费(6-8小时可领取一次)</td>
          <td>1407</td>
          <td>22.5</td>
          <td>2.7</td>
          <td>0.1</td>
          <td>≈0</td>
          <td>1.7</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/daily_red.png" alt="Red chest"></td>
          <td>每日红色宝箱</td>
          <td>每天免费一个(赢得10个杯赛图后)</td>
          <td>5416</td>
          <td>33.6</td>
          <td>3.8</td>
          <td>0.7</td>
          <td>0.1</td>
          <td>4.8</td>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/adventure.png" alt="Adventure chest"></td>
          <td>冒险宝箱</td>
          <td>完成冒险任务后</td>
          <td colspan=6>见下一段内容</td>
        </tr>
      </table>
      *: 无足够数据
    </p>

    <h3>冒险宝箱里有什么</h3>
    <p>在冒险宝箱中，您可以获得硬币，各种零件，宝石和装备。 数量取决于宝箱级别。 每行驶500 米，您将获得一个级别的提升。
      <ul>
        <li>金币: 400*级别 + 1000, 无上限.</li>
        <li>配件: 略微随机。1-6级期望值相同；7-12级期望值相同；13级以上期望值相同。也就是说，13级以后，你就不会获得额外的配件。</li>
        <li>钻石: 级别数除以4后取整，再加1。每个任务最多给8个钻石。也就是说，达到28级后，钻石数就不再增加。</li>
        <li>皮肤: 每个箱子都可能随机出现皮肤。如果已经有次皮肤，会自动转成1000~3000的金币。</li>
      </ul>
    </p>
    <table>
      <caption>冒险宝箱数据</caption>
      <tr>
        <th>图片</th>
        <th>级别</th>
        <th>金币数</th>
        <th>普通配件数</th>
        <th>稀有配件数</th>
        <th>史诗配件数</th>
        <th>传奇配件数</th>
        <th>钻石数</th>
      </tr>
      <tr>
        <td rowspan=3><img class="in_table" src="../img/chests/adventure.png" alt="Adventure chest"></td>
        <td>1~6级</td>
        <td rowspan=3>400*级别 + 1000</td>
        <td>22.8</td>
        <td>2.6</td>
        <td>0.1</td>
        <td>≈0</td>
        <td rowspan=3>级别数除以4后取整，再加1。</td>
      </tr>
      <tr>
        <td>7~12</td>
        <td>33.9</td>
        <td>3.4</td>
        <td>1.0</td>
        <td>≈0</td>
      </tr>
      <tr>
        <td>13~∞</td>
        <td>51.3</td>
        <td>9.8</td>
        <td>1.2</td>
        <td>≈0</td>
      </tr>
    </table>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
