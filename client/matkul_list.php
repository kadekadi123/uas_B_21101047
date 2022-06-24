<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/project_uas/server/matkul.php");
    gh.send();

    gh.onload = function() {
        const data = JSON.parse(this.responseText);
        var tx = '<h3 class=" bg-white text-dark mb-3 text-center">DATA MATA KULIAH</h3>';
        tx += '<div class="card-body py-0"><table class="table table-striped table-hover table-white align-middle text-center"><thead class="table-danger align-middle"><tr><th scope="col">NO</th><th scope="col">KODE MATA KULIAH</th><th scope="col">NAMA MATA KULIAH</th><th scope="col">SKS</th><th scope="col"><a href="index.php?p=matkul&sp=tambahdata" class="btn btn-primary">TAMBAH DATA</a></th></tr></thead></tbody>';

        let nomor = 1;
        for (i = 0; i < data.length; i++) {
            let sks = "1";
            if (data[i][2] == "2") {
                sks = "2";
            }else if (data[i][2] == "3") {
                sks = "3";
            }
            
            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + data[i][0] + '</td>';
            tx += '  <td>' + data[i][1] + '</td>';
            tx += '  <td>' + sks + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=matkul&sp=editdata&kodematkul=' + data[i][0] + '" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i>EDIT</a> ';
            tx += '<a href="index.php?p=matkul&sp=hapusdata&kodematkul=' + data[i][0] + '" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>HAPUS</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        tx += '  </tbody></table></div></div>';

        document.getElementById("konten").innerHTML = tx;
    }
    
</script>