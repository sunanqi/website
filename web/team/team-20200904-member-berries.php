<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
  Event name:　Member Berries
    <ul>
      <li>Stage 1: Time attack; penalty (+0.5s) on each air time. 10k: 13s</li>
      <li>Stage 2: Fly as far as you can (event map - Beach). 10k: 260m</li>
      <li>Stage 3: Wheelie as far as you can (event map - Mountain). 10k: 700m</li>
      <li>Stage 4: Time attack (Cups map: Mountain Bridges->Over the Cliff). 10k: 11.2s</li>
      <li>Stage 5: Time attack (event map - Moon). 10k: 17s</li>
    </ul>
  </p>

  <h3>Allowed vehicles</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>比赛模式</h3>
  <p>
  比赛名字：呼气吸气
    <ul>
      <li>图1：贴地竞速，每个空中时间惩罚0.5秒。满分线: 13秒</li>
      <li>图2：跳远。满分线: 260米</li>
      <li>图3：独轮。满分线: 700米</li>
      <li>图4：竞速。满分线: 11.2秒</li>
      <li>图5：竞速。满分线: 17秒</li>
    </ul>
  </p>

  <h3>可用车辆</h3>
<?php endif; ?>

  <p>
    <img class="allowed" src="../img/vehicles/vehicle-03-bus.png" alt="bus">
    <img class="allowed" src="../img/vehicles/vehicle-07-dune-buggy.png" alt="dune-buggy">
    <img class="allowed" src="../img/vehicles/vehicle-16-formula.png" alt="formula">
    <img class="allowed" src="../img/vehicles/vehicle-18-hot-rod.png" alt="hotrod">*2
    <img class="allowed" src="../img/vehicles/vehicle-21-moonlander.png" alt="moonlander">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>

  <p> <img src="../img/team/team-20200904-scoresheet.jpg" alt="team-20200904-scoresheet"> </p>
  <table id="cal_score">
  <?php if ($lang == 'en'): ?>
    <caption>Calculate your scores:</caption>
    <tr>
      <th>stage</th>
      <th>your result (in sec or meter)</th>
      <th>your score</th>
    </tr>
  <?php elseif ($lang == 'zh'): ?>
    <caption>计算你的分数:</caption>
    <tr>
      <th>图</th>
      <th>你的成绩（秒或者米）</th>
      <th>分数</th>
    </tr>
  <?php endif; ?>

    <tr>
      <td>1</td>
      <td><input name="result1" type="text" size=10 id='num0'></td>
      <td><input type="text" id="score0" readonly></td>
    </tr>
    <tr>
      <td>2</td>
      <td><input name="result2" type="text" size=10 id='num1'></td>
      <td><input type="text" id="score1" readonly></td>
    </tr>
    <tr>
      <td>3</td>
      <td><input name="result3" type="text" size=10 id='num2'></td>
      <td><input type="text" id="score2" readonly></td>
    </tr>
    <tr>
      <td>4</td>
      <td><input name="result4" type="text" size=10 id='num3'></td>
      <td><input type="text" id="score3" readonly></td>
    </tr>
    <tr>
      <td>5</td>
      <td><input name="result5" type="text" size=10 id='num4'></td>
      <td><input type="text" id="score4" readonly></td>
    </tr>
    <tr>
      <td>total</td>
      <td></td>
      <td><input type="text" id="total" readonly></td>
    </tr>
    <tr>
      <td colspan="3">
        <button onclick="cal_score(5, [['s', 13, 40],
                                       ['m', 0.01, 260],
                                       ['m', 0.01, 700],
                                       ['s', 11.2, 30],
                                       ['s', 17, 50]])">
        <?php if ($lang == 'en'): ?>
          Calculate
        <?php elseif ($lang == 'zh'): ?>
          计算
        <?php endif; ?>
        </button>
      </td>
    </tr>
  </table>

<?php if ($lang == 'en'): ?>
  <h3>Videos</h3>
  <p>44036 points with only 1890 Garage Power</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/dIdPOuteqkk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <p>45956 points by vokope</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/X9vgCH268ks" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php elseif ($lang == 'zh'): ?>
  <h3>视频</h3>
  <p class="top_play">
    飞飞 45902 分 <br>
    <iframe src="http://player.bilibili.com/player.html?aid=456895559&bvid=BV1z5411h7ZP&cid=232287989&page=1"
    width="560" height="315"
    scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"> </iframe>
  </p>
  <p class="top_play">
    油笔小号1890车库值跑了4.4w分！！太牛逼了
    <video width="640" controls>
      <source src="img/team/team-20200904-44036-fubuki_merged.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
  <p class="top_play">
    Vokope的 45956 分：
    <video width="640" controls>
      <source src="../img/team/team-20200904-45956-vokope.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
<?php endif; ?>
