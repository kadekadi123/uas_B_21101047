<h3>TAMBAH DATA DOSEN</h3>
<hr>
<div class="alert alert-primary" role="alert" id="pesan">Data berhasil ditambahkan</div>

<form>
    <div class="mb-3">
        <label class="form-label">NIP</label>
        <input type="text" class="form-control" id="txnip" placeholder="Masukan NIP">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="txnama" placeholder="Masukan Nama">
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select id="txstts" class="form-select">
            <option value="TETAP"> TETAP </option>
            <option value="HONOR"> HONOR </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">No. Telepon</label>
        <input type="text" class="form-control" id="txnotelp" placeholder="Masukan No. Telepon">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="simpandata()" class="btn btn-primary">Simpan</button>
        <button type="button" onclick="batal()" class="btn btn-danger">Batal</button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
        location.replace("http://localhost/project_uas/client/index.php?p=dosen")
    }
</script>
<script src="dosen_simpan.js"></script>