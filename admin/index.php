<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">   -->
</head>

<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>Admin</h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <h4>Admin</h4>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                        <a href="employee.php">
                            <span class="las la-user-alt"></span>
                            <small>Employee</small>
                        </a>
                    </li>
                    <li>
                        <a href="projects.php">
                            <span class="las la-clipboard-list"></span>
                            <small>Subscriber</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/3.jpeg)"></div>
                        <a href="?logout=true">
                            <span class="las la-power-off"></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>

            <div class="page-content">

                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User activity this month</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>340,230</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$ <span id="jumlah"></span></h2>
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly revenue growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <h1>Welcome Admin</h1>
                </div>
                <section class="math">
                    <form method="POST" action="">
                        <h2>Form</h2>
                        <label>Product</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="product" placeholder="Enter product" autocomplete="off" required>
                        </div>

                        <label>Price</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="price" placeholder="Enter Value" autocomplete="off" required>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-primary px-4 float-end" name="submit" Value="submit">Submit</button>
                        </div>
                    </form>
                </section>
                <div>
                    <table width="100%" id="tabel">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th><span class="las la-sort"></span> PRODUCT</th>
                                <th><span class="las la-sort"></span> Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

    </div>
    <script>
        // Mendapatkan referensi ke elemen form
        const form = document.querySelector('form');

        // Mendapatkan referensi ke elemen tabel
        const tabel = document.querySelector('#tabel');

        // Mendapatkan data dari sessionStorage (jika tersedia) atau menginisialisasi data kosong
        let data = JSON.parse(sessionStorage.getItem('harga')) || [];

        // Fungsi untuk menampilkan data ke dalam tabel
        function tampilkanData() {
            // Menghapus semua baris di tabel kecuali header
            while (tabel.rows.length > 1) {
                tabel.deleteRow(1);
            }

            // Menambahkan setiap data ke dalam tabel
            for (let i = 0; i < data.length; i++) {
                const row = tabel.insertRow();

                const numberCell = row.insertCell();
                numberCell.textContent = i + 1;

                const productCell = row.insertCell();
                productCell.textContent = data[i].product;

                const priceCell = row.insertCell();
                priceCell.textContent = data[i].price;

            }
        }

        // tampilkan data untuk pertama kali
        tampilkanData();

        // Fungsi untuk menambahkan data ke dalam tabel dan sessionStorage
        function tambahData() {
            const product = form.elements.product.value;
            const price = form.elements.price.value;


            // Mengecek apakah data yang ingin ditambahkan sudah ada di dalam array `data`
            const isDuplicate = data.some((item) => {
                return item.product === product && item.price === price;
            });

            // Jika data sudah ada, tampilkan pesan kesalahan dan keluar dari fungsi
            if (isDuplicate) {

                return;
            }

            const newData = {
                product: product,
                price: price
            };

            data.push(newData);
            sessionStorage.setItem('harga', JSON.stringify(data));
            tampilkanData();
        }



        // Event listener untuk form submit
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const product = form.elements.product.value;
            const price = form.elements.price.value;


            // Memanggil fungsi tambahData dengan parameter yang sesuai
            tambahData(product, price);
            // tampilkanData();
            // Mereset nilai input pada form
            form.reset();
        });

        const jumlah = document.getElementById('jumlah');
        const jumlahHarga = data.reduce((total, curr) => total + parseInt(curr.price), 0);
        jumlah.textContent = jumlahHarga;
        sessionStorage.setItem("jumlah", jumlahHarga);
    </script>
    <script src="js/main.js"></script>

</body>

</html>