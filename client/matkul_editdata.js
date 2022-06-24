function editdata() {
    let kodematkul = document.getElementById("txkodematkul").value;
    let namamatkul = document.getElementById("txnamamatkul").value;
    let sks = document.getElementById("txsks").value;

    let data = "kodematkul=" + kodematkul + "&namamatkul=" + namamatkul + "&sks=" + sks;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/project_uas/server/matkul_edit.php");
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