let listmahasiswa = document.getElementsByTagName("ol");
listmahasiswa[0].addEventListener("click", tampilkan);

function tampilkan(event) {
    alert("Cek Data Mahasiswa : " + event.target.innerHTML);
}