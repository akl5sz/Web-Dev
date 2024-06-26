<?php
/**
 * Database Class
 *
 * Contains connection information to query PostgresSQL.
 */


class Database {
    private $dbHandle;

    /**
     * Constructor
     *
     * Connects to PostgresSQL
     */
    public function __construct() {
        $host = Config::$db["host"];
        $user = Config::$db["user"];
        $database = Config::$db["database"];
        $password = Config::$db["pass"];
        $port = Config::$db["port"];

        $this->dbHandle = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");
        
        // if ($this->dbHandle) {
        //     echo "Success connecting to database";
        // } else {
        //     echo "An error occurred connecting to the database";
        // }
    
        // $res  = pg_query($this->dbHandle, "drop table if exists users;");

        $res  = pg_query($this->dbHandle, "create table if not exists users (
                username text primary key,
                name text,
                email text,
                password text);");

        //https://stackoverflow.com/questions/4069718/postgres-insert-if-does-not-exist-already
        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);", 
                        'akl5sz','Angie', 'akl5sz@virginia.edu', password_hash('j03m4m4', PASSWORD_DEFAULT));
            
        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);",
                        'nyt8te','Jackie', 'nyt8te@virginia.edu', password_hash('urmuth4', PASSWORD_DEFAULT));

        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);",
                        'jnx6xp','Hannah', 'jnx6xp@virginia.edu', password_hash('lol', PASSWORD_DEFAULT));

        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);",
                        'maya','Maya', 'maya@gw.edu', password_hash('maya123', PASSWORD_DEFAULT));
        
        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);", 
                        'exevolt','Daani', 'exevolt@gmail.com', password_hash('nukacola', PASSWORD_DEFAULT));

        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);", 
                        'exevoltspam','Daani\'s Spam', 'exevoltspam@gmail.com', password_hash('nukacolahehe', PASSWORD_DEFAULT));

        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);", 
                        'wisesometimes','Jayla', 'wisesometimes@gmail.com', password_hash('robloxchangedmylife', PASSWORD_DEFAULT));

        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);", 
                        'zolt','Dylan', 'dylangamer@gmail.com', password_hash('pokemonandharrypotter', PASSWORD_DEFAULT));

        $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);", 
                        'batman','shruti', 'shruti@gmail.com', password_hash('batman', PASSWORD_DEFAULT));

         $res = $this->query("
                INSERT INTO users (username, name, email, password)
                SELECT $1, $2, $3, $4
                WHERE NOT EXISTS (
                        SELECT 1 FROM users WHERE username = $1);", 
                        'spiderman','swetha', 'swetha@gmail.com', password_hash('spiderman', PASSWORD_DEFAULT));

                
        $res  = pg_query($this->dbHandle, "create table if not exists movies (
                title text,
                year int,
                rating text,
                director text,
                hours int,
                minutes int,
                description text,
                primary key (title, year));");
            
        $res = $this->query("
                INSERT INTO movies (title, year, rating, director, hours, minutes, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM movies
                        WHERE title = $1 AND year = $2 AND rating = $3 AND director = $4);", 
                        'The Muppet Movie', 1979, 'G', 'James Frawley', 1, 37, 'After Kermit the Frog decides to pursue a movie career, he starts his cross-country trip from Florida to California. Along the way, he meets and befriends Fozzie Bear, Miss Piggy, Gonzo and rock musicians Dr. Teeth and the Electric Mayhem. When Kermit is offered a job by Doc Hopper (Charles Durning) to advertise the fried frog legs at his restaurant chain, Kermit turns Hopper down. However, Hopper refuses to relent and pursues Kermit and his companions to a final showdown.');
                    
        $res = $this->query("
                INSERT INTO movies (title, year, rating, director, hours, minutes, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM movies
                        WHERE title = $1 AND year = $2 AND rating = $3 AND director = $4);", 
                        'The Hunger Games', 2012, 'PG-13', 'Gary Ross', 2, 26, 'In what was once North America, the Capitol of Panem maintains its hold on its 12 districts by forcing them each to select a boy and a girl, called Tributes, to compete in a nationally televised event called the Hunger Games. Every citizen must watch as the youths fight to the death until only one remains. District 12 Tribute Katniss Everdeen (Jennifer Lawrence) has little to rely on, other than her hunting skills and sharp instincts, in an arena where she must weigh survival against love.');
        
        $res = $this->query("
                INSERT INTO movies (title, year, rating, director, hours, minutes, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM movies
                        WHERE title = $1 AND year = $2 AND rating = $3 AND director = $4);", 
                        'Coraline', 2009, 'PG', 'Henry Selick', 1, 40, 'Wandering her rambling old house in her boring new town, an 11-year-old Coraline discovers a hidden door to a strangely idealized version of her life. In order to stay in the fantasy, she must make a frighteningly real sacrifice.');
        
        $res = $this->query("
                INSERT INTO movies (title, year, rating, director, hours, minutes, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM movies
                        WHERE title = $1 AND year = $2 AND rating = $3 AND director = $4);", 
                        'Bee Movie', 2007, 'PG', 'Simon J. Smith', 1, 31, 'Barry B. Benson, a bee just graduated from college, is disillusioned at his lone career choice: making honey. On a special trip outside the hive, Barry\'s life is saved by Vanessa, a florist in New York City. As their relationship blossoms, he discovers humans actually eat honey and subsequently decides to sue them.');
        
        $res = $this->query("
                INSERT INTO movies (title, year, rating, director, hours, minutes, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM movies
                        WHERE title = $1 AND year = $2 AND rating = $3 AND director = $4);", 
                        'Chicken Run', 2000, 'G', 'Nick Park', 1, 24, 'When a cockerel apparently flies into a chicken farm, the chickens see him as an opportunity to escape their evil owners.');
        
        $res = $this->query("
                INSERT INTO movies (title, year, rating, director, hours, minutes, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM movies
                        WHERE title = $1 AND year = $2 AND rating = $3 AND director = $4);", 
                        'Shrek', 2001, 'PG', 'Andrew Adamson', 1, 30, 'A mean lord exiles fairytale creatures to the swamp of a grumpy ogre, who must go on a quest and rescue a princess for the lord in order to get his land back.');
        
        $res = $this->query("
                INSERT INTO movies (title, year, rating, director, hours, minutes, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM movies
                        WHERE title = $1 AND year = $2 AND rating = $3 AND director = $4);", 
                        'Fifty Shades of Grey', 2015, 'R', 'Sam Taylor-Johnson', 2, 5, 'Literature student Anastasia Steele\'s life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.');

        $res  = pg_query($this->dbHandle, "create table if not exists tvshows (
                title text,
                year int,
                rating text,
                creator text,
                episodes int,
                seasons int,
                description text,
                primary key (title, year));");

         $res = $this->query("
                INSERT INTO tvshows (title, year, rating, creator, episodes, seasons, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM tvshows
                        WHERE title = $1 AND year = $2 AND rating = $3 AND creator = $4 AND episodes = $5 AND seasons = $6 AND description = $7);", 
                        'Rupaul\'s Drag Race', 2009, 'TV-14', 'RuPaul Andre Charles', 207, 16, '"RuPaul\'s Drag Race" is a reality show in which a group of talented drag queens compete in challenges to impress host RuPaul, the world\'s most famous drag queen, to win a cash prize along with a crown and the title of America\'s Next Drag Superstar. Each episode consists of a main challenge, usually some form of performance or fashion design -- sometimes both. The queens then participate in a themed runway show, where one is declared the winner of that week, while two others are announced to be up for elimination. The bottom two must then compete to stay on the show with a lip-sync for their lives.');
        
        $res = $this->query("
                INSERT INTO tvshows (title, year, rating, creator, episodes, seasons, description)
                SELECT $1, $2, $3, $4, $5, $6, $7
                WHERE NOT EXISTS (
                        SELECT 1 FROM tvshows
                        WHERE title = $1 AND year = $2 AND rating = $3 AND creator = $4 AND episodes = $5 AND seasons = $6 AND description = $7);", 
                        '9-1-1', 2018, 'TV-14', 'Brad Falchuk, Tim Minear, and Ryan Murphy', 104, 7, 'Ryan Murphy, Brad Falchuk and Tim Minear reimagine the procedural drama with "9-1-1." The series explores the high-pressure experiences of first responders -- including police officers, firefighters and dispatchers -- who are thrust into the most frightening, shocking and heart-stopping situations. These emergency responders must try to balance saving those who are at their most vulnerable with solving the problems in their own lives. The show draws from real-life, high-pressure experiences of first responders who regularly face heart-stopping situations that are often unpredictable, intense and uplifting at the same time.');                

        $res  = pg_query($this->dbHandle, "create table if not exists songs (
                title text,
                year int,
                artist text,
                album text,
                minutes int,
                seconds int,
                primary key (title, year, artist));");
                
        $res = $this->query("
                INSERT INTO songs (title, year, artist, album, minutes, seconds)
                SELECT $1, $2, $3, $4, $5, $6
                WHERE NOT EXISTS (
                        SELECT 1 FROM songs
                        WHERE title = $1 AND year = $2 AND artist = $3 AND album = $4 AND minutes = $5 AND seconds = $6);", 
                        'Ivy', 2020, 'Taylor Swift', 'Evermore', 4, 20);
                        
        $res = $this->query("
                INSERT INTO songs (title, year, artist, album, minutes, seconds)
                SELECT $1, $2, $3, $4, $5, $6
                WHERE NOT EXISTS (
                        SELECT 1 FROM songs
                        WHERE title = $1 AND year = $2 AND artist = $3 AND album = $4 AND minutes = $5 AND seconds = $6);", 
                        'Espresso', 2024, 'Sabrina Carpenter', 'Espresso', 2, 56); 
                        
        $res = $this->query("
                INSERT INTO songs (title, year, artist, album, minutes, seconds)
                SELECT $1, $2, $3, $4, $5, $6
                WHERE NOT EXISTS (
                        SELECT 1 FROM songs
                        WHERE title = $1 AND year = $2 AND artist = $3 AND album = $4 AND minutes = $5 AND seconds = $6);", 
                        'greedy', 2023, 'Tate McRae', 'THINK LATER', 2, 14);
                        
        $res = $this->query("
                INSERT INTO songs (title, year, artist, album, minutes, seconds)
                SELECT $1, $2, $3, $4, $5, $6
                WHERE NOT EXISTS (
                        SELECT 1 FROM songs
                        WHERE title = $1 AND year = $2 AND artist = $3 AND album = $4 AND minutes = $5 AND seconds = $6);", 
                        'Drama', 2020, 'TOMORROW X TOGETHER', 'The Dream Chapter: ETERNITY', 3, 29);                    
        
        $res  = pg_query($this->dbHandle, "create table if not exists movie_genres (
                genre text,
                title text,
                year int,
                primary key (genre, title, year),
                foreign key (title, year) references movies (title, year));");


        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'The Muppet Movie', 1979, 'Musical');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'The Muppet Movie', 1979, 'Adventure');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'The Hunger Games', 2012, 'Action');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'The Hunger Games', 2012, 'Sci-Fi');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Coraline', 2009, 'Animation');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Coraline', 2009, 'Drama');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Coraline', 2009, 'Family');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Bee Movie', 2007, 'Animation');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Bee Movie', 2007, 'Adventure');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Bee Movie', 2007, 'Comedy');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Chicken Run', 2000, 'Animation');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Chicken Run', 2000, 'Adventure');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Chicken Run', 2000, 'Comedy');

        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Shrek', 2001, 'Animation');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Shrek', 2001, 'Adventure');
            
        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Shrek', 2001, 'Comedy');

        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Fifty Shades of Grey', 2015, 'Drama');

        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Fifty Shades of Grey', 2015, 'Romance');

        $res = $this->query("
                INSERT INTO movie_genres (title, year, genre)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                    SELECT 1 FROM movie_genres
                    WHERE title = $1 AND year = $2 AND genre = $3);", 
                    'Fifty Shades of Grey', 2015, 'Thriller');
        

        $res  = pg_query($this->dbHandle, "create table if not exists favorite_movies (
                username text,
                title text,
                year int,
                primary key (username, title, year),
                foreign key (username) references users (username),
                foreign key (title, year) references movies (title, year));");

        $res = $this->query("
                INSERT INTO favorite_movies (username, title, year)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                        SELECT 1 FROM favorite_movies
                        WHERE username = $1 AND title = $2 AND year = $3);",
                        'nyt8te', 'The Hunger Games', 2012);
                    
        $res = $this->query("
                INSERT INTO favorite_movies (username, title, year)
                SELECT $1, $2, $3
                WHERE NOT EXISTS (
                        SELECT 1 FROM favorite_movies
                        WHERE username = $1 AND title = $2 AND year = $3);",
                        'nyt8te', 'The Muppet Movie', 1979);   
        //username title year primary/foreign, comment 

        $res = pg_query($this->dbHandle, "create table if not exists movie_comments ( 
                username text,
                title text,
                year int,
                comment text,
                timestamp_column TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                primary key (username, title, year, comment),
                foreign key (username) references users (username),
                foreign key (title, year) references movies (title, year));");

        $res = pg_query($this->dbHandle, "create table if not exists tvshow_comments ( 
                username text,
                title text,
                year int,
                comment text,
                timestamp_column TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                primary key (username, title, year, comment),
                foreign key (username) references users (username),
                foreign key (title, year) references tvshows (title, year));");

        $res = pg_query($this->dbHandle, "create table if not exists song_comments ( 
                username text,
                title text,
                year int,
                artist text,
                comment text,
                timestamp_column TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                primary key (username, title, year, artist, comment),
                foreign key (username) references users (username),
                foreign key (title, artist, year) references songs (title, artist, year));");
        
     
                        
        pg_query($this->dbHandle, "create table if not exists friends ( 
                username text,
                friend_username text,
                foreign key (username) references users (username),
                foreign key (friend_username) references users (username),
                constraint friendship unique (username, friend_username));");

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'nyt8te');
            
        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'nyt8te', 'maya');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'maya', 'nyt8te');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'nyt8te', 'jnx6xp');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'jnx6xp', 'nyt8te');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'jnx6xp');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'jnx6xp', 'akl5sz');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'maya');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'maya', 'akl5sz');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'exevolt');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'exevolt', 'akl5sz');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'wisesometimes');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'wisesometimes', 'akl5sz');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'zolt');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'zolt', 'akl5sz');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'batman');
        
        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'batman', 'akl5sz');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'akl5sz', 'spiderman');

        // $res = $this->query("
        //         INSERT INTO friends (username, friend_username)
        //         SELECT $1, $2
        //         WHERE NOT EXISTS (
        //                 SELECT 1 FROM friends
        //                 WHERE username = $1 AND friend_username = $2);",
        //                 'spiderman', 'akl5sz');

        // profile pictures table
        $res  = pg_query($this->dbHandle, "create table if not exists pfps (
                username text,
                pfp_hyperlink text,
                primary key (username, pfp_hyperlink),
                foreign key (username) references users (username));");

              
        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'jnx6xp',
                'https://i.pinimg.com/236x/f3/85/d7/f385d78eba93e8b768bcc04bf96fe5a5.jpg');

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'maya',
                'https://i.redd.it/5560va6tsg191.jpg');

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'akl5sz',
                'https://i1.sndcdn.com/avatars-000583246488-dhm5la-t500x500.jpg');

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'nyt8te',
                'https://i.etsystatic.com/30677692/r/il/71638b/3580232855/il_fullxfull.3580232855_q0k0.jpg');

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'exevolt',
                'https://www.digitaltrends.com/wp-content/uploads/2021/02/apex-legends-octane-1.jpg?p=1');

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'wisesometimes',
                'https://i.chzbgr.com/full/9741560320/hBB2D8409'); 

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'zolt',
                'https://img.lemde.fr/2022/12/22/5/0/1730/865/1342/671/60/0/e968e4d_1671703423578-b5e.jpeg'); 

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'batman',
                'https://i5.walmartimages.com/seo/DC-LEGO-Batman-Movie-Fairy-Batman-Minifigure_c4ea0ac4-a343-4e78-acf8-4fc03399ac2a.d810035597d5b56ae23b176e2c4c8c58.jpeg'); 

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'spiderman',
                'https://uploads.dailydot.com/2023/12/Spoderman.jpg?auto=compress&fm=pjpg');    

        $res = $this->query("
                INSERT INTO pfps (username, pfp_hyperlink)
                VALUES ($1, $2)
                ON CONFLICT DO NOTHING;",
                'exevoltspam',
                'https://www.pcgamesn.com/wp-content/sites/pcgamesn/legacy/vault_boy.png');  
                
        $res = pg_query($this->dbHandle, "create table if not exists playlists ( 
                username text,
                name text,
                description text,
                image text,
                movienum int default 0,
                tvshownum int default 0,
                songnum int default 0,
                likes int default 0,
                primary key (username, name, description),
                foreign key (username) references users (username));");

        $res = pg_query($this->dbHandle, "create table if not exists playlists ( 
                username text,
                name text,
                description text,
                image text,
                movienum int default 0,
                tvshownum int default 0,
                songnum int default 0,
                likes int default 0,
                primary key (username, name, description),
                foreign key (username) references users (username));");
    }

    
    

    /**
     * Query
     *
     * Makes a query to posgres and returns an array of the results.
     * The query must include placeholders for each of the additional
     * parameters provided.
     */
    public function query($query, ...$params) {
        $res = pg_query_params($this->dbHandle, $query, $params);

        if ($res === false) {
            echo pg_last_error($this->dbHandle);
            return false;
        }

        return pg_fetch_all($res);
    }
}