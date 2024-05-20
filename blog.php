<?php
include 'config.php';

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Juma Chaje Portfolio #Software Engineer" content="projects done by Juma Chaje, about, and contacts.">
    <title>Tugas Web</title>
    <link rel="shortcut icon" type="image/png" href="images/juma1.png">



    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="style/style.css">

  </head>

  <body>
    


      <header id="header">
        <div class="logo">
          <h1>Yosefina<span>Lenzun</span></h1>
        </div>
        <div class="menu">
          <div id="menu_btn">
            <p ><i class="fa fa-bars"></i></p>
          </div>
          <nav>
            <ul id="menu">
              <li><a href="index.html#about">About</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="index.html#galery">Gallery</a></li>
              <li><a href="index.html#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>

    <main>




  

      <section id="projects" class="blog">
        <div class="part_1" id="blog">
          <h2>Artikel</h2>
        </div>

   

       
        <div class="part_2">
          <div class="loading_screen">
            <div class="boxLoading"></div>
          </div>

          <div class="container" id="blogContainer">
            <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
             <!--- Projects will be dynamically shown from local json data--->
           <div class="p_cards">
    <div class="p_image">
        <img src="images/<?= $row["image"] ?>" width="100%" height="100%" alt="${project.name} image">
    </div>
    <div class="info">
        <h4><?= $row["deskripsi"] ?></h4>

        <a href="#" target="_blank"><button class="btn">Selengkapnya <i class="fa fa-globe"></i></button></a>
    </div>
</div>
  <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>

          
                
          </div>
         
          
          
        </div>
       
      </section>
     

   

      <footer id="footer">
         <h2>Tugas</h2>
         <p>Pemrograman Web</p>

          <div id="top">
            <p><a href="#section_1"><i class="fa fa-arrow-up"></i></a></p>
          </div>
      </footer>
    </main>
    <script src="script.js"></script>
  </body>
