import { Controller } from '../stimulus.js';
import '../scss/accordion.scss';

class AccordionController extends Controller {
  static outlets = ['accordion'];
  static targets = ['content'];

  closeAccordions() {
    this.accordionOutlets.forEach((accordion) => {
      if (accordion.element !== this.element) {
        accordion.element.classList.remove('active');
        accordion.contentTarget.style.maxHeight = '0';
      }
    });
  }
  activateAccordion() {
    this.closeAccordions();
    if (this.element.classList.contains('active')) {
      this.contentTarget.style.maxHeight = '0';
    } else {
      this.contentTarget.style.maxHeight =
        this.contentTarget.scrollHeight + 'px';
    }
    this.element.classList.toggle('active');
  }
}

application.register('accordion', AccordionController);
