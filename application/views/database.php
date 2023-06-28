<!DOCTYPE html>
<html>
<head>
    <title>Contoh Tabel PHP dengan Koneksi MySQL</title>
</head>
<header>
        <nav class="navbar">
            <a href="#home"><span>Home</span></a> 
            <a href="moviesearch.php"><span>Movie</span></a>
            <a href="#database"><span>Database</span></a>  
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
<body>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Usia</th>
                <th>Kota</th>
                <th>Kelahiran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Informasi koneksi MySQL
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "database";

            // Membuat koneksi ke MySQL
            $conn = new mysqli($servername, $username, $password, $database);

            // Memeriksa koneksi
            if ($conn->connect_error) {
                die("Koneksi ke MySQL gagal: " . $conn->connect_error);
            }

            // Query untuk mendapatkan data dari tabel
            $query = "SELECT * FROM datatable";

            // Menjalankan query
            $result = $conn->query($query);

            // Memeriksa apakah query berhasil dieksekusi
            if ($result->num_rows > 0) {
                // Loop melalui data dan buat baris tabel
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["nama"] . '</td>';
                    echo '<td>' . $row["usia"] . '</td>';
                    echo '<td>' . $row["kota"] . '</td>';
                    echo '<td>' . $row["kelahiran"] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo "Tidak ada data yang ditemukan.";
            }

            // Menutup koneksi
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
