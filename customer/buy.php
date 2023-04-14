<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Go-Books</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/buy.css" />
  <link href="gambar/affinity-.png" rel="icon" />
  <style>
    .logo {
      height: 40px;
      width: 40px;
      margin-top: 15px;
      margin-bottom: 15px;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>

  <div class="container">
    <header id="header" class="header fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
          <img src="gambar/affinity-.png" class="logo">
        </a>
        <nav id="navbar" class="navbar navbar-expand-lg">
          <ul class="nav justify-content-center">
            <li>
              <a href="#main">Home</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#service">Genre</a>
            </li>
            <li>
              <a href="#pricing">Pricing</a>
            </li>
            <li>
              <a href="#gallery">Library</a>
            </li>
          </ul>
        </nav>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="btn-login" href="../index.php">Logout</a>
          </li>
        </ul>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <section class="buy">
      <div class="row">
        <div class="col-md-7 pe-1">
          <div class="form-left h-100 py-5 px-5">
            <h1>Buying Form</h1>
            <br>
            <form class="row g-4">
              <div class="col-12">
                <label for="name">Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama" placeholder="Enter name" required>
              </div>
              <div class="col-12">
                <label for="phone">Phone number<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" required>
              </div>
              <div class="col-12">
                <label for="phone">Email<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="email" placeholder="Enter email" required>
              </div>
              <div class="col-12">
                <label for="product">Product<span class="text-danger">*</span></label>
                <select class="form-control" id="product">
                  <option>Select a product</option>
                  <option>Basic</option>
                  <option>Advanced</option>
                  <option>Premium</option>
                </select>
              </div>
              <div class="col-12">
                <label for="address">Address<span class="text-danger">*</span></label>
                <textarea class="form-control" id="address" rows="2" placeholder="Enter address" required></textarea>
              </div>
              <input type="hidden" value="Pending" id="status">
              <button type="submit" class="btn btn-primary px-2" onclick="tambahData()">Send</button>
            </form>
          </div>
        </div>
        <div class="col-md-4 d-md-block">
          <div class="mid">
            <img src="gambar/buy.svg" width="450px">
          </div>
        </div>
      </div>

    </section>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    // Mendapatkan referensi ke elemen form
    const form = document.querySelector('form');



    // Mendapatkan data dari localStorage (jika tersedia) atau menginisialisasi data kosong
    let data = JSON.parse(localStorage.getItem('data')) || [];

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
      alert("Berhasil Melakukan Pembelian");
    }


    // Fungsi untuk mengedit data di dalam tabel dan localStorage
    // function editData(index) {
    //   const newData = {
    //     nama: prompt('Masukkan nama kegiatan:', data[index].nama),
    //     lokasi: prompt('Masukkan lokasi kegiatan:', data[index].lokasi),
    //     penyelenggara: prompt('Masukkan penyelenggara:', data[index].penyelenggara),
    //     deskripsi: prompt('Masukkan deskripsi kegiatan:', data[index].deskripsi),
    //     jenis: prompt('Masukkan jenis kegiatan (wajib/opsional):', data[index].jenis)
    //   };

    //   data[index] = newData;
    //   localStorage.setItem('data', JSON.stringify(data));
    //   tampilkanData();
    // }

    // Fungsi untuk menghapus data dari tabel dan localStorage
    // function hapusData(index) {
    //   data.splice(index, 1);
    //   localStorage.setItem('data', JSON.stringify(data));
    //   tampilkanData();
    // }

    // Menampilkan data pertama kali


    // Event listener untuk form submit
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
  <!-- <script src="js/main.js"></script> -->
</body>

</html>