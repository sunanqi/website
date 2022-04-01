<?php
  $title = "Cups Tips - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "杯赛攻略 - 登山赛车2 攻略 技巧 排行榜";
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

    <h3>Tips for Newbie</h3>
    <p>For players relatively new to this game, Cups and garage upgrade are the key tasks. After reading this section, you will get tips on how to efficiently win the Cups and upgrade vehicles and tuning parts.
      <ul>
        <li><span class="in-line-blue-bold">Cups points 0 ~ 10k (Bronze I ~ Bronze III)</span>: Before reaching Bronze III, try to beat opponents with the free Hill Climber. Don't spend coins on upgrade vehicles or tuning parts, or buy new vehicles. Every 3 hours, you get a chance to upgrade vehicle for free, and a change to upgrade tuning parts for free, after watching an ads. You can skip the ads if you subscribe VIP. When reaching Bronze III, buy the Bus. Bus is much longer and not as easy to flip over as Hill Climber, and has better acceleration.</li>
        <li><span class="in-line-blue-bold">Cups points 10k ~ 20k (Silver I ~ Silver III)</span>：After reaching Silver I, you can buy Hill Climber Mk 2. However, if you feel handy about Bus, you don't have to buy Mk2. You also don't need to buy motorcross after reaching Silver II. It is not useful for winning Cups. However, after reaching Silver III, buy Dune Buggy. From now on, use Dune Buggy in the Cups.</li>
        <li><span class="in-line-blue-bold">Cups points 20k ~ 30k (Gold I ~ Gold III)</span>: During this period of time, you will unlock Sports car, Monster truck, Rotator and Super diesel. You can skip these vehicles for now and buy later.</li>
        <li><span class="in-line-blue-bold">Cups points 30k ~ 40k (Platinum I ~ Platinum III)</span>: You'll unlock Tank and Monowheel at PLT I and PLT II. Skip them. Then, as soon as reaching PLT III, you should immediately buy Rally car. This is "THE car" in this entire Hill Climb Racing 2 game. You will mainly use this car in both Cups and Adventure. You should also mainly upgrade this car in the near future.</li>
        <li><span class="in-line-blue-bold">Cups points 40k ~ 50k (Diamond I ~ Legendary)</span>: All the rest cars will be unlocked. You don't have to buy them for now.</li>
      </ul>
    </p>

    <p>After reaching Legendary level, you will unlock so-called "<a href="cups.php#cups_season_bonus">season bonus</a>". Try to get 50k Cups points every month to fully take adventage of seasonal bonus.</p>

    <h3>Tips on winning cups and upgrading garages</h3>
    <ul>
      <li>At early stage of this game, VIP is extremely useful. Besides the two major benefits mentioned in the <a href="spend-money.php">Spend Money</a> section, there are two other benefits: 1) VIP subscriber automatically gets premium pass, and thus get extra prizes and even free vehicles before reaching the Legendary; 2) Every three hours player can upgrade vehicle and tuning parts for free after watching ads. VIP subscriber can skip these ads and save a lot of time. This is very useful at the early stage of the game since you have a lot to be upgraded.</li>

      <li>After buying Rally, put all free upgrade chances on this car. Then try to max the 4 vehicle components. With higher level, you have more chances to finish 3-track races after only 2 tracks. This saves time and you will grind chests and coins faster.</li>

      <li>At early stage, Cups will be relatively difficult, since opponents usually have better vehicles. After reaching Legendary level, Cups will be gradually easier and easier. If you can afford, buying a Rally bundle from early on will be a good deal. You don't have to wait for Platinum III to buy Rally.</li>

      <li>Not every map has the same level of difficulty. For some maps like under the sea maps, you will find your opponents have much better vehicles. We don't know how the system assigns opponents but it is what it is. When at such maps, just quit the match, lose 180 points, and earn them back in the next match. Don't spend time to finish all 3 tracks only to get the last place.</li>

      <li>At early stage, you don't have all tuning parts. Use what you have. When you gradually have more type of tuning parts (of course they are still far from high level), I recommend Wings, Overcharged turbo and Coin boost. These three tuning parts along with Rally can handle most maps, except a couple of mountain and water maps, where you might need winter tires. Some players also like to use Afterburner.</li>

      <li>When getting the chance to upgrade vehicles and parts for free, you can first upgrade expensive vehicles (Supercar, F1, Racing truck, Hot rod, etc.) and useful parts (wings, winter tires, start boost, fume boost, etc).</li>

      <li>Every vehicle has 4 components, but not all or them are equally useful. Overall, engine and tire are most useful, then suspension. Some components are almost useless in Cups, such as rollcage of Mk2 and Dune buggy, Damage of tractor, etc. Deprioritize them to the last to upgrade. Also note that the Downforce and Air Brake are not very useful in most cases. Even when you get enough coins, you probably only need to upgrade them to medium-high instead of max level.</li>

      <li>When reaching Gold I, immediately join a team. You will get a lot of rewards on top of what you get without joining a team. It's free lunch. Try to join before Monday 3AM EEST(Finland time), and you will get the weekly team chest of this week.</li>

      <li>A list of vehicles and tuning parts: <a href="lists-of-everything.php">here</a></li>
      <li>Upgrade cost: <a href="upgrade-cost.php">here</a></li>
    </ul>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>新手起步</h3>
    <p>对新手来说，杯赛和升级车库是游戏的核心部分。建议看完本页面所有攻略，这样你会了解如何高效的赢下杯赛，如何有效的升级车库。
    <ul>
      <li><span class="in-line-blue-bold">杯赛积分0-1w(铜I~铜III)</span>：在铜III之前，尽量用赠送的登山赛车击败对手。不要花金币去升级车子组件或者配件。每三小时有一次看广告免费升级的机会，不要浪费。达到铜II后，可以买小轮摩托，但建议暂时不买，因为游戏初始阶段金币非常宝贵。达到铜III后，买巴士，巴士车身很长，不容易翻车，加速性能也明显比低等级的登山赛车好。</li>
      <li><span class="in-line-blue-bold">杯赛积分1w~2w(银I~银III)</span>：达到银I后，你可以选择买登山赛车Mk2，但如果你巴士跑的顺手，则可以先不买。到达银II后的越野摩托暂时不买，对杯赛没有帮助。到达银III后，买沙丘越野车。这车跑杯赛应该比巴士更容易，接下来的杯赛用这个沙丘车。</li>
      <li><span class="in-line-blue-bold">杯赛积分2w~3w(金I~金III)</span>：这期间你会解锁跑车，怪物卡车，翻斗车和超级柴油车。这几个车都可以暂时不买。</li>
      <li><span class="in-line-blue-bold">杯赛积分3w~4w(白金I~白金III)</span>：到达白金I和白金II分别解锁坦克和独轮车，都暂时不买。到达白金III后，可以解锁拉力赛车。这个车是神车，无论是杯赛还是探险，这辆车都是最佳选择之一。买下拉力，然后用这个车跑杯赛，升级也主要升级这辆。</li>
      <li><span class="in-line-blue-bold">杯赛积分4w~5w(钻石I~传奇)</span>：剩余车辆也都会被解锁。这些车都可以暂时不买。</li>
    </ul></p>

    <p>达到传奇后，可以解锁“赛季奖励”。所谓“赛季奖励”，就是杯赛分每到一定的数值（一般是1000的整数倍），就能获得相应的奖励，小到2000金币或者30钻石，大到传奇配件，史诗箱子，或者传奇箱子。每个月的前5万分，都会有这样额外的奖励；5w分之后，则不再有额外奖励了。当然，获胜后宝箱奖励还是一样会有。所以，每个月尽可能跑满5万杯赛分。如果想更快升级车库，则可以跑更多的杯赛。</p>

    <h3>杯赛和车库升级攻略</h3>
    <ul>
      <li>游戏初期订阅VIP非常划算和值得。除了在“<a href="spend-money.php?lang=zh">氪金板块</a>”提到的VIP好处外，还有两个额外好处：1) 传奇之路上会额外获得不少金币，以及免费赛车，省去了赛车购买费用；2) 游戏初期有很多看广告免费升级赛车和配件的机会，每3小时就各有一次。有了VIP后，这些看广告的时间都省了。VIP的价格并不贵，加我们的QQ群(255579428)获得氪金攻略。</li>
      <li>买到拉力赛车后，免费升级赛车和配件的机会都先用在拉力上，然后把拉力车身尽可能升满。升满车身可以更快速的赢得比赛，比如拿下前两场积6分的同时，其他对手没有超过3分的，那么第三个图就可以直接自杀结束，节省时间。</li>
      <li>游戏初始阶段，杯赛会相对难跑，因为匹配的对手车库很可能会比你好。而达到传奇之后，杯赛反而就容易了。如果腰包允许的话，可以考虑一开始就买个拉力礼包，这样马上就有拉力赛车，不必等到白金III。</li>
      <li>不是所有图难度都相似的。有些图，比如水底图，你会发现系统匹配的对手都很强。这种情况就直接认输退出，被扣180分，再争取从下一场比赛中追回。如果你花时间去跑这些图，很可能辛辛苦苦跑了3场，还是最后一名。</li>
      <li>游戏初始阶段，不少配件都还没有。这时候，有啥带啥。当各种配件差不多都有了之后（当然，离满级还差很多），我推荐带机翼，涡轮增压和金币加速。这3个配件加在拉力车上，基本各个图都能跑赢，除了几个高山图和水底图。也有些玩家喜欢带雪地轮胎或者超频引擎。</li>
      <li>看广告免费升级（或者有VIP的话直接免费升级）的机会不要浪费。可以先升贵的车（车库靠右边的那些车），和有用的配件（磁铁，机翼，雪地轮胎，起步加速，独轮加速，尾气加速，弹簧）。</li>
      <li>每个车子都有4个组件，但不是每个组件都一样有用的。总体来说，引擎和轮胎都很有用。悬挂其次，可以升到比引擎低两三级的水平。其他一些对杯赛没有帮助的组件，比如登山赛车Mk2和沙丘越野车的护架(Rollcage)，拖拉机的破坏力(Damage)，则可以暂时不升。需要注意的是靠后面的几个车的下压力(Downforce)或气闸(Air Brake)在某些赛道上很有用，但在某些赛道上反而调整1更好，所以也可以暂时不升。</li>
      <li>到达金I后，马上加入团队。加入团队可以额外获得不少金币和配件。</li>
      <li>所有赛车和配件列表：<a href="lists-of-everything.php?lang=zh">点这里</a></li>
      <li>升级成本：<a href="upgrade-cost.php?lang=zh">点这里</a></li>
    </ul>

    <h3>配件升级攻略</h3>
    <p>赢取杯赛和竞速所需要的配件是不同的。对于赢取杯赛而言，通常需要的是稳定。这几个配件都是很有用的：翅膀，冬胎，涡轮增压(过充涡轮)，金币加速。而对于竞速而言，不同的图就需要用到不同的配件：除了刚提到的那几个，起步加速，独轮加速，低燃加速，弹簧，落地加速，超频引擎(后燃)，燃料加速(蓝瓶)，推进器(铃铛)，都可能需要用到。</p>

    <p>游戏初期金币要省着用。在买到拉力之前，可以只用看广告免费升级的机会，升级翅膀和冬胎。尽早买下拉力后，升级翅膀，冬胎，涡轮增压(过充涡轮)，金币加速。</p>

    <h3>每个赛道的竞速攻略</h3>
    <p>看游戏里大佬的视频录象，然后跟着跑。建议先把需要用到的车子和配件怼满。</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
