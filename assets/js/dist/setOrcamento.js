import { form, formMsg } from "./seletores.js";
export function modal(id, itensOrcamento) {
    const myModal = new bootstrap.Modal("#modalOrcamento", {
        keyboard: true,
    });
    if (myModal) {
        let modalFeedback = document.getElementById("modalOrcamentoLabel");
        if (modalFeedback) {
            setFeedback(id, itensOrcamento, modalFeedback);
            const btnDesfazer = document.getElementById("btn_desfazer");
            btnDesfazer?.addEventListener("click", () => {
                desfazer(id, itensOrcamento);
                btnDesfazer.innerHTML = `<i class="bi bi-check-lg"></i>`;
            });
        }
        myModal.show();
    }
}
function setFeedback(id, itensOrcamento, modalFeedback) {
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
function desfazer(id, itensOrcamento) {
    delete itensOrcamento[id];
    localStorage.setItem("orcamento", JSON.stringify(itensOrcamento));
    if (form)
        atualizaForm(itensOrcamento);
}
export function atualizaForm(listaAtualizada) {
    let size = qtdLista(listaAtualizada);
    let btnLimpar = document.getElementById("btn_limpar");
    let formButtonContainer = document.querySelector("form .button");
    if (size > 0) {
        formMsg.value = "Incluir no Orçamento:\n";
        for (let key in listaAtualizada) {
            formMsg.value += `${listaAtualizada[key]} \n`;
        }
        if (!btnLimpar) {
            btnLimpar = document.createElement("button");
            btnLimpar.innerHTML = "Limpar Orçamento";
            btnLimpar.classList.add("btn", "btn_outline_light", "btn-sm", "m-0");
            btnLimpar.id = "btn_limpar";
            btnLimpar.addEventListener("click", () => {
                localStorage.removeItem("orcamento");
                formMsg.value = "";
                btnLimpar?.remove();
            });
            formButtonContainer?.appendChild(btnLimpar);
        }
    }
    else {
        formMsg.value = "";
        btnLimpar?.remove();
    }
}
function qtdLista(obj) {
    return Object.keys(obj).length;
}
//# sourceMappingURL=setOrcamento.js.map