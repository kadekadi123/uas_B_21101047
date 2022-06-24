function hapusdata() {
    let kodematkul = document.getElementById("txkodematkul").value;

    let data = "kodematkul=" + kodematkul;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/project_uas/server/matkul_hapus.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
        setTimeout(() => {
            window.location.href = "http://localhost/project_uas/client/index.php?p=matkul";
        }, 2500);
    }

}