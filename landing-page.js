const faqBoxElementList = document.querySelectorAll(".faq-wrapper .faq-box");

let isOpen = false;
const changeElementStateTo = (state, element) => {
  if (state === "open") {
    element.querySelector(".accordion-wrapper").classList.add("faq-box__open");
    element.classList.add("faq-box__open");
  } else {
    element
      .querySelector(".accordion-wrapper")
      .classList.remove("faq-box__open");
    element.classList.remove("faq-box__open");
  }
};

const closeAllAccordion = () => {
  faqBoxElementList.forEach((faqBox) => changeElementStateTo("close", faqBox));
};

const initializeAccordionComponent = (faqBox, i) => {
  const handleToggle = () => {
    closeAllAccordion();
    isOpen = isOpen === i ? null : i;
    changeElementStateTo(isOpen === i ? "open" : "close", faqBox);
  };

  faqBox.addEventListener("click", handleToggle);
};

faqBoxElementList.forEach(initializeAccordionComponent);
