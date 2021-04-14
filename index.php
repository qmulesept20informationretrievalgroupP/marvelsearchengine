<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Marvel Universe Search</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
<h1>Hello World</h1>

<body onload="character()">
  <div class="jumbotron">
    <div class="container">
      <h1 class="header-main-title">Marvel Comics Character Search</h1>
      <form id="connectionForm">
        <div class="form-group">
          <input required type="text" name="name" id="name" class="form-control character-search-box"
            placeholder="(Ex. Hulk, Iron Man, Spider-Man, etc...)">
        </div>
        <input type="submit" value="Search!" class="btn btn-danger mb-2 float-right search-character-button">
      </form>
    </div>
  </div>
  <div class="container" id="contentContainer">
    <div class="d-flex align-items-center" id="characterSpinnerSection"></div>
    <div class="d-flex align-items-center" id="comicsSpinnerSection"></div>
    <section id="characterSection"></section>
    <section id="comicSection"></section>
  </div>






<!-- Main Javascript -->
<script src="main.js"></script>

<!-- Bootstrap js -->    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
    

</body>
</html>