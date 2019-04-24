<!DOCTYPE html>

<?php
    session_start();
    include_once("db.php");
?>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Slutprojekt</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
  
  <?php
      $sql = "SELECT * FROM posts ORDER BY id DESC":
      
      $res = mysqli_query($db, $sql) or die(mysqli_error());
      
      $posts="";
      
      if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)) {
          $id = $row['id']:
          $title = $row['title']:
          $content = $row['content']:
          $date = $row['date']:
          
          $admin = "";
           
        }
      }
  ?>
  
  <div id="wrapper">
    <!--Ska ligga i egen fil-->
    <header>
        <h1>Välkomna till Kungensblogg</h1>
    </header>
    
    <!--Ska ligga i egen fil-->
    <nav>
        <ul>
            <li><a href="index.html">Startsida</a></li>
            <li><a href="blog.html">Blogg</a></li>
            <li><a href="admin.html">Administration</a>
            <li><a href="login.html">Logga in</a></li>
        </ul>
    </nav>
    
    <main>
        <p>Välkomna till min nya blogg som handlar om Kungen. Här kan ni diskutera och ställa frågor om Kungen och hans familj som
        ni är intresserade av.</p>
        
        <p>För att skriva på bloggen måste ni vara registrerade och ha ett användarkonto. Det kostar inget
        att registrera sig och skriva på bloggen.</p>
        
    </main>
    
    <!--Ska ligga i egen fil-->
    <footer>Denna sida är skapad av Kungen för Kungens blogg</footer>
  </div>
</body>
</html>
