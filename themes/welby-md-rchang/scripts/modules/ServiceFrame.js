import $ from "jquery";
import smoothScroll from "jquery-smooth-scroll";

class ServiceFrame {
  constructor() {
    this.frame = $("#service-frame");
    this.btnRadStd = $("#btn-rad-std");
    this.btnRadStdUrl = this.btnRadStd.attr("data-link");
    this.btnRadExp = $("#btn-rad-exp");
    this.btnRadExpUrl = this.btnRadExp.attr("data-link");
    this.btnOrthStd = $("#btn-orth-std");
    this.btnOrthStdUrl = this.btnOrthStd.attr("data-link");
    this.btnOrthExp = $("#btn-orth-exp");
    this.btnOrthExpUrl = this.btnOrthExp.attr("data-link");
    this.events();
    this.addSmoothScroll();
  }

  events() {
    this.btnRadStd.on("click", () => this.onServiceClick(this.btnRadStdUrl));
    this.btnRadExp.on("click", () => this.onServiceClick(this.btnRadExpUrl));
    this.btnOrthStd.on("click", () => this.onServiceClick(this.btnOrthStdUrl));
    this.btnOrthExp.on("click", () => this.onServiceClick(this.btnOrthExpUrl));
  }

  onServiceClick(url) {
    this.frame.attr("src", url);
    this.frame.addClass("service__iframe--active");
  }

  addSmoothScroll() {
    this.btnRadStd.smoothScroll();
    this.btnRadExp.smoothScroll();
    this.btnOrthStd.smoothScroll();
    this.btnOrthExp.smoothScroll();

  }
}

export default ServiceFrame
