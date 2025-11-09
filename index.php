<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerador de Currículo</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script defer src="assets/js/app.js"></script>
</head>
<body>
  <?php include 'menu.php'; ?>
  <main class="container">
    <section class="card">
      <h1>Gerador de Currículo</h1>
      <p>Bem vindo ao Gerador de Curriculos 2025.</p>
      <p>Preencha os campos abaixo e clique em gerar currículo</p>

      <form action="generate.php" method="post" id="cvForm">
        <label>Nome completo
          <input type="text" name="nome" placeholder="Digite seu nome completo" required />
        </label>
        <label>E-mail
          <input type="email" name="email" placeholder="Maria@outlook.com" required />
        </label>

        <h2>Experiência Profissional</h2>
        <div id="experiencias">
          <div class="exp-item">
            <label>Empresa
              <input type="text" name="exp_empresa[]" placeholder="Banco do Brasil" required />
            </label>
            <label>Cargo
              <input type="text" name="exp_cargo[]" placeholder="Auxiliar Administrativo" required />
            </label>
            <label>Período
              <input type="text" name="exp_periodo[]" placeholder="Ex: Jan 2020 - Dez 2022" />
            </label>
            <label>Descrição
              <textarea name="exp_descricao[]" rows="2" placeholder="Controle de planilhas"></textarea>
            </label>
          </div>
        </div>
        <button type="button" id="addExp" class="btn-small">+</button>
        
        <h2>Formação Acadêmica</h2>
        <div id="formacoes">
          <div class="form-item">
            <label>Instituição
              <input type="text" name="for_instituicao[]" placeholder="Unipar" required />
            </label>
            <label>Curso
              <input type="text" name="for_curso[]" placeholder="Análise e Desenvolvimentos de Sistemas" required />
            </label>
            <label>Período / Conclusão
              <input type="text" name="for_periodo[]" placeholder="2025 até 2027 // 2019 à 2023" />
            </label>
          </div>
        </div>
        <button type="button" id="addFor" class="btn-small">+</button>

        <div class="actions">
          <button type="submit">Gerar Currículo</button>
          <button type="reset">Limpar</button>
        </div>
      </form>
    </section>
  </main>

  <footer>
    <p>Gerador de Currículo 2025</p>
  </footer>

</body>
</html>