<?php
  require "header.php";
?>
<style>
  .adventure {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>What is Adventure Mode?</h3>
    <p>In adventure mode, you can choose any vehicle and map (subject to your "level"). There are no opponents, and you don't have to drive as fast as possible. Instead, you will try to drive as far as you can. There will be no "punishment" associated with loss. If you set a new distance record, it will be recorded.</p>
    <hr>

    <h3>Ranking</h3>
    <p>Players are ranked by "stars", which are calculated as follows: For any combination of the 21 vehicles and 13 "regular" maps, stars will be the minimum of your distance record and 10,000 meters. For example, if you drive 8000m with bus in the Forest, you will get 8000 stars. Then you try again (with the same vehicle and map), you improved to 11000m, you will only earn an additional 2000 stars, making it to a total of 10000 stars, because it is capped at 10000 stars for any combination of vehicle and "regular" map. Then, you change vehicle to scooter on the same map, and drive 5000m. Now you will earn 5000 stars for this run, making your total starts 15000.</p>

    <p>Since version 1.37, the game has three "enhanced" maps. The enhanced maps are much more difficult. Hence, stars calculation is slightly different: for every one meter drive, player gets 3 stars. The cap is 15000 stars (or 5000m) for each combination of 21 vehicles and 3 enhanced maps.</p>

    <p>So, theoretically, the maximal stars one can get is 3,675,000 (10,000*21*13 + 15,000*21*3). </p>
    <hr>

    <h3>Leaderboard</h3>
    <p>As of 2020-09-10, top score is 2.42 million stars. For more details about leaderboard, please see the <a href="adventure-leaderboard.php">leaderboard section</a>.</p>
    <img src="../img/adventure/adventure-leaderboard-20200910.jpg" alt="screenshot of leaderboard as of 2020-09-10">
    <hr>

    <h3>Fuels and Coins</h3>
    <p>Generally speaking, fuels are more and more sparse when you drive along, making it impossible to drive forever.</p>
    <p>There are basically two sources of coins you can collect when you drive</p>
    <ul>
      <li>Coin piles: appear roughly every 50m. The more you drive, the more coins are in the pile. However every pile is capped at 39 coins.</li>
      <li>Coin bags: appear roughly every 250m, when you drive beyond previous best. For any map, if you are driving beyond overall best (overall across all vehicles), you are getting big coin bags. The higher the distance, the bigger the bags. The bags start from 1050 coins, increase all the way up to 3000 coins, with an increment of 50 coins. After reaching 3000 coins, the bag will not increase any more. You will keep getting bags of 3000 coins when you drive along. If you are not below the overall best, but beyond vehicle-specific best (for the vehicle you are driving now), you will get small coin bags. They start from 100, and max at 300 coins.</li>
    </ul>
    <p>Player will also earn bonus coins for tricks, such as wheelie, flips, air time, etc. That will not be too much (10%-ish) compared to coin piles collected along the drive, unless you intentionally doing a lot of tricks. </p>
    <hr>

    <h3>Tasks</h3>
    <p>Periodically, player will receive adventure tasks. This is a great way to accrue coins and parts. Each task specifies a certain vehicle and map conbination. After player drives at least 500m, an adventure chest will be given. The level of the chest will be dependent on the distance - for every 500m, the check level will increase by 1. For example, if the player drives 30,000m, the chest level will be 60. </p>
    <p>Each adventure chest contains coins, parts and gems. Some chests will also have outfits. As you can imagine, the higher the chest level, the more valuable the chest is. The relationship are as follows:</p>
    <ul>
      <li>Coins: for each adventure chest, number of coins are deterministic (not random). It is calculated as 1000 + 400*level. For example, the level 60 chest mentioned above will have 25,000 coins. </li>
      <li>Parts: the numbers and even the categories of parts in the adventure chest are random. We have observed thousands of adventure chests with various level, and summarized their average as follow:
        <table>
          <tr>
            <th>adventure chest level</th>
            <th>regular</th>
            <th>rare</th>
            <th>epic</th>
            <th>legendary</th>
          </tr>
          <tr>
            <td>1 ~ 6</td>
            <td>22.8</td>
            <td>2.6</td>
            <td>0.05</td>
            <td>extremely rare</td>
          </tr>
          <tr>
            <td>7 ~ 12</td>
            <td>33.9</td>
            <td>3.4</td>
            <td>1.0</td>
            <td>very rare</td>
          </tr>
          <tr>
            <td>13 and above</td>
            <td>51.3</td>
            <td>9.8</td>
            <td>1.2</td>
            <td>around 0.05</td>
          </tr>
        </table>
        <p>Please note that these numbers are based on actual data and could have slightly deviated from unknown real values. Number of parts are a step function of chest level - level 1 through 6 have the same (expected) numbers of parts, and same for level 7 through 12, level 13 and beyond. So, don't be too suprised when you only see 51 regular and 10 rare parts; no epic or legendary, after you drive super far and get a huge chest.</p>
      </li>
      <li>Gems: Staring from 1 gem, for every 2000m, player will get an additional 1 gem, capped at 8 gems in total. For example, if the player drives 10000m, the chest (level 20) will have 6 gems.
      </li>
    </ul>

    How frequently are tasks given? Tasks are given in the groups of 3. Once you start the first task, the countdown begins. After 12 hours, new tasks will be given. So, please start the first task as soon as you see it, and try to finish all 3 in the coming 12 hours, thus you will not "waste" any tasks.

    <h3>Double coins, ads bonus, and more</h3>
    <p>Periodically players are given chances to earn double coins on the way. The frequency and renew time seem different across players and do not have a pattern. However, it's been observed that if a player does not drive very long (say, only 500m), the double coins opportunity will not be used.</p>
    <p>Ads bonus is also a good source of coins. Two ads bonus will be given along with the new tasks. They will appear when you open task chests. Each ads bonus will be around 5000 coins.</p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>

    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>冒险模式</h3>
    <p>在冒险模式下，您可以选择任何车辆和地图（取决于您的“级别”）。 没有对手，您不必尽可能快地开车。 相反，您将尝试尽可能地开车。 不会有与损失相关的“惩罚”。 如果您设置了新的距离记录，则会记录下来。</p>
    <hr>

    <h3>排名</h3>
    <p>玩家按“星星”排名，其计算方法如下：对于21辆车和13张“常规”地图的任意组合，星星将是距离记录和10,000米中的最小值。 例如，如果您在森林中用公共汽车驾驶8000m，您将获得8000星。 然后您再试一次（使用相同的车辆和地图），您将其提高到11000m，您将只获得另外的2000颗星，使其总数达到10000颗星，因为对于任何车辆组合和“ 常规”地图。 然后，您在同一地图上将车辆换成踏板车，并行驶5000m。 现在，您将为此跑步赢得5000颗星，使您的起点总数达到15000。</p>

    <p>从1.37版开始，游戏具有三个“增强”地图。 增强的地图要困难得多。 因此，星级计算略有不同：每行驶一米，玩家将获得3颗星级。 对于21辆汽车和3张增强地图的每种组合，其上限为15000星（或5000m）。</p>

    <p>因此，理论上，一个人可以得到的最大恒星是3,675,000（10,000 * 21 * 13 + 15,000 * 21 * 3）。 </p>
    <hr>

    <h3>排行榜</h3>
    <p>截至2020-09-10，全球最高分是242万颗星，中国区最高分是240万颗星。有关排行榜的更多详细信息，请参见<a href="adventure-leaderboard.php?lang=zh">排行榜</a>部分.</p>
    <img src="../img/adventure/adventure-leaderboard-20200910.jpg" alt="adventure leaderboard as of 2020-09-10">
    <img src="../img/adventure/adventure-leaderboard-china-20200910.jpg" alt="adventure leaderboard (china only) as of 2020-09-10">
    <hr>

    <h3>燃料和硬币</h3>
    <p>一般来说，行驶时燃料越来越稀疏，不可能永远行驶。</p>
    <p>开车时基本上可以收集两种硬币来源</p>
    <ul>
      <li>硬币堆：大约每50m出现一次。 您开车越多，堆里的硬币就越多。 但是，每一堆的上限为39个硬币。</li>
      <li>硬币袋：当您超越先前的最佳行驶时，大约每250m出现一次。 对于任何地图，如果您驾驶的都超过了总体最佳水平（所有车辆的总体水平都很高），那么您将获得巨大的硬币袋。 距离越大，袋子越大。 袋子从1050个硬币开始，一直增加到3000个硬币，增加了50个硬币。 达到3000个硬币后，袋子不再增加。 开车时，您将不断得到3000枚硬币的袋子。 如果您没有低于总体最佳水平，但超出了特定于车辆的最佳水平（对于您现在正在驾驶的车辆），您将获得小硬币袋。 它们从100开始，最大为300个硬币。</li>
    </ul>
    <p>玩家还将获得一些特技奖励花币，例如自行车特技，翻转，飞行时间等。与沿驱动器收集的硬币堆相比，这不会太多（10％ish），除非您有意进行很多技巧。</p>
    <hr>

    <h3>任务</h3>
    <p>玩家将定期收到冒险任务。 这是累积硬币和零件的好方法。 每个任务指定特定的车辆和地图组合。 玩家驾驶至少500m后，将获得一个冒险宝箱。 箱子的高度取决于距离-每500m，检查高度将增加1。例如，如果玩家行驶30,000m，箱子的高度将为60。</p>
    <p>每个冒险箱都包含硬币，零件和宝石。 一些箱子还会有衣服。 可以想象，胸部越高，胸部就越有价值。 关系如下：</p>
    <ul>
      <li>硬币：对于每个冒险箱，硬币的数量是确定的（不是随机的）。 计算为1000 + 400 *级。 例如，上述60级宝箱将有25,000个硬币。 </li>
      <li>零件：冒险箱中零件的数量甚至类别都是随机的。 我们观察了成千上万个不同级别的冒险箱，并将其平均值总结如下：
        <table>
          <caption>冒险箱里零件的等级和数量</caption>
          <tr>
            <th>冒险宝箱等级</th>
            <th>普通</th>
            <th>稀有</th>
            <th>史诗</th>
            <th>传奇</th>
          </tr>
          <tr>
            <td>1 ~ 6级</td>
            <td>22.8</td>
            <td>2.6</td>
            <td>0.05</td>
            <td>极度少见</td>
          </tr>
          <tr>
            <td>7 ~ 12级</td>
            <td>33.9</td>
            <td>3.4</td>
            <td>1.0</td>
            <td>少见</td>
          </tr>
          <tr>
            <td>13级或以上</td>
            <td>51.3</td>
            <td>9.8</td>
            <td>1.2</td>
            <td>约0.05</td>
          </tr>
        </table>
        <p>请注意，这些数字是基于实际数据的，可能与未知的实际值略有不同。 零件数是胸部水平的阶跃函数-1到6级具有相同（预期）的零件数，而7到12级，13级及以后的零件数相同。 因此，当您只看到51个普通零件和10个稀有零件时，不要太惊讶。 在您驶过超远距离并获得巨大胸部后，没有史诗般的或传奇的故事。</p>
      </li>
      <li>宝石：每2000m，从1颗宝石凝视，玩家将额外获得1颗宝石，上限为8颗宝石。 例如，如果玩家行驶10000m，则箱子（等级20）将有6颗宝石。
      </li>
    </ul>

    任务多久发送一次？ 任务以3组为一组。一旦开始第一个任务，便开始倒数计时。 12小时后，将给出新任务。 因此，请在看到第一个任务后立即开始，并尝试在接下来的12小时内完成所有三个任务，这样您就不会“浪费”任何任务。

    <h3>双倍金币, 广告奖励, 其他</h3>
    <p>定期为玩家提供途中赚取双倍金币的机会。 玩家之间的频率和更新时间似乎有所不同，并且没有规律。 但是，据观察，如果玩家开车的时间不长（例如，只有500m），将不会使用双发硬币的机会。</p>
    <p>广告奖金也是硬币的好来源。 新的任务将提供两个广告奖金。 当您打开任务箱时，它们会出现。 每个广告奖金约为5000个硬币。</p>

  </div>


  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
