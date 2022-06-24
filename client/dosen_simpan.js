function simpandata() {
    let nip = document.getElementById("txnip").value;
    let nama = document.getElementById("txnama").value;
    let stts = document.getElementById("txstts").value;
    let notelp = document.getElementById("txnotelp").value;

    let data = "nip=" + nip + "&nama=" + nama + "&stts=" + stts + "&notelp=" + notelp;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/project_uas/server/dosen_store.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(() => {
            window.location.href = "http://localhost/project_uas/client/index.php?p=dosen";
        }, 2500);
    }

}