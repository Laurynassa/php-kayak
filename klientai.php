<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/klientu.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand fs-4" href="./index.php">Mes ir baidarės</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link fs-5" href="./darbuotoju.php"
                >Darbuotojų zona</a
              >
              <a class="nav-link fs-5" href="./klientai.php">Klientų zona</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
        <h1 class="kayakh">Kayak creation</h1>
    <div class="formContainer">
            <form action="submit.php" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br><br>

                <label for="seats">Seats:</label><br>
                <input type="number" id="seats" name="seats"><br><br>

                <label for="price">Price:</label><br>
                <input type="number" step="0.01" id="price" name="price"><br><br>

                <label for="image">Image URL:</label><br>
                <input type="url" id="image" name="image"><br><br>

                <input type="submit" value="Submit">
            </form>
    </div>
    <div>
       <?php 
       include"./infoget.php"?>
    </div>

    <footer><p>2024-03-20 Laurynas Šapnagis</p></footer>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</html>
