function mudar(id) {
  divs = document.getElementsByClassName('ttp');
  cont = document.getElementsByClassName('ttpC');
  for(let i = 0; i<3; i++) {
    if(i == id) {
      divs[i].classList.add("active");
      cont[i].classList.remove("hidden");
    } else {
      divs[i].classList.remove("active");
      cont[i].classList.add("hidden")
    }
  }
}
