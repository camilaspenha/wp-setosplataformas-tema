import { form, inputMask, preloader } from "./seletores.js";
import { modal, atualizaForm } from "./setOrcamento.js";
import { headerScrolled, toggleBacktotop, handleInput } from "./utils.js";
let itensOrcamento: QuoteList = {};

window.addEventListener("load", () => {
  headerScrolled();
  //toggleBacktotop();

  const listaAtualizada = atualizaListaOrcamento();
  if (form) atualizaForm(listaAtualizada);

  preloader?.remove();
  inputMask?.forEach((input) => {
    input.addEventListener("input", handleInput, false);
  });
});
document.addEventListener("scroll", () => {
  headerScrolled();
  //toggleBacktotop();
});
window.setQuote = (id: number, produto: string) => {
  atualizaListaOrcamento();
  itensOrcamento[id] = produto;
  localStorage.setItem("orcamento", JSON.stringify(itensOrcamento));
  if (form) atualizaForm(itensOrcamento);
  modal(id, itensOrcamento);
};

export function atualizaListaOrcamento(): QuoteList {
  itensOrcamento = {};
  const recuperarItens = localStorage.getItem("orcamento");
  if (recuperarItens) {
    itensOrcamento = JSON.parse(recuperarItens);
  }
  return itensOrcamento;
}

const anchorList = document.querySelectorAll(
  'a[href^="#"]'
) as NodeListOf<HTMLAnchorElement>;
anchorList.forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = anchor.getAttribute("href")!.substring(1);
    scrollToHash(targetId);
  });
});
const scrollToHash = (targetId: string) => {
  const targetElement = document.getElementById(targetId);
  if (targetElement === null) return;
  const offsetPosition =
    targetElement.getBoundingClientRect().top + window.pageYOffset - 100; // 100px de margem
  window.scrollTo({
    top: offsetPosition,
    behavior: "smooth",
  });
};
