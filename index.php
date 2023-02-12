<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高考倒计时</title>
    <style>
      /* 背景图片 */
      body {
        background-image: url(http://tu.cao.pw/i/vip_1/63d77127ca3fa.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }

      /* 倒计时显示 */
      #countdown {
        font-size: 36px;
        color: #fff;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      /* 字体颜色 */
      .text {
        color: #fff;
      }

      /* 页脚文字样式 */
      .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        color: #fff;
        padding: 10px;
      }

      /* 控制音乐图标样式 */
      .music-control {
        display: inline-block;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <div id="countdown">
      <p class="text">距离2024年高考还有</p>
      <p id="time" class="text"></p>
    </div>

    <!-- 背景音乐 -->
    <audio id="bg-music" src="https://yun.cao.pw/f/Bksb/%E5%B9%B3%E5%87%A1%E4%B9%8B%E8%B7%AF.mp3" autoplay loop></audio>
    <p class="text music-control">
      Music: <span id="music-name">平凡之路</span>
      <button onclick="document.getElementById('bg-music').play()">播放</button>
      <button onclick="document.getElementById('bg-music').pause()">暂停</button>
      <button onclick="changeMusic(-1)">上一首</button>
      <button onclick="changeMusic(1)">下一首</button>
    </p>

    <!-- 脚本实现倒计时 -->
    <script>
      // 高考日期，请根据实际情况更改
      var examDate = new Date("2024-06-07T00:00:00");
      setInterval(function() {
        var currentTime = new Date();
        var timeLeft = examDate - currentTime;
        var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
        document.querySelector("#time").innerHTML =
          days + "天 " + hours + "小时 " + minutes + "分钟 " + seconds + "秒";
      }, 1000);
    </script>
  </body>
</html>
