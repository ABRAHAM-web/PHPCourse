<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dynamic web pages project</title>
    <!-- <link rel="/PHPcourse/GET/DynamicWebPagesProject/" href="styles.css"> -->
    <link href="/PHPcourse/GET/DynamicWebPagesProject/styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="header">
        <div class="headerItems">
          <a style="color:Red" href="RedFile.php"><?php echo "1 Een"; ?></a><div>..</div>
          <a style="color:Purple" href="PurpleFile.php"><?php echo "2 Twee"; ?></a><div>..</div>
          <a style="color:Green" href="GreenFile.php"><?php echo "3 Drie"; ?></a><div>..</div>
          <a style="color:Orange" href="OrangeFile.php"><?php echo "4 Vier"; ?></a>
      </div>
    </div>
    <main>
      <div class="content">
        Hello my geliefde mense.Plaas gerus u inhoud hier binne<br>
        <?php echo "En jou tant antie wat brantie."; ?>
      </div>
      <div class="sidePanel">

        <div style="color : red">1<a href="RedFile.php"><?php echo " Een"; ?></a></div>
        <div style="color : purple`">2<a href="PurpleFile.php"><?php echo " Twee"; ?></a</div>
        <div style="color : green">3<a href="GreenFile.php"><?php echo " Drie"; ?></a></div>
        <div style="color : orange">4<a href="OrangeFile.php"><?php echo " Vier"; ?></a></div>

      </div>
    </main>
    <footer>Hierdie is die voet nota gedeelte</footer>

  </body>
</html>
