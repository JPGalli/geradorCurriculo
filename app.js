// campo dinamico com botao remover
$(function () {
  // função genérica para adicionar item e exibir botão remover
  function addItem(container, template, removeSelector) {
    $(container).append(template);
    toggleRemoveButtons(container, removeSelector);
  }

  // exibe o botao remover apenas se tiver mais de um item
  function toggleRemoveButtons(container, removeSelector) {
    const items = $(container).children();
    items.find(removeSelector).hide();
    if (items.length > 1) {
      items.slice(1).find(removeSelector).show();
    }
  }

  // botao adicionar experiência
  $("#addExp").on("click", function () {
    const expTemplate = `
      <div class="exp-item">
        <label>Empresa
          <input type="text" name="exp_empresa[]" required />
        </label>
        <label>Cargo
          <input type="text" name="exp_cargo[]" required />
        </label>
        <label>Período
          <input type="text" name="exp_periodo[]" placeholder="Ex: Jan 2020 - Dez 2022" />
        </label>
        <label>Descrição
          <textarea name="exp_descricao[]" rows="2"></textarea>
        </label>
        <button type="button" class="btn-small remove-exp">Remover</button>
      </div>
    `;
    addItem("#experiencias", expTemplate, ".remove-exp");
  });

  // botao remover experiência
  $(document).on("click", ".remove-exp", function () {
    $(this).closest(".exp-item").remove(); // closest para garantir que remove o ancestral correto, por isso nao usei o parent()
    toggleRemoveButtons("#experiencias", ".remove-exp");
  });

  // botao adicionar nova formação
  $("#addFor").on("click", function () {
    const formTemplate = `
      <div class="form-item">
        <label>Instituição
          <input type="text" name="for_instituicao[]" required />
        </label>
        <label>Curso
          <input type="text" name="for_curso[]" required />
        </label>
        <label>Período / Conclusão
          <input type="text" name="for_periodo[]" />
        </label>
        <button type="button" class="btn-small remove-for">Remover</button>
      </div>
    `;
    addItem("#formacoes", formTemplate, ".remove-for");
  });

  // botao remover formação
  $(document).on("click", ".remove-for", function () {
    $(this).closest(".form-item").remove();
    toggleRemoveButtons("#formacoes", ".remove-for");
  });

  // Menu
  $("#navToggle").on("click", function () {
    $("#navLinks").toggleClass("open");
  });
});
