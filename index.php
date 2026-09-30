<?php
    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="form-section">

        <div class="form-header">
            <h1>Formulir Pendaftaran</h1>
        </div>

        <form action="#" method="post" class="registration-form">

            <div class="input-box">
                <label for="nama">Nama:</label>
                <input type="text" placeholder="Username" id="nama" name="nama">
            </div>

            <div class="input-box">
                <label for="email">Email:</label>
                <input type="email" placeholder="example@gmail.com" id="email" name="email">
            </div>

            <div class="radio">
                <label>Jenis Kelamin:</label>

                <label>
                    <input type="radio" name="jenis_kelamin" value="laki-laki">
                    Laki-laki
                </label>

                <label>
                    <input type="radio" name="jenis_kelamin" value="perempuan">
                    Perempuan
                </label>
            </div>

            <div class="input-box">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat"></textarea>
            </div>

            <div class="input-box">
                <label for="telepon">Nomor Telepon:</label>
                <input type="tel" placeholder="08xx-xxxx-xxxx" id="telepon" name="telepon">
            </div>

            <div class="submit-button">
                <button type="submit" name="submit">Submit</button>
            </div>

        </form>

    </section>

    <?php
if (isset($_POST["submit"])) {
    echo "<div class='hasil'>";
    echo "<h2>Hasil Pendaftaran</h2>";
    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Jenis Kelamin: " . $jenis_kelamin . "</p>";
    echo "<p>Alamat: " . $alamat . "</p>";
    echo "<p>Nomor Telepon: " . $telepon . "</p>";
    echo "</div>";
}
?>

</body>

</html>