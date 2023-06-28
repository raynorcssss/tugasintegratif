<!DOCTYPE html>
<html>
<head>
    <title>Web info movie dengan OMDb API</title>
</head>
<body>
    <h1 align="center" id="judul">Database movie dari OMDb API</h1>
    <div class="search-container">
        <form action="<?php echo site_url('api/search'); ?>" method="post">
            <input type="text" name="searchValue" id="search-input" placeholder="masukkan kata kunci film..."required>
            <button type="submit" id="search-button">Search</button>
        </form>
    </div>
    <div id="movie-list" class="movie-container">
        <?php foreach ($movies as $movie) { ?>
            <div>
                <img src="<?php echo $movie->Poster; ?>" alt="<?php echo $movie->Title; ?>">
                <h2><?php echo $movie->Title; ?> (<?php echo $movie->Year; ?>)</h2>
                <p>IMDb ID: <?php echo $movie->imdbID; ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>