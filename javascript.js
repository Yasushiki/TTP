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

function calc(data1, data2) {
  return  Math.floor(( Date.parse(data1) - Date.parse(data2) ) / 86400000);
}

function apagar(classe, id) {
  let confirmacao = confirm("Deseja apagar?");
  if(confirmacao) {
    window.location.href=`apagar.php?classe=${classe}&id=${id}`;
  }
}
