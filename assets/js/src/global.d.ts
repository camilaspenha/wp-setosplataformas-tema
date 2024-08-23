declare const Slick: any;
declare const bootstrap: any;

interface QuoteList {
  [key: number]: string;
}
interface Window {
  setQuote: (id: number, service: string) => void;
}
