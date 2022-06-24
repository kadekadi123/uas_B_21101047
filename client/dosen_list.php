<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/project_uas/server/dosen.php");
    gh.send();

    gh.onload = function() {
        const data = JSON.parse(this.responseText);
        var tx = '<h3 class="text-dark mb-3 text-center">DATA DOSEN</h3>';
        tx += '<div class="card-body py-0"><table class="table table-striped table-hover table-white align-middle text-center"><thead class="table-danger align-middle"><tr><th scope="col">NO</th><th scope="col">NIP</th><th scope="col">NAMA LENGKAP</th><th scope="col">STATUS</th><th scope="col">NO TELEPON</th><th scope="col"><a href="index.php?p=dosen&sp=tambahdata" class="btn btn-primary">TAMBAH DATA</a></th></tr></thead></tbody>';


        let nomor = 1;
        for (i = 0; i < data.length; i++) {
            let stts = "TETAP";
            if (data[i][2] == "HONOR") {
                stts = "HONOR";
            }
 
            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + data[i][0] + '</td>';
            tx += '  <td>' + data[i][1] + '</td>';
            tx += '  <td>' + stts + '</td>';
            tx += '  <td>' + data[i][3] + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=dosen&sp=editdata&nip=' + data[i][0] + '" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i>EDIT</a> ';
            tx += '<a href="index.php?p=dosen&sp=hapusdata&nip=' + data[i][0] + '" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>HAPUS</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        
        tx += '  </tbody></table></div></div>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>