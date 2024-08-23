import { form, inputMask, preloader } from "./seletores.js";
import { modal, atualizaForm } from "./setOrcamento.js";
import { headerScrolled, handleInput } from "./utils.js";
let itensOrcamento = {};
window.addEventListener("load", () => {
    headerScrolled();
    const listaAtualizada = atualizaListaOrcamento();
    if (form)
        atualizaForm(listaAtualizada);
    preloader?.remove();
    inputMask?.forEach((input) => {
        input.addEventListener("input", handleInput, false);
    });
});
document.addEventListener("scroll", () => {
    headerScrolled();
});
window.setQuote = (id, produto) => {
    atualizaListaOrcamento();
    itensOrcamento[id] = produto;
    localStorage.setItem("orcamento", JSON.stringify(itensOrcamento));
    if (form)
        atualizaForm(itensOrcamento);
    modal(id, itensOrcamento);
};
export function atualizaListaOrcamento() {
    itensOrcamento = {};
    const recuperarItens = localStorage.getItem("orcamento");
    if (recuperarItens) {
        itensOrcamento = JSON.parse(recuperarItens);
    }
    return itensOrcamento;
}
const anchorList = document.querySelectorAll('a[href^="#"]');
anchorList.forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const targetId = anchor.getAttribute("href").substring(1);
        scrollToHash(targetId);
    });
});
const scrollToHash = (targetId) => {
    const targetElement = document.getElementById(targetId);
    if (targetElement === null)
        return;
    const offsetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - 100;
    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
    });
};
//# sourceMappingURL=script.js.map