import { header, backtotop } from "./seletores.js";

export function headerScrolled() {
  if (window.scrollY > 100) {
    header?.classList.add("header-scrolled");
  } else {
    header?.classList.remove("header-scrolled");
  }
}
export function toggleBacktotop() {
  if (window.scrollY > 100) {
    backtotop?.classList.add("active");
  } else {
    backtotop?.classList.remove("active");
  }
}
export function handleInput(e: Event) {
  if (e.target && e.target instanceof HTMLInputElement) {
    e.target.value = phoneMask(e.target.value);
  }
}
function phoneMask(phone: string) {
  return phone
    .replace(/\D/g, "")
    .replace(/^(\d)/, "($1")
    .replace(/^(\(\d{2})(\d)/, "$1) $2")
    .replace(/(\d{4})(\d{1,5})/, "$1-$2")
    .replace(/(-\d{5})\d+?$/, "$1");
}
