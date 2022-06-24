<hr>
<h3>EDIT DATA MATA KULIAH</h3>
<hr>
<div class="alert alert-primary" role="alert" id="pesan">Data berhasil diperbaharui</div>

<form>
    <div class="mb-3">
        <label class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="txkodematkul" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="txnamamatkul">
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
        <button type="button" onclick="editdata()" class="btn btn-outline-primary">Simpan</button>
        <button type="button" onclick="batal()" class="btn btn-outline-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";
    function batal() {
        location.replace("http://localhost/project_uas/client/index.php?p=matkul")
    }
</script>
<script src="matkul_caridata.js"></script>
<script src="matkul_editdata.js"></script>