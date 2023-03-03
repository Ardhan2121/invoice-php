function check() {
  var cek = document.getElementById("input");
  if (cek.type === "password") {
    cek.type = "text";
  } else {
    cek.type = "password";
  }
}