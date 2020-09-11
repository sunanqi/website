<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
  Event name: Spring into action.
    <ul>
      <li>Wheelie as far as you can. Event map (beach). 10k: 350m</li>
      <li>Multi jump as far as you can. It's a part of the Patchwork Plant map. Not a pure multi jump. You need to make use of the magnet above to "fly" as much as you can. 10k: 300m</li>
      <li>Pure time attack. Paradise bay. 10k: 33s.</li>
      <li>No fuel, climb as far as you can. Event map (Mines). It's an old map which we should all be very familiar with. 10k: 500m</li>
    </ul>
  </p>

  <h3>Allowed vehicles</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>比赛模式</h3>
  <p>
    <ul>
      <li>独轮，跑越远越好。杯赛图，海滩。一万分线：350m</li>
      <li>多次弹跳，越远越好. 拼凑工厂的一部分。不是存粹的弹跳。得尽可能利用头顶的电磁铁让车子飞起来。一万分线: 300m</li>
      <li>纯竞速。杯赛图Paradise bay（天堂海湾）。一万分线: 33s.</li>
      <li>无油爬坡。杯赛图 (矿山). 老图了。一万分线: 500m</li>
    </ul>
  </p>

  <h3>可用车辆</h3>
<?php endif; ?>

  <p>
    <img class="allowed" src="../img/vehicles/vehicle-05-tractor.png" alt="tractor">
    <img class="allowed" src="../img/vehicles/vehicle-08-sports-car.png" alt="sports-car">
    <img class="allowed" src="../img/vehicles/vehicle-09-monster-truck.png" alt="monster-truck">
    <img class="allowed" src="../img/vehicles/vehicle-15-rally-car.png" alt="rally-car">
    <img class="allowed" src="../img/vehicles/vehicle-18-hot-rod.png" alt="hotrod">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>

  <p> <img src="../img/team/team-20200814-scoresheet.jpg" alt="team-20200814-scoresheet"> </p>
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
      <td>total</td>
      <td></td>
      <td><input type="text" id="total" readonly></td>
    </tr>
    <tr>
      <td colspan="3">
        <button onclick="cal_score(4, [['m', 0.01, 350],
                                       ['m', 0.01, 300],
                                       ['s', 33, 100],
                                       ['m', 0.01, 500]])">
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
  <p>34130 points by vokope</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/a2JvxCubcS8?start=4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php elseif ($lang == 'zh'): ?>
  <h3>视频</h3>
  <p class="top_play">34130分，vokope
    <video width="640" controls>
      <source src="../img/team/team-20200814-34130-vokope.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">30375, io & oi
    <video width="640" controls>
      <source src="../img/team/team-20200814-30375-io&oi.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
<?php endif; ?>
