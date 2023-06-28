<html>
<head>
    
    <title>OMDb API</title>
    <link rel= href="<?php echo base_url('assets/style.css'); ?>">

</head>
<body>

<header>
        <nav class="navbar">
            <a href="#home"><span>Home</span></a> 
            <a href="moviesearch.php"><span>Movie</span></a>
            <a href="database.php"><span>Database</span></a>  
        </nav>
        <style>
            .navbar {
            position: top;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px;
            background: #e2bda5;
            color: #FFA07A;
            font-family: "Poppins";
            box-sizing: border-box;
        }
            .navbar a{
            margin: 6rem 0;
        }
        .navbar a span{
            display: inline-block;
            background: var(--sc-color);
            letter-spacing: 0.1rem;
            margin-right: 1.5rem;
            font-size: 1.4rem;
            transform: translateX(2rem);
            color: var(--min-color);
        }
        .navbar a:hover span{
            transform: translateX(0);
            background: none;
            border: 0.1rem solid var(--sc-color)
        }
    </style>
    </header>
    

    <section class="home" id="home">
        <div class="home-content">
            <div class="content">
                <h2>MOVIE</h2>
            </div>
        </div>
        <style>
        .content{
            background-color:#e2bda5;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        </style>
    </section>
    <div class="search-container">
        <div class="container">
        <form action="<?php echo site_url('api/search'); ?>" method="post">
            <input type="text" name="searchValue" id="search-input" placeholder="masukkan kata kunci film..."required>
            <p> <button type="submit" id="search-button">SEARCH</button>
    </p>
            <style>
            .container{
            background-color:#e2bda5;
            display: flex;
            align-items: center;
            justify-content: center;
            }
            </style>
        </form>
    </div>
     <!-- /home  -->

     <!-- about  -->
    <section class="about" id="about">

            <div class="row">
            </p>
            <div class="box">
                <img src="assets/s1.jpg" alt="image">
                <a>Spiderman 1</a>
                    <p>Peter Parker, remaja yatim piatu yang tinggal bersama bibi dan pamannya, tak sengaja digigit laba-laba modifikasi genetika beracun mematikan. Namun, kekuatan luar biasa justru muncul dalam dirinya.

            </p>
            </div>
            <div class="box">
                <img src="assets/s2.jpg" alt="image">
                <a>Spiderman 2</a>
                    <p>Sepertinya kesulitan memang tak pernah mau menjauhi kehidupan Peter Parker. Kali ini ia harus bertempur mati-matian melawan ilmuan brilian yang berubah menjadi sosok jahat Doctor Octopus.

            </p>
        </div>
        <div class="box">
                <img src="assets/s3.jpg" alt="image">
                <a>Spiderman 3</a>
                    <p>Sebuah cairan hitam aneh dari dunia lain melekat ke tubuh Peter Parker dan menyebabkan kekacauan batinnya. Pada saat bersamaan, muncul sosok penjahat baru yang mengancam warga New York - Sandman.

                </p>
    <style>
        .about{
    background-color: #e2bda5;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    min-height: 5vh;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    position: relative;
}
    .about .row{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(20%,2fr));
    gap: 2rem;
    align-items: left;
    justify-items: start;
    width: 80%;
    margin: 200 auto ;

}
    .about .row .box{
    background: #e2bda5;
    padding: 1rem;
    text-align: center;
    cursor: pointer;
    
}
    .about .row .box:hover{
    transform: scale(1.1);
}
    .about .row .box img{
    width: 100%;
    position: center;
}
    .about .row .box p{
    color: var(--min-color);
    font-size: 1rem;
    margin: 2rem 0;
    color: #ffff;
}
    .about .row .box a{
    color: var(--min-color);
    font-size: 3rem;
    margin: 5rem 0;
    color : #ffff;
}
        </style>
</div>

</section>

     <!-- about  -->

</body>
</html>