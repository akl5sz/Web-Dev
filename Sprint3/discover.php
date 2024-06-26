<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jacqueline Lainhart and Angie Loayza">
    <meta name="description" content="Social media website surrounding movies, tv shows, and music.">  
    <meta name="keywords" content="movies, tv shows, tv series, music, social media, forums">  
     
    <title>Mediac</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
     
    </head>

    <body class="d-flex flex-column min-vh-100">
      <!-- Navbar -->
      <div class="container-fluid fixed-top">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
          <div class="col-md-3 mb-2 mb-md-0"></div>
   
          <ul class="nav nav-pills mr-auto">
            <li class="nav-item"><a href="?command=feed" class="nav-link" aria-current="page">Feed</a></li>
            <li class="nav-item"><a href="?command=playlists" class="nav-link">Playlists</a></li>
            <li class="nav-item"><a href="?command=discover" class="nav-link active">Discover</a></li>
            <li class="nav-item"><a href="?command=friends" class="nav-link">Friends</a></li>
          </ul>

          <div class="col-md-3">
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 col-xl-6" role="search">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          </form>
          </div>
        </header>
      </div>

      <!-- Category Buttons -->
      <div class="padding"></div>
        <div class="container">
          <div class="row justify-content-center py-5">
            <div class="col-auto">
                <button class="btn btn-light rounded-pill px-3" type="button">Trending</button>
                <button class="btn btn-light rounded-pill px-3" type="button">Horror</button>
                <button class="btn btn-light rounded-pill px-3" type="button">Action</button>
                <button class="btn btn-light rounded-pill px-3" type="button">Science Fiction</button>
                <button class="btn btn-light rounded-pill px-3" type="button">Drama</button>
                <button class="btn btn-light rounded-pill px-3" type="button">Comedy</button>
                <button class="btn btn-light rounded-pill px-3" type="button">Romance</button>
                <button class="btn btn-light rounded-pill px-3" type="button">Crime</button>
              </div>
          </div>
        </div>

      <!-- Media Cards -->
      <div class="card mb-3 mx-auto bordered" style="max-width: 540px;margin-top: 10px;">
        <div class="row g-0">
          <div class="col-md-4 d-flex align-items-center">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/36/Coraline_poster.jpg/220px-Coraline_poster.jpg" class="img-fluid rounded-start playlist-card" alt="The Muppet Show album cover featuring Kermit the Frog holding a microphone with the cast behind him.">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
              <button class="btn btn-primary" type="submit"><i>Show Anyways</i></button>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="card mb-3 mx-auto bordered" style="max-width: 540px;margin-top: 10px;">
        <div class="row g-0">
          <div class="col-md-4 d-flex align-items-center">
            <img src="https://resizing.flixster.com/18icyRbPRhjrgvKB_7-9Z8lNrI0=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzA0MzljODE3LTgzMDMtNGRiOS1iOTM0LTM1ODk1ODMwNDIyOC53ZWJw" class="img-fluid rounded-start playlist-card" alt="The Muppet Show album cover featuring Kermit the Frog holding a microphone with the cast behind him.">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
              <button class="btn btn-primary" type="submit"><i>Show Anyways</i></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="mt-auto">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="?command=feed" class="nav-link px-2 text-body-secondary">Feed</a></li>
            <li class="nav-item"><a href="?command=playlists" class="nav-link px-2 text-body-secondary">Playlists</a></li>
            <li class="nav-item"><a href="?command=discover" class="nav-link px-2 text-body-secondary">Discover</a></li>
            <li class="nav-item"><a href="?command=friends" class="nav-link px-2 text-body-secondary">Friends</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2024 Mediac, Inc</p>
        </footer>
       
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      </script>
    </body>
</html>