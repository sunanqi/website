<?php
  $title = "Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "中国的车队 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>
<style>
  .teamchina_header {
    background-color: #4AAA31; /* 74,170,49 */
  }

  #team_china_score_table {
    font-size: 16px;
  }

  #team_china_score_table td {
    font-size: 14px;
  }

  #team_china_score_table td.no-wrap-td {
    white-space: nowrap;
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Team China</h3>
    <p>...</p>

    <?php
    if ($lang!='zh') {
      echo "<script type='text/javascript'>location.href = '/web/index.php';</script>";
    }
    ?>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>我们的车队</h3>
    <p>我们有多支车队，无论你是大佬级的玩家，还是刚下载游戏的萌新，都能在我们这里找到合适的车队！所有车队均以中国人为主，但也欢迎全世界各地的华人，以及会说华语的外国人。不会说华语的外国人，只要能为队伍做出一定的贡献，包括里程或者队赛分数，也一样可以入队！快加入我们吧！</p>
      <ul>
        <li><a href="#china">主队 Team China🇨🇳</a></li>
        <li><a href="#china2">二队 Team China²🇨🇳</a></li>
        <li><a href="#dev_1">活跃发育队：“极速王者”，“极速至尊”，“极速传奇”</a></li>
        <li><a href="#dev_2">佛系发育队：“极速上航”，“极速卖萌”</a></li>
        <li><a href="#others">养老队：“极速精灵”</a></li>
      </ul>

    <a id="china"></a>
    <h3>主队 Team China🇨🇳</h3>
    <?php # $team_rank = get_team_rank('team china', 'global') ?>
    <p>Team China是我们所有车队中战力最强的一支，集合了中国绝大部分高手玩家，是所有以中国人为班底的队伍中最强的一支。Team China的前身是极速狂热。历史最高排名第三，之后在Fingersoft几波有争议的严打后，损失多位前排大佬，逐渐下降到15名左右，又逐渐下降到40名左右。目前Team China在CC级（最高级别）联赛中排名 30 ~ 40 名。</p>

    <p>车队距离箱在30级左右。每周每位队员都可以从距离箱获得14w左右金币，50个钻石，12个史诗配件和3个传奇配件。另外，每个赛季末还有赛季奖励，大约105W金币和240钻石。</p>

    <p>入队要求：队赛分数至少在3w分左右（5场比赛的活动至少接近3.75w分）。<span class='in-line-blue-bold'>入队方法</span>：<a href="/web/contact.php?lang=zh">加我们QQ群</a>后联系管理员(即使车队满员了也可以申请入队)。</p>

    <p>上赛季(2022年1月)车队排名 CC级 70多名。本赛季降到 I 级。
    <?php echo "<img src='../img/team-china/tc_20220212.jpg'>";?></p>

    <a id="china2"></a>
    <h3>二队 Team China II</h3>
    <p>Team China二队集合了对队赛有热情但赛车和配件还需要继续升级的玩家，目前在I级联赛排名中游。预计下赛季还是会留在I级。</p>

    <p>车队距离箱在30级左右。每周每位队员都可以从距离箱获得14w左右金币，50个钻石，12个史诗配件和3个传奇配件。另外，每个赛季末还有赛季奖励，大约85W金币和170钻石。</p>

    <p>入队要求：队赛分数至少在2w分左右（5场比赛的活动2.5w分左右），并且每周跑至少50km。<span class='in-line-blue-bold'>入队方法</span>：<a href="/web/contact.php?lang=zh">加我们QQ群</a>后联系管理员(即使车队满员了也可以申请入队)。</p>
    <p>上赛季(2022年1月)车队排名 I 级 中游，本赛季继续留在 I 级联赛。
    <?php echo "<img src='../img/team-china/tc2_20220212.jpg'>";?></p>

    <a id="dev_1"></a>
    <h3>活跃发育队</h3>
    <p>我们有3支活跃发育队：“极速王者”、“极速至尊”、“极速传奇”。活跃发育队适合热情的萌新玩家。目前四支队伍都在 II 级联赛。</p>

    <p>车队距离箱在25级左右。每周每位队员都可以从距离箱获得12w左右金币，50个钻石，12个史诗配件和3个传奇配件。另外，每个赛季末还有赛季奖励，大约64W金币和120钻石。</p>

    <p>入队要求：每周跑至少50km。（这个数字可以在车队的“成员活动”中查看）。没跑到50km的队员请在周一早上8点后尽快领取每周距离箱，然后移步我们的佛系发育队。我们每周一清理不够活跃的玩家，以保持队伍的活跃队和队箱等级。另外，尽可能参加队赛。发育队对队赛分数没有最低要求。<span class='in-line-blue-bold'>入队方法</span>：<a href="/web/contact.php?lang=zh">加我们QQ群</a>后联系管理员(即使车队满员了也可以申请入队)。</p>

    <p>上赛季(2022年1月)车队新开，本赛季所有3支活跃发育队都在 IV 级。
    <img src="../img/team-china/极速王者_20220212.jpg" alt="">
    <img src="../img/team-china/极速至尊_20220212.jpg" alt="">
    <img src="../img/team-china/极速传奇_20220212.jpg" alt="">

    <a id="dev_2"></a>
    <h3>佛系发育队</h3>
    <p>我们有两支活跃发育队：“极速上航”，“极速卖萌”，适合平时工作或者学习较忙，没法保证每天登陆的玩家。两支队伍在 III 级左右。</p>

    <p>车队距离箱在15级左右。每周每位队员都可以从距离箱获得8w左右金币，50个钻石，9个史诗配件。另外，每个赛季末还有赛季奖励，大约53W金币和90钻石。</p>

    <p>入队要求：每周跑至少1km，也就是至少要上线一次稍微跑一下。（这个数字可以在车队的“成员活动”中查看）。考虑到有些队员可能平时要出差或者考试，偶尔一周0km我们也能理解。多次0km的队员我们会定期清理。时间允许的情况下，尽可能参加队赛。发育队对队赛分数没有最低要求。<span class='in-line-blue-bold'>入队方法</span>：<a href="/web/contact.php?lang=zh">加我们QQ群</a>后联系管理员(即使车队满员了也可以申请入队)。</p>

    <img src="../img/team-china/极速上航_20220212.jpg" alt="">
    <img src="../img/team-china/极速卖萌_20220212.jpg" alt="">

    <a id="others"></a>
    <h3>养老队</h3>
    <p>“极速精灵”是我们养老队，适合接近弃游，偶尔还会回来看看的玩家。没有里程要求，0km也可以。一般不清理，除非我们确定某位队员已经彻底弃游。<span class='in-line-blue-bold'>入队方法</span>：<a href="/web/contact.php?lang=zh">加我们QQ群</a>后联系管理员。</p>
    <img src="../img/team-china/极速精灵.jpg" alt="">

    <p>还等毛线？<a href="/web/contact.php?lang=zh">加我们QQ群</a>联系管理员加队伍啊！</p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
