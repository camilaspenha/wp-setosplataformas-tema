"use strict";
const header = document.querySelector("header");
const backtotop = document.querySelector(".back-to-top");
const form = document.querySelector("#quote_form");
const formMsg = document.querySelector("#quote_msg");
const inputMask = document.querySelectorAll('[data-js="input"]');
const preloader = document.querySelector("#preloader");
let itensOrcamento = {};
atualizaForm();
inputMask?.forEach((input) => {
    input.addEventListener("input", handleInput, false);
});
window.addEventListener("load", () => {
    headerScrolled();
    toggleBacktotop();
    scrollToHash();
    preloader?.remove();
});
document.addEventListener("scroll", () => {
    headerScrolled();
    toggleBacktotop();
});
window.setQuote = (id, produto) => {
    atualizaForm();
    itensOrcamento[id] = produto;
    localStorage.setItem("orcamento", JSON.stringify(itensOrcamento));
    modal(id, itensOrcamento);
};
function modal(id, itensOrcamento) {
    const myModal = new bootstrap.Modal("#modalOrcamento", {
        keyboard: true,
    });
    if (myModal) {
        let modalFeedback = document.getElementById("modalOrcamentoLabel");
        if (modalFeedback && modalFeedback instanceof HTMLElement) {
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
    <strong>${itensOrcamento[id]}</strong> adicionado(a) ao <a href='' style='text-decoration:underline'>Formulário de Orçamento</a> !
    <div class='d-flex justify-content-end mt-3'>
      <button id='btn_desfazer' class='btn btn-danger btn-sm'>
        Desfazer <i class="bi bi-arrow-counterclockwise ms-3"></i>
      </button>
      <button type="button" class="btn btn_primary" data-bs-dismiss="modal">OK</button>
    </div>
    `;
    atualizaForm();
}
function desfazer(id, itensOrcamento) {
    delete itensOrcamento[id];
    localStorage.setItem("orcamento", JSON.stringify(itensOrcamento));
    atualizaForm();
}
function atualizaForm() {
    const recuperarItens = localStorage.getItem("orcamento");
    if (recuperarItens) {
        itensOrcamento = JSON.parse(recuperarItens);
        let size = qtdLista(itensOrcamento);
        if (formMsg && formMsg instanceof HTMLTextAreaElement) {
            formMsg.value = size > 0 ? "Incluir no Orçamento:\n" : "";
            let btnLimpar = document.getElementById("btn_limpar");
            if (size === 0 && btnLimpar instanceof HTMLElement) {
                btnLimpar.remove();
                localStorage.removeItem("orcamento");
                return;
            }
            if (!btnLimpar) {
                btnLimpar = document.createElement("button");
                btnLimpar.innerHTML = "Limpar Orçamento";
                btnLimpar.classList.add("btn", "btn_outline_light", "btn-sm", "m-0");
                btnLimpar.id = "btn_limpar";
                btnLimpar.addEventListener("click", () => {
                    localStorage.removeItem("orcamento");
                    formMsg.value = "";
                    itensOrcamento = {};
                    btnLimpar?.remove();
                });
                form?.appendChild(btnLimpar);
            }
            for (let key in itensOrcamento) {
                formMsg.value += `${itensOrcamento[key]} \n`;
            }
        }
    }
}
function qtdLista(obj) {
    return Object.keys(obj).length;
}
function headerScrolled() {
    if (window.scrollY > 100) {
        header?.classList.add("header-scrolled");
    }
    else {
        header?.classList.remove("header-scrolled");
    }
}
function toggleBacktotop() {
    if (window.scrollY > 100) {
        backtotop?.classList.add("active");
    }
    else {
        backtotop?.classList.remove("active");
    }
}
function handleInput(e) {
    if (e.target && e.target instanceof HTMLInputElement) {
        e.target.value = phoneMask(e.target.value);
    }
}
function phoneMask(phone) {
    return phone
        .replace(/\D/g, "")
        .replace(/^(\d)/, "($1")
        .replace(/^(\(\d{2})(\d)/, "$1) $2")
        .replace(/(\d{4})(\d{1,5})/, "$1-$2")
        .replace(/(-\d{5})\d+?$/, "$1");
}
function scrollToHash() {
    if (window.location.hash) {
        let hashTarget = document.querySelector(window.location.hash);
        if (hashTarget) {
            let offset = header.offsetHeight;
            let elementPos = hashTarget.offsetTop;
            window.scrollTo({
                top: elementPos - offset,
                behavior: "smooth",
            });
        }
    }
}
//# sourceMappingURL=script%20copy.js.map