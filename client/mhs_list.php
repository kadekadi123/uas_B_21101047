<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/project_uas/server/mhs.php");
    gh.send();

    gh.onload = function() {
        const data = JSON.parse(this.responseText);
        var tx = '<h3 class="bg-white text-dark mb-3 text-center">DATA MAHASISWA</h3>';
        tx += '<div class="card-body py-0"><table class="table table-striped table-hover align-middle text-center"><thead class="table-danger align-middle"><tr><th scope="col">NO</th><th scope="col">NIM</th><th scope="col">NAMA LENGKAP</th><th scope="col">JENIS KELAMIN</th><th scope="col">JURUSAN</th><th scope="col">TANGGAL LAHIR</th><th scope="col"><a href="index.php?p=mhs&sp=tambahdata" class="btn btn-primary">TAMBAH DATA</a></th></tr></thead></tbody>';

        let nomor = 1;
        for (i = 0; i < data.length; i++) {
            let jkel = "Laki-Laki";
            if (data[i][3] == "P") {
                jkel = "Perempuan";
            }
            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + data[i][0] + '</td>';
            tx += '  <td>' + data[i][1] + '</td>';
            tx += '  <td>' + jkel + '</td>';
            tx += '  <td>' + data[i][2] + '</td>';
            tx += '  <td>' + data[i][4] + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=mhs&sp=editdata&nim=' + data[i][0] + '" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i>EDIT</a> ';
            tx += '<a href="index.php?p=mhs&sp=hapusdata&nim=' + data[i][0] + '" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>HAPUS</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        tx += '  </tbody></table></div></div>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>