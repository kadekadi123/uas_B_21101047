<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <style>
        /* univ */
        .univ {
        width: 80%;
        margin: auto;
        text-align: left;
        }
        .univ-col {
        flex-basis: 31%;
        border-radius: 10px;
        margin-bottom: 5%;
        }
        .univ-col img {
        width: 100%;
        border-radius: 10px;
        }
        .univ-col p {
        padding: 0;
        text-align:justify;
        }
        .univ-col h3 {
        margin-top: 16px;
        margin-bottom: 15px;
        text-align: left;
        }

        /* footer */
        .footer {
        background-color:#e3f2fd;
        width: 100%;
        text-align: center;
        padding: 30px 0;
        }
        .footer h4 {
        margin-bottom: 25px;
        margin-top: 20px;
        font-weight: 600;
        }
        
    </style>
</head>
<body>
    <!-- univ -->
    <section class="univ">
      <h1>Universitas Sumping</h1>
      <h5>Kreativitas Tanpa Batas</h5><br>
      <div class="row">
        <div class="univ-col">
          <img src="../assets/images/mahasiswa.jpg" />
          <h3>Mahasiswa</h3>
          <p>Mahasiswa adalah sebutan untuk seseorang yang tengah menempuh pendidikan di sebuah universitas, sekolah tinggi, hingga akademi. Meskipun begitu, tidak semua orang dapat menjadi seorang mahasiswa karena berbagai hambatan tertentu.</p>
          <a href="index.php?p=mhs" class="btn btn-success">Selengkapnya</a>
        </div>
        <div class="univ-col">
          <img src="../assets/images/matakuliah.jpg" />
          <h3>Mata Kuliah</h3>
          <p>Mata Kuliah adalah satuan pelajaran yang dipelajari oleh mahasiswa di tingkat perguruan tinggi yang disusun berdasarkan capaian pembelajaran lulusan (CPL)penilaian, serta memiliki bobot minimal satu satuan kredit semester (SKS).</p>
          <a href="index.php?p=matkul" class="btn btn-success">Selengkapnya</a>
        </div>
        <div class="univ-col">
          <img src="../assets/images/dosen.jpg" />
          <h3>Dosen</h3>
          <p>Dosen adalah pendidik profesional dan ilmuwan dengan tugas utama mentransformasikan, mengembangkan, dan menyebarluaskan ilmu pengetahuan, teknologi, dan seni melalui pendidikan, penelitian, dan pengabdian kepada masyarakat.</p>
          <a href="index.php?p=dosen" class="btn btn-success">Selengkapnya</a>
        </div>
      </div>
    </section>

    <!-- footer -->
    <section class="footer">
      <h4>Tentang Kami</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
        Adipisci itaque consequatur libero quia ex architecto tenetur facilis, veniam quam quae molestias provident non? Velit sapiente ea aut tenetur accusantium qui?
      </p>
      <p><b>I Kadek Adi Rian Nugraha<b></p>
      <p>&copy; 2022</p>
    </section>
    



</body>
</html>