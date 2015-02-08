<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='description' content='free flashcard application' http-equiv='X-UA-Compatible'>
  <meta content='width=device-width, initial-scale=1' name='viewport'>
  <title> Senior Design Project </title>
  <link sizes='16x16, 32x32, 64x64' type='image/x-icon' rel='icon' href='favicon.ico?v=1'></link>
</head>
<body>
  <header class='page-header'>
    <div class='container'>
      <nav>
        <a class='nav-item brand' href='./'>
          Panini
        </a>
        <a class='nav-item <?php echo $active == 'reports' ? "active" : ''; ?>' href='./reports.php'>
          Project Reports
        </a>
        <a class='nav-item <?php echo $active == 'documentation' ? "active" : ''; ?>' href='./documentation.php'>
          Design Documentation
        </a>
      </nav>
    </div>
  </header>
  <div class='page-content'>