<html>
<head>
    
    <title>OMDb API</title>
</head>
<body>
   
    <h1 align ="center" id="judul">Database movie dari OMDb API</h1>
    <div class="search-container">
        <form action="<?php echo site_url('api/search'); ?>" method="post">
            <input type="text" name="searchValue" id="search-input" placeholder="masukkan kata kunci film..."required>
            <button type="submit" id="search-button">Search</button>
        </form>
    </div>
</body>
</html>