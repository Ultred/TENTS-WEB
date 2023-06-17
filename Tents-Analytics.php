<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="icon" href="images\TENTS-ICON.png" />
    <title>Analytics</title>
  </head>
  <body>
    <div class="homepage-background">
      <?php include 'component/header.php'; ?>
      <section class="homepage-analytics">
        <h1>ANALYTICS</h1>
        <p>
          View the scores of every participants in different type of statistics
        </p>
        <div class="homepage-graph">
          <h1 class="homepage-name">Bar Graph</h1>
          <canvas id="barchart"></canvas>
        </div>
        <div class="homepage-graph">
          <h1 class="homepage-name">Pie Chart</h1>
          <canvas id="pie"></canvas>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/Tents.js"></script>
  </body>
</html>
