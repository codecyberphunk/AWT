<!doctype html>
<html>
<head>
  <title>Indian Digital Clock</title>
  <meta http-equiv="refresh" content="1" />
  <style>
    body {
      text-align: center;
      margin-top: 150px;
      font-family: Arial;
    }

    .clock {
      font-size: 30px;
    }
  </style>
</head>
<body>

  <h3>Indian Digital Clock (IST)</h3>

  <div class="clock">
    <?php
      date_default_timezone_set("Asia/Kolkata");
      echo date("h:i:s A");
    ?>
  </div>

</body>
</html>
