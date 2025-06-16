<!DOCTYPE html>
<!-- ICS2O-Unit6-04-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Jokes API, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Lynn Lukose" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Jokes API, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">A Random Useless Fact, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/FUNFACT.png" alt="Image of a light bulb with the words 'FUN FACT' on top of it." />
      </div>
      <div class="page-content">Random Fact</div>
      <br />
      <form action="answer.php" method="GET">
        <!-- Simple Textfield for integers-->
        <form action="#">
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            onclick="getWeather()">
            Click for a random fact!
          </button>
        </div>
      </form>
    <br />
  <div class="page-content-answer">
    <div id="randomFact"></div>
  </div>
  </main>
  </div>
</body>

</html>