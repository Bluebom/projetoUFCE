
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

// deletando toast
const toast = document.querySelector('.toast')
if(toast.classList.contains('sucesso') || toast.classList.contains('falha')){
  toast.style.display = 'inline-block';
  setInterval(() =>{
    toast.style.right = '-90%';
  }, 3000);
}



