<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3><span>Employee</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                <h4>Alby</h4>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="index.php">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                        <a href="project.php" class="active">
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
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        <a href="../index.php">
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
                            <h2>7,200</h2>
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
                            <h2>10,230</h2>
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
                                <div class="indicator three" style="width: 2%"></div>
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


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                        </div>

                        <div class="browse">
                            <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%" id="tabel">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th><span class="las la-sort"></span> CLIENT</th>
                                    <th><span class="las la-sort"></span> PRODUCT</th>
                                    <th><span class="las la-sort"></span> ADDRESS</th>
                                    <th><span class="las la-sort"></span> NUMBER</th>
                                    <th><span class="las la-sort"></span> STATUS</th>
                                    <th><span class="las la-sort"></span> ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>

                </div>

            </div>

        </main>

    </div>

    <script>
        // Mendapatkan referensi ke elemen form
        const form = document.querySelector('form');

        // Mendapatkan referensi ke elemen tabel
        const tabel = document.querySelector('#tabel');

        // Mendapatkan data dari localStorage (jika tersedia) atau menginisialisasi data kosong
        let data = JSON.parse(sessionStorage.getItem('data')) || [];

        // Fungsi untuk menampilkan data ke dalam tabel
        function tampilkanData() {
            // Menghapus semua baris di tabel kecuali header
            while (tabel.rows.length > 1) {
                tabel.deleteRow(1);
            }

            // Menambahkan setiap data ke dalam tabel
            for (let i = 0; i < data.length; i++) {
                const row = tabel.insertRow();

                const namaCell = row.insertCell();
                namaCell.textContent = data[i].nama;

                const lokasiCell = row.insertCell();
                lokasiCell.textContent = data[i].phone;

                const penyelenggaraCell = row.insertCell();
                penyelenggaraCell.textContent = data[i].email;

                const deskripsiCell = row.insertCell();
                deskripsiCell.textContent = data[i].product;

                const jenisCell = row.insertCell();
                jenisCell.textContent = data[i].address;

                let statusCell = row.insertCell();
                statusCell.textContent = data[i].status;

                const aksiCell = row.insertCell();


                const hapusButton = document.createElement('button');
                hapusButton.textContent = 'Done';
                hapusButton.dataset.indexNumber = i;
                hapusButton.addEventListener('click', function() {
                    // Mendapatkan data dari localStorage (jika tersedia) atau menginisialisasi data kosong
                    let data = JSON.parse(sessionStorage.getItem('data')) || [];
                    const indexNumber = this.dataset.indexNumber;
                    data = data.map((d, index) => {
                        if (index == indexNumber) {
                            d.status = 'Finished';
                        }

                        return d;
                    })

                    sessionStorage.setItem('data', JSON.stringify(data));
                    tampilkanData();
                });
                aksiCell.appendChild(hapusButton);


            }
        }

        // Fungsi untuk menambahkan data ke dalam tabel dan localStorage
        function tambahData() {
            const nama = form.elements.nama.value;
            const phone = form.elements.phone.value;
            const email = form.elements.email.value;
            const product = form.elements.product.value;
            const address = form.elements.address.value;
            let status = form.elements.status.value;


            // Mengecek apakah data yang ingin ditambahkan sudah ada di dalam array `data`
            const isDuplicate = data.some((item) => {
                return item.nama === nama && item.phone === phone && item.email === email && item.product === product && item.address === address && item.status === status;
            });

            // Jika data sudah ada, tampilkan pesan kesalahan dan keluar dari fungsi
            if (isDuplicate) {

                return;
            }

            const newData = {
                nama: nama,
                phone: phone,
                email: email,
                product: product,
                address: address,
                status: status

            };

            data.push(newData);
            sessionStorage.setItem('data', JSON.stringify(data));
            tampilkanData();
        }


        function hapusData(index) {
            data.splice(index, 1);
            sessionStorage.setItem('data', JSON.stringify(data));
            tampilkanData();
        }

        // Menampilkan data pertama kali
        tampilkanData();

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const nama = form.elements.nama.value;
            const phone = form.elements.phone.value;
            const email = form.elements.email.value;
            const product = form.elements.product.value;
            const address = form.elements.address.value;
            let status = form.elements.status.value;

            // Memanggil fungsi tambahData dengan parameter yang sesuai
            tambahData(nama, phone, email, product, address, status);

            // Mereset nilai input pada form
            form.reset();
        });
    </script>
    <script src="js/main.js"></script>
</body>

</html>