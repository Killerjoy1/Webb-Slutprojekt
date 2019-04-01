<!DOCTYPE html>

<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Mall för slutprojekt</title>
    <link href="style.css" rel="stylesheet">
</head>
<body id="blog">
  <div id="wrapper">
    <!--Ska ligga i egen fil-->
    <header>
        <h1>Välkomna till min djurblogg</h1>
    </header>
    
    <!--Ska ligga i egen fil-->
    <nav>
        <ul>
            <li><a href="index.html">Startsida</a></li>
            <li><a href="blog.html">Blogg</a></li>
            <li><a href="admin.html">Administration</a></li>
            <li><a href="login.html">Logga in</a></li>
        </ul>
    </nav>
    
    <main>
        <h2>Min blogg</h2>
       
        <!-- Inlägg ska hämtas från en databas eller laddas in via ett formulär-->
        <article>
          <h3>En artikel om hundar</h3>
          <p><small>Postad 2019-02-12 av Kalle</small></p>
          <p>En hund är ett fyrbent djur</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
          
          <!--Kommentarer-->
          <article>
            <h4>Intressant artikel</h4>
            <p><small>Postad 2019-02-12 av Kalle</small></p>
            <p class="italic">Mycket läsvärt om hundar</p>
          </article>
         
        </article>
        <article>
          <h3>En artikel om katter</h3>
          <p><small>Postad 2019-02-12 av Kalle</small></p>
          <p>En katt är också ett fyrbent djur</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
        </article>
        
        <article>
          <h3>En artikel om fiskar</h3>
          <p><small>Postad 2019-02-12 av Kalle</small></p>
          <p>En fisk lever i vattnet</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
        </article>
    </main>
    
    <!--Ska ligga i egen fil-->
    <footer>Denna sida är skapad av Kalle för kursen Webbserverprogrammering 1</footer>
  </div>
</body>
</html>
