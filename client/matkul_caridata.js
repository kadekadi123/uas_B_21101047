let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kodematkul = urlP.get("kodematkul");

let urltarget = new URL("http://localhost/project_uas/server/matkul_kode.php");
urltarget.searchParams.set("kodematkul", kodematkul);

const gh = new XMLHttpRequest();
gh.open("GET", urltarget);
gh.send();

gh.onload = function () {
    const data = JSON.parse(this.responseText);
    console.log(data["isi"]);
    for (i = 0; i < data["isi"].length; i++) {
        document.getElementById("txkodematkul").value = data["isi"][i][0];
        document.getElementById("txnamamatkul").value = data["isi"][i][1];
        document.getElementById("txsks").value = data["isi"][i][2];
    }

}