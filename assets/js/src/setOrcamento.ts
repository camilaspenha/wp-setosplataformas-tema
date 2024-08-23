import { form, formMsg } from "./seletores.js";

export function modal(id: number, itensOrcamento: QuoteList) {
  const myModal = new bootstrap.Modal("#modalOrcamento", {
    keyboard: true,
  });

  if (myModal) {
    let modalFeedback = document.getElementById(
      "modalOrcamentoLabel"
    ) as HTMLElement;
    if (modalFeedback) {
      /* cria a mensagem com botão desfazer e Ok */
      setFeedback(id, itensOrcamento, modalFeedback);

      /* verifica se o botão de desfazer foi criado */
      const btnDesfazer = document.getElementById("btn_desfazer");
      /* se existir, adiciona o evento de desfazer */
      btnDesfazer?.addEventListener("click", () => {
        /* deleta o item, atualiza base e manda pro form */
        desfazer(id, itensOrcamento);
        btnDesfazer.innerHTML = `<i class="bi bi-check-lg"></i>`;
      });
    }
    myModal.show();
  }
}

function setFeedback(
  id: number,
  itensOrcamento: QuoteList,
  modalFeedback: HTMLElement
) {
  modalFeedback.innerHTML = `
    <strong>${itensOrcamento[id]}</strong> adicionado(a) ao <a href='/contato' style='text-decoration:underline'>Formulário de Orçamento</a> !
    <div class='d-flex justify-content-end mt-3'>
      <button id='btn_desfazer' class='btn btn-danger btn-sm'>
        Desfazer <i class="bi bi-arrow-counterclockwise ms-3"></i>
      </button>
      <button type="button" class="btn btn_primary" data-bs-dismiss="modal">OK</button>
    </div>
    `;
}

function desfazer(id: number, itensOrcamento: QuoteList) {
  delete itensOrcamento[id];
  localStorage.setItem("orcamento", JSON.stringify(itensOrcamento));
  if (form) atualizaForm(itensOrcamento);
}

export function atualizaForm(listaAtualizada: QuoteList) {
  /* recebe uma lista e verifica o tamanho */
  let size = qtdLista(listaAtualizada);
  /* busca o botão de limpar orçamento */
  let btnLimpar = document.getElementById("btn_limpar");
  let formButtonContainer = document.querySelector(
    "form .button"
  ) as HTMLElement;
  /* Se tiver itens */
  if (size > 0) {
    /* inicializa a mensagem do form */
    formMsg.value = "Incluir no Orçamento:\n";
    /* adiciona os itens na mensagem inicializada */
    for (let key in listaAtualizada) {
      formMsg.value += `${listaAtualizada[key]} \n`;
    }
    /* se não houver, cria o botão de limpar orçamento */
    if (!btnLimpar) {
      btnLimpar = document.createElement("button");
      btnLimpar.innerHTML = "Limpar Orçamento";
      btnLimpar.classList.add("btn", "btn_outline_light", "btn-sm", "m-0");
      btnLimpar.id = "btn_limpar";
      btnLimpar.addEventListener("click", () => {
        /* remove tudo do localStorage */
        localStorage.removeItem("orcamento");
        /* limpa o campo de mensagem */
        formMsg.value = "";
        /* se deleta */
        btnLimpar?.remove();
      });
      /* adiciona o botão no form que exibe itens */
      formButtonContainer?.appendChild(btnLimpar);
    }
  } else {
    /* limpa o campo de mensagem */
    formMsg.value = "";
    /* remove o botão de limpar orçamento */
    btnLimpar?.remove();
  }
}

function qtdLista(obj: QuoteList) {
  return Object.keys(obj).length;
}
