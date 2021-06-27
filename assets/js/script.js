
// Mini imagem no formulário
const fileLabel = document.getElementById('fileLabel')
let file = document.getElementById('file')

file.addEventListener('change', e => {
  fileLabel.innerHTML = file.value.split("\\")[2] + '<img src="#" id="miniImg">'
  let reader = new FileReader()
  reader.onload = () => {
    document.getElementById('miniImg').src = reader.result
  }
  reader.readAsDataURL(file.files[0])
  console.log()
})

// mascara para data de nascimento
let start = 0;
let end = 0;
document.querySelector('#dateInput').addEventListener('input', () => {
  const campo = document.querySelector('#dateInput');  
  campo.maxLength = 10;
  campo.value = campo.value.replace(/[^0-9/]/g, '');
  console.log(campo.maxLength);
  if(campo.textLength == 2 && start == 0){
    campo.value += '/';
    start = 1;
  }
  else if(campo.textLength < 2){
    start = 0;
  }

  if(campo.textLength == 5 && end == 0){
    campo.value += '/';
    end = 1;
  }
  else if(campo.textLength < 5){
    end = 0;
  }
})







