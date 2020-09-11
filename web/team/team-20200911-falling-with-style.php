<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
  Event name: Falling with Style
    <ul>
      <li>Stage 1: Time attack - event map. 10k: 70s</li>
      <li>Stage 2: Time attack - soccer, event map. 10k: 15s</li>
      <li>Stage 3: No fuel; drive as far as you can. Adventure map - "Winter". 10k: 1200m</li>
      <li>Stage 4: Time attack - event map. 10k: 17s</li>
    </ul>
  </p>

  <h3>Allowed vehicles</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>比赛模式</h3>
  <p>
  活动名字：坠落艺术 (Falling with Style)
    <ul>
      <li>图1：竞速，活动图。满分线：70s</li>
      <li>图2：踢球。满分线：15s</li>
      <li>图3：无补给油，跑越远越好。冒险图 - 冬季。满分线：1200m</li>
      <li>图4：竞速，活动图。满分线：17s</li>
    </ul>
  </p>

  <h3>可用车辆</h3>
<?php endif; ?>

  <p>
    <img class="allowed" src="../img/vehicles/vehicle-08-sports-car.png" alt="sports-car">
    <img class="allowed" src="../img/vehicles/vehicle-09-monster-truck.png" alt="monster-truck">
    <img class="allowed" src="../img/vehicles/vehicle-10-super-diesel.png" alt="super-diesel">
    <img class="allowed" src="../img/vehicles/vehicle-14-monowheel.png" alt="monowheel">
    <img class="allowed" src="../img/vehicles/vehicle-15-rally-car.png" alt="rally-car">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>

  <p> <img src="../img/team/team-20200911-scoresheet.jpg" alt="team--scoresheet"> </p>
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
        <button onclick="cal_score(4, [['s', 70, 174.8],
                                       ['s', 15, 37.5],
                                       ['m', 0.01, 1200],
                                       ['s', 17, 42.5]])">
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
  <p>30k points by io&oi</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/VKyJfs48iPM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php elseif ($lang == 'zh'): ?>
  <h3>视频</h3>
  <p class="top_play">
    io&oi 3万分。
    <video width="640" controls>
      <source src="../img/team/team-20200911-30k-io&oi.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
<?php endif; ?>
