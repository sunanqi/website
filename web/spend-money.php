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

    <h3>Should I spend money?</h3>
    <p>
      Overall this game is not a pay-to-win game. Without spending a penny, you can still upgrade your garage to the max level, win in the Cups, or grab high scores in team event. Except that it takes longer. Much longer. It could take a year or two to have a decent garage, if you don't spend any money. So what if you are impatient, and you are willing to spend a little to expedite the upgrade speed? In the following section I will summarize some good ways as well as some bad ways of spending money.
    </p>

    <h3>Spend money effectively - Subscribe VIP</h3>
    <p>
      The most effective way to spend money is to buy VIP subscription. The price varies by countries and platforms (iOS or Android). For example, in US, it's $9.99 per month on iOS and $9.49 on Android. The following are some major benefits: </p>
    <ul>
      <li>Skip all ads</li>
      Everyday, you can open 12 common chests for free after watching ads. You can also get around 5000 extra coins for about 6 times, when opening adventure chests and cups chests. If you are new to the game, you can also upgrade vehicles and parts for free every 3 hours. All these free stuffs need you to watch an ad first. The ad can be any length from 10 sec to 1 min. If you get VIP, you save all these ads time.
      <li>Extra seasonal bonus</li>
      < Put some data here >
      <li>VIP chest everyday</li>
      On average, you can get the following in a month. For a list of such numbers for all chest, please see <a href="chests-and-parts.php">chest and parts</a> section.
      <table>
        <caption>What you can get from VIP chests</caption>
        <tr>
          <th>Chest type</th>
          <th>Coin</th>
          <th>Gem</th>
          <th>Common</th>
          <th>Rare</th>
          <th>Epic</th>
          <th>Legendary</th>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/vip.png" alt="VIP chest"></td>
          <td>2657/d, 80k/mo</td>
          <td>60/d, 1800/mo</td>
          <td>23/d, 684/mo</td>
          <td>2.4/d, 73/mo</td>
          <td>around 3/mo</td>
          <td>extremely rare but still possible</td>
        </tr>
      </table>
      <li>Double points in weekly event</li>
      This saves a lot of time, especially when your garage is not upgraded enough and can only get 5 or 6 points in the event.
    </ul>

    <h3>Spend money effectively - Buy bundles</h3>
    <p>If you still feel upgrade is too slow, you can buy gem bundles. Play a lot of Cups and use these gems to open the chests. On average, one gem can be converted to around 300 coins if you use them to open chests from cups. The following are some nice bundles:
      < todo: added a list of decent bundles >
    </p>

    <h3>What you should NOT buy</h3>
    <p>Here are some types of bad deals</p>
    <ul>
      <li>coins and chest only bundles</li>
      <p>Unless you really don't have time to play Cups and win chest, you should avoid this type of chest. However, if you are indeed short of time, and plan to buy gems and then use gems to buy chests, then this type of chest might be a better choice.</p>

      <li>Limited time outfit bundles</li>
      <p>They are pretty much always bad deals, in terms of gems and coins. Unless you really like the outfit, and plan to play this game for long, you should not waste your money on outfit. Moreoever, a lot of outfits can be obtained from various chest, event, seasonal bonus, etc. So if you are not in a hurry, just continue to play the game and hope you'll get if for free some day.</p>
    </ul>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>我应该氪金吗？</h3>
    <p>
      总体而言，该游戏不是付费游戏。 不用花一分钱，您仍然可以将自己的车库升级到最高水平，赢得杯赛，或在团体赛中获得高分。 除了需要更长的时间。 更久，更长。 如果您不花任何钱，可能要花一两年的时间才能拥有一个像样的车库。 那么，如果您不耐烦并且愿意花一点时间来加快升级速度，该怎么办？ 在以下部分中，我将总结一些花钱的好方法和坏方法。
    </p>

    <h3>高回报氪金 - 订阅VIP</h3>
    <p>
      花费的最有效方法是购买VIP订阅。 价格因国家和平台（iOS或Android）而异。 例如，在美国，iOS每月9.99美元，Android每月9.49美元。 以下是一些主要好处： </p>
    <ul>
      <li>跳过所有广告</li>
      每天，观看广告后，您都可以免费打开12个普通箱子。 打开冒险宝箱和杯子宝箱时，您还可以获得大约5000次额外的大约6次硬币。 如果您不熟悉游戏，还可以每3小时免费升级车辆和零件。 所有这些免费的东西都需要您首先观看广告。 广告的长度可以在10秒到1分钟之间。 如果获得VIP，则可以节省所有这些广告时间。
      <li>额外的赛季奖励</li>
      < 在这里放一些数据 >
      <li>每天一个VIP宝箱</li>
      平均而言，您可以在一个月内获得以下信息。 有关所有宝箱的此类数字的列表，请参见<a href="../chests-and-parts?lang=zh.php">宝箱和配件</a>部分。
      <table>
        <caption>VIP宝箱里有什么</caption>
        <tr>
          <th>宝箱种类</th>
          <th>金币数</th>
          <th>钻石数</th>
          <th>普通配件</th>
          <th>稀有配件</th>
          <th>史诗配件</th>
          <th>传奇配件</th>
        </tr>
        <tr>
          <td><img class="in_table" src="../img/chests/vip.png" alt="VIP chest"></td>
          <td>2657/天, 80k/月</td>
          <td>60/天, 1800/月</td>
          <td>23/天, 684/月</td>
          <td>2.4/天, 73/月</td>
          <td>大约 3/月</td>
          <td>极其罕见但还是有可能的</td>
        </tr>
      </table>
      <li>每周活动双倍积分</li>
      这样可以节省大量时间，尤其是当您的车库没有充分升级并且在活动中只能获得5或6分时。
    </ul>

    <h3>高回报氪金 - 购买礼包</h3>
    <p>如果您仍然觉得升级太慢，可以购买宝石套装。 玩很多杯子，并使用这些宝石打开箱子。 如果您使用它们从杯子中打开箱子，平均而言，一颗宝石可以转换为大约300个硬币。 以下是一些不错的捆绑包：
      < 增加一些礼包图片 >
    </p>

    <h3>哪些氪金你应该避免</h3>
    <p>以下是一些回报比较低的氪金：</p>
    <ul>
      <li>仅含金币和宝箱的礼包</li>
      <p>除非您真的没有时间玩杯赛和赢取胸部，否则应避免这种类型的胸部。 但是，如果您确实时间不足，并且计划购买宝石然后使用宝石购买箱子，那么这种箱子可能是一个更好的选择。</p>

      <li>限时的皮肤礼包</li>
      <p>就宝石和硬币而言，它们几乎总是不好的交易。 除非您真的很喜欢这个服装，并且打算长时间玩这款游戏，否则您不应该在服装上浪费金钱。 而且，可以从各种胸口，活动，季节性奖金等中获得很多装备。因此，如果您不着急，继续玩游戏，希望有一天可以免费得到。</p>
    </ul>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
