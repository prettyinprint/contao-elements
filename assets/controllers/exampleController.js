import { Application, Controller } from "../stimulus.js";

class ExampleController extends Controller {
  static targets = ["title"];
  openAccordion() {
    this.titleTarget.classList.toggle("active");
  }
  connect() {
    console.log("CONNECTED EXAMPLE");
  }
}

application.register("example", ExampleController);
