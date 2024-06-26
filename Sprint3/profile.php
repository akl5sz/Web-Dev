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
              <li class="nav-item"><a href="?command=feed" class="nav-link active" aria-current="page">Feed</a></li>
              <li class="nav-item"><a href="?command=playlists" class="nav-link">Playlists</a></li>
              <li class="nav-item"><a href="?command=discover" class="nav-link">Discover</a></li>
              <li class="nav-item"><a href="?command=friends" class="nav-link">Friends</a></li>
            </ul>
      
            <div class="col-md-3">
              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 col-xl-6" role="search">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            </div>
          </header>
        </div>
        <div class="padding"></div>

        <br>


        <!-- Media Filtering Buttons -->
        <div class="position-fixed p-5 bottom-0 end-0 mb-3 me-3" style="width: 170px; height: 170px;">
          <button type="button" class="position-absolute top-0 end-0 p-3 m-5 bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"><img src="https://static.vecteezy.com/system/resources/thumbnails/009/346/118/small/musical-note-flat-icon-png.png" width="25" height="25" alt="musical note"></button>
          <button type="button" class="position-absolute bottom-0 start-0 p-3 m-2 bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"><img src="https://uxwing.com/wp-content/themes/uxwing/download/video-photography-multimedia/movie-icon.png" width="25" height="25" alt="movie icon"></button>
          <button type="button" class="position-absolute bottom-0 end-0 p-3 m-1 bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"><img src="https://static.vecteezy.com/system/resources/thumbnails/009/351/700/small/tv-show-icon-sign-design-free-png.png" width="26" height="26" alt="tv-show screen"></button> 
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