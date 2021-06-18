<h1>Cadastro de Lutadores</h1>

<section class="container">
  <form action="POST" class="grid-8">
    <input type="text" name="nome" class="w50" placeholder="Nome">
    <select name="Sexo" class="w50">
      <option value="masculino" selected>Masculino</option>
      <option value="feminino">Feminino</option>
    </select>
    <input type="text" name="idade" class="w50" placeholder="Idade">
    <input type="text" name="altura" class="w50" placeholder="Altura">
    <input type="text" name="peso" class="w50" placeholder="Peso">
    <input type="text" name="nacionalidade" class="w50" placeholder="Nacionalidade">
    <label>
      <p class="w100">Escolha uma imagem! <i class="fas fa-upload"></i></p>
      <input type="file" name="img" class="w100" accept="image/png, image/jpeg">
    </label>
    <input type="text" name="vitorias" class="w100" placeholder="Vitórias">
    <input type="text" name="derrotas" class="w100" placeholder="Derrotas">
    <input type="text" name="empates" class="w100" placeholder="Empates">

    <input type="submit" value="Cadastrar" class="w100">

  </form>
</section>