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

    <body>
        <div class="py-5"></div>
        <div class="container mt-5 col-md-6">
            <header class="text-center">
                <h1 style="color: #d9d9d9; font-size: 56px;">Sign Up</h1>
            </header>

            <?=$message?>
            <!-- Sign Up Form -->
            <form action="?command=signup-action" method="post" class="registration-form mx-auto">
                <div class="input-line">
                    <input type="text" placeholder="Username" name="username">
                </div>
                <div class="input-line">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="input-line">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="input-line">
                    <input type="text" placeholder="Favorite Movie" name="movie">
                </div>
                <div class="input-line">
                    <input type="text" placeholder="Favorite TV Show" name="tv-show">
                </div>
                <div class="input-line">
                    <input type="text" placeholder="Favorite Music Artist" name="music-artist">
                </div>
                <button type="submit" class="login-btn">Sign Up</button>

                <div class="login-container mx-auto">
                    <p style="color: #d9d9d9; margin-top: 15px;">or</p>

                    <a href="?command=login" class="signup-link">Log In</a> 
                    <!-- double check this -->
                </div>    
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>
</html>