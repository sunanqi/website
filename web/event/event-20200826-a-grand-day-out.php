<?php if ($lang == 'en'): ?>
  <h3>Event Info</h3>
  <p>Name: A Grand Day Out</p>
  <p>Start date and time: 2020-08-26 01:00PM EEST (finland time)</p>
  <p>Duration: 5d 1h</p>
  <p>Goal: stunt on the moon</p>
  <p>Rewards:
<?php elseif ($lang == 'zh'): ?>
  <h3>活动信息</h3>
  <p>名字: A Grand Day Out (月球野餐行)</p>
  <p>开始时间: 2020-08-26 6:00PM (北京时间)</p>
  <p>活动时长: 5天 1小时</p>
  <p>目标: 在月球上表演特技</p>
  <p>奖励：
<?php endif; ?>
    <img class="rewards" src="../img/event/event-20200826-rewards1.jpg" alt="">
    <img class="rewards" src="../img/event/event-20200826-rewards2.jpg" alt="">
    <img class="rewards" src="../img/event/event-20200826-rewards3.jpg" alt="">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>High scores</h3>
  <ul>
    <li>Tunnel route: 359m</li>
  </ul>

  <ul>
    <li>Two Passages: 260m</li>
  </ul>

  <ul>
    <li>Moon Loops: 309m</li>
  </ul>

  <ul>
    <li>Moon Jumps</li>
  </ul>

  <ul>
    <li>Lunar Base: 349m</li>
  </ul>

  <ul>
    <li>Rocket Jump: 399m</li>
  </ul>

  <ul>
    <li>Over the Base: 384m</li>
  </ul>

  <ul>
    <li>Depth of the Moon: 199m</li>
  </ul>

  <ul>
    <li>Antenna Field: 349m</li>
  </ul>

<?php elseif ($lang == 'zh'): ?>
  <h3>高分截图</h3>
  <h3>High scores</h3>
  <ul>
    <li>Tunnel route: 359m</li>
    <video width="640" controls>
      <source src="../img/event/event-20200826-tunnel-route-油笔.mp4" type='video/mp4'>
        Your browser does not support the video tag.
    </video>
  </ul>

  <ul>
    <li>Two Passages: 260m</li>
    <img src="img/event/event-20200826-two-passages-leo.png" alt="">
    来自之前活动的视频
    <video width="640" controls>
      <source src="../img/event/event-20200826-two-passages-leo.mp4" type='video/mp4'>
        Your browser does not support the video tag.
    </video>
  </ul>

  <ul>
    <li>Moon Loops: 309m</li>
  </ul>

  <ul>
    <li>Moon Jumps: 399m</li>
  </ul>

  <ul>
    <li>Lunar Base: 349m</li>
  </ul>

  <ul>
    <li>Rocket Jump: 399m</li>
  </ul>

  <ul>
    <li>Over the Base: 384m</li>
  </ul>

  <ul>
    <li>Depth of the Moon: 199m</li>
    来自之前队赛截图和视频
    <img src="../img/event/event-20200826-depth-of-the-moon-leo.png" alt="">
    <video width="640" controls>
      <source src="../img/event/event-20200826-depth-of-the-moon-leo.mp4" type='video/mp4'>
        Your browser does not support the video tag.
    </video>
  </ul>

  <ul>
    <li>Antenna Field: 349m</li>
  </ul>
<?php endif; ?>
