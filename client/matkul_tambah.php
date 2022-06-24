<h3>TAMBAH DATA MATA KULIAH</h3>
<hr>
<div class="alert alert-primary" role="alert" id="pesan">Data berhasil ditambahkan</div>

<form>
    <div class="mb-3">
        <label class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="txkodematkul" placeholder="Masukan Kode Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="txnamamatkul" placeholder="Masukan Nama Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label">SKS</label>
        <select id="txsks" class="form-select">
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="simpandata()" class="btn btn-outline-primary">Simpan</button>
        <button type="button" onclick="batal()" class="btn btn-outline-danger"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
        location.replace("http://localhost/project_uas/client/index.php?p=matkul")
    }
</script>
<script src="matkul_simpan.js"></script>