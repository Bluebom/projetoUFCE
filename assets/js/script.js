
// Mini imagem no formulário
const fileLabel = document.getElementById('fileLabel')
let file = document.getElementById('file')

file.addEventListener('change', e => {
  fileLabel.innerHTML = file.value.split("\\")[2]+'<img src="#" id="miniImg">'
  let reader = new FileReader()
  reader.onload = () => {
    document.getElementById('miniImg').src = reader.result
  }
  reader.readAsDataURL(file.files[0])
  console.log()
})

// deletando toast
const toast = document.querySelector('.toast')
setInterval(() =>{
  toast.style.right = '-30%';
}, 2500);

setInterval(() =>{
  toast.remove();
}, 3500);

