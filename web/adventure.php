<?php
  $title = "Adventure Overview - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "冒险总览 - 登山赛车2 攻略 技巧 排行榜";
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
    <p>In the Adventure mode, your goal is to drive as far as you can. You can choose any vehicle and map (subject to your "level"). You do not have opponents, so you could drive slowly and leisurely, or to try different vehicles and tuning parts, or even to enjoy yourself with some weird neck flips or air time. Of course, you can play adventure only for grinding coins. While you drive on, the fuel can along the road will get sparser and sparser, so if you want to break record, you need to drive fast. There will be no "punishment" associated with loss. If you set a new distance record, it will be recorded. If you need tips on how to driver further, please see <a href="adventure-tips.php">Tip & Strategies</a>. If you need ideas on how to grind coins efficiently, please see <a href="/web/grinding-coins.php">Guide for newbie & Grinding coins</a>.
    </p>

    <a id="adventure_ranking"></a>
    <h3>Ranking</h3>
    <p>There are two types of rankings: distance ranking for each map and total stars ranking. For each of the 17 adventure maps, there are leaderboards based on distance. Of course the distances can be from any vehicles, or from each specific vehicle (just like rankings in each Cups track). The total stars rankings are based on stars earned from all maps, which are calculated as follows: For any combination of the 23 vehicles and 14 "regular" maps, stars will be your record distance in meters, capped at 10,000 meters. For example, if you drive 8000m with bus in the Forest, you will get 8000 stars. Then you try again (with the same vehicle and map), you improved to 11000m, you will only earn an additional 2000 stars, making it to a total of 10000 stars, because it is capped at 10000 stars. Then, you change vehicle to scooter on the same map, and drive 5000m. Now you will earn 5000 stars for this run, making your total starts 15000. </p>

    <p>Since version 1.37, the game has 3 "enhanced" maps. The enhanced maps are much more difficult. Hence, stars calculation is slightly different: for every one meter driven, player gets 3 stars. The cap is 15000 stars (or 5000m) for each combination of 23 vehicles and 3 enhanced maps.</p>

    <p>So, theoretically, the maximal stars one can get is 4,255,000 (10,000*23*14 + 15,000*23*3). </p>

    <p>Please see <a href="adventure-leaderboard.php">Total stars ranking</a> and <a href="adventure-leaderboard-all-maps.php">rankings of each map</a>.</p>

    <h3>Fuels and Coins</h3>
    <p>Generally speaking, fuels are more and more sparse when you drive along, making it impossible to drive forever. (Note: for certain maps, some really skilled players use "Perpetual Motion Trio" - wings, jump shocks, and landing boost, to keep or even obtain kinetic energy when fuel is run out. They probably can keep breaking the records. )
    </p>

    <p>There are basically two sources of coins you can collect when you drive.</p>
    <ul>
      <li>Coin piles: appear roughly every 50m. The more you drive, the more coins are in the pile. However every pile is capped at 39 coins.</li>
      <li>Coin bags: appear roughly every 250m, when you drive beyond previous best. For any map, if you are driving beyond overall best (overall across all vehicles), you are getting big coin bags. The higher the distance, the bigger the bags. The bags start from 1050 coins, increase all the way up to 3000 coins, with an increment of 50 coins. After reaching 3000 coins, the bag will not increase any more. You will keep getting bags of 3000 coins when you drive along. If you are not below the overall best, but beyond vehicle-specific best (for the vehicle you are driving now), you will get small coin bags. They start from 100, and max at 300 coins.</li>
    </ul>
    <p>Player will also earn bonus coins for tricks, such as wheelie, flips, air time, etc. Those will not be too much (10%-ish) compared to coin piles collected along the drive, unless you intentionally doing a lot of tricks. </p>
    <hr>

    <a id="adventure_task"></a>
    <h3>Adventure Tasks</h3>
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
      <li>Gems: Starting from 1 gem, for every 2000m, player will get an additional 1 gem, capped at 8 gems in total. For example, if the player drives 10000m, the chest (level 20) will have 6 gems.
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
    <p>在冒险模式下，你的目标是尽可能跑得远。游戏中没有对手，所以你大可以慢慢跑，尝试不同的车辆，也可以做各种特技动作，当然，也可以纯粹为了赚取沿途的金币。随着游戏的进行，路上的油桶会越来越稀少，所以如果你真想突破自己的记录，就得跑的快一些。每隔数个小时，你会收到“任务”和“双倍金币活动”，利用好这些可以快速积累金币。如果你想跑的更远，突破自己的记录，详见<a href="adventure-tips.php?lang=zh">冒险攻略专区</a>。关于如何高效赚取金币，详见<a href="grinding-coins.php?lang=zh">新手攻略+赚金币</a>。</p>

    <a id="adventure_ranking_zh"></a>
    <h3>排名</h3>
    <p>排名分两种：单图距离排名，和总星数排名。17个冒险图，每个图都有按照距离排序的排名。当然，这也分任意车排名，和每个车单独的排名（和杯赛排名类似）。总星数排名根据每位玩家获得星星数排名，其计算方法如下：对于23辆车和14张“常规”地图的任意组合，你的记录是几米，就得到几颗星星，封顶1万颗。例如，如果你在“森林”图中用巴士跑了8000米，你会获得8000颗星。然后你又跑了一次(使用相同的车辆和地图)，记录提高到了11000m，你会得到额外2000颗星，使其总数达到10000颗星。然后，你在同一地图上将车辆换成小轮摩托，跑了5000m，你会再得到5000颗星，使你的星星总数达到15000。从1.37版本开始，游戏增加了三个“增强”地图。增强地图比常规地图难度大很多。相应的，在增强地图里每跑一米，将获得3颗星。对于23辆赛车和3张增强地图的每种组合，其上限为15000星（或5000m）。因此，理论上，一个人可以得到的最高分数是 425 5000 (10000 * 23 * 14 + 15000 * 23 * 3）。</p>

    <p>点这里看<a href="adventure-leaderboard.php?lang=zh">总星数排行榜</a>和<a href="adventure-leaderboard-all-maps.php?lang=zh">冒险单图排行榜</a>。</p>

    <h3>燃料和硬币</h3>
    <p>燃料：一般来说，行驶时燃料越来越稀疏，不可能永远行驶。（注：目前部分图有大佬用三件套永动跑法，已经将记录提高到了普通跑法没法达到的距离，也许他们真的可以不断刷新纪录。）</p>
    <p>金币：大致有两个来源</p>
    <ul>
      <li>金币堆：大约每50m出现一次。一开始每堆金币很少，之后逐渐增加。每一堆的上限为39个硬币。</li>
      <li>金币袋：当你刷新了自己之前的记录后，大约每250m出现一次。如果是超过了所有车的总记录，那么得到的是大金币袋。袋子从1050个硬币开始，每袋增加50，最多3000金币（之后每跑一段就是3000金币的袋子）。 如果你没超过所有车的总记录，但是超过了本辆车的记录，那么得到的就是小金币袋。袋子从100个金币开始，每袋增加10金币，最多300金币。</li>
    </ul>
    <p>驾驶途中的特技也会得到金币，例如独轮，翻转，飞行时间等。与沿途吃到的金币堆相比，这些特技来的金币数量一般不会很多。</p>

    <a id="adventure_task_zh"></a>
    <h3>冒险任务</h3>
    <p>玩家将定期收到冒险任务。这是累积金币和零件的好方法。冒险任务会指定一张冒险图，有时会指定一辆车，有时则是任何车都可以。玩家驾驶至少500m后，将获得一个冒险宝箱。箱子的等级取决于距离：每跑500m，箱子等级增加1。例如，跑3000米会得到等级为6的箱子。跑3W米会得到等级为60的箱子。</p>
    <p>每个冒险箱都包含硬币，零件和宝石，还会随机出现皮肤。宝箱等级越高，硬币零件和出现皮肤的概率越高。关系如下：</p>
    <ul>
      <li>金币：对于每个冒险箱，金币的数量是确定的（不是随机的），为1000 + 400*级数。例如，60级宝箱将有25,000个金币。</li>
      <li>零件：冒险箱中零件的数量和类别都是随机的。我们观察了成千上万个不同级别的冒险箱，并将其平均值总结如下：
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
        <p>因为零件的数量是随机的，所以你实际拿到的数量，每次可能都不一样。但会在上面平均值的附近。零件数量平均值是宝箱级数的阶梯函数：1到6级的零件数相同，7到12级的相同，13级及以后的相同。因此，当你辛辛苦苦跑了3w多米，拿了60几级的冒险箱，只看到51个普通零件和10个稀有零件时，不要太失望。（至少金币数还是实打实的不少的）</p>
      </li>
      <li>钻石：箱子保底1颗钻石。每跑2000m，额外获得1颗钻石，每个任务上限为8颗钻石。例如，如果你跑了10,000米，则箱子等级是20，含有6颗钻石(1+10000/2000)。
      </li>
    </ul>
    <p>
    任务多久收到一次？任务以3个为一组。一旦开始第一个任务，便开始倒数计时。12小时后，将会收到新任务。因此，最好在看到任务后立即开始第一个。（如果忙的话，可以开始跑后马上按暂停，这样至少12个小时后能收到新任务）。然后，在接下来的12小时内完成所有三个任务。忙的话可以每个任务只跑500米。这样就不会“浪费”任何任务。</p>
    <p>如果没跑好暴毙了怎么办？如果此时不到500米，可以强退游戏重新开始这个任务。如果在游戏里直接退出，这个任务就没了。如果已经超过500m，争取在快死前点游戏里的暂停->重新开始，这样可以重新做一次这个任务。如果强退，这个任务就会被当成已经做完，提示你领取冒险箱。</p>

    <h3>双倍金币, 广告奖励, 其他</h3>
    <p>每天或者每半天玩家会得到双倍金币的机会。你可以选择使用双倍金币机会或者留到下次使用。如果使用，则此次冒险不管跑多远，沿途的金币会增加一倍。所以如果你能跑到两万，三万米的话，可以多得到不少金币。如果你跑得不远（比如不到1000米），双倍金币的机会不会被收回。换言之，如果三个冒险任务你都准备只跑500米，可以都用上双倍金币机会。</p>
    <p>每隔12小时，会获得2次看广告拿5000左右金币的机会（VIP用户可以跳过广告）。所以可以和冒险任务一起，额外多的1万左右金币。</p>
  </div>


  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
