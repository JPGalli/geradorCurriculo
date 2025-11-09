<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Currículo Gerado</title>

  <link rel="stylesheet" href="assets/css/style.css" />
  <script>
    function imprimirCurriculo() {
      window.print();
    }
  </script>
</head>
<body>

  <?php include 'menu.php'; ?>

  <main class="container">
    <section class="card cv">
      <div class="cv-header">
        <h1><?= htmlspecialchars($_POST['nome']) ?></h1>
        <p class="contact"><?= htmlspecialchars($_POST['email']) ?></p>
      </div>

      <div class="cv-body">

        <?php if (!empty($_POST['exp_empresa'][0])): ?>
        <h2>Experiência Profissional</h2>
        <?php for ($i = 0; $i < count($_POST['exp_empresa']); $i++): ?>
          <div class="item">
            <strong><?= htmlspecialchars($_POST['exp_cargo'][$i]) ?></strong> -
            <?= htmlspecialchars($_POST['exp_empresa'][$i]) ?><br>
            <span class="muted"><?= htmlspecialchars($_POST['exp_periodo'][$i]) ?></span>
            <p><?= nl2br(htmlspecialchars($_POST['exp_descricao'][$i])) ?></p>
          </div>
        <?php endfor; ?>
        <?php endif; ?>

        <?php if (!empty($_POST['for_instituicao'][0])): ?>
        <h2>Formação Acadêmica</h2>
        <?php for ($i = 0; $i < count($_POST['for_instituicao']); $i++): ?>
          <div class="item">
            <strong><?= htmlspecialchars($_POST['for_curso'][$i]) ?></strong><br>
            <?= htmlspecialchars($_POST['for_instituicao'][$i]) ?><br>
            <span class="muted"><?= htmlspecialchars($_POST['for_periodo'][$i]) ?></span>
          </div>
        <?php endfor; ?>
        <?php endif; ?>
      </div>

      <div class="actions">
        <a href="index.php" class="btn-small">← Voltar</a>
        <button type="button" onclick="imprimirCurriculo()" class="btn-small print-btn">🖨️ Baixar / Imprimir</button>
      </div>
    </section>
  </main>

  <footer>
    <p>Gerador de Currículo 2025.</p>
  </footer>

</body>
</html>
