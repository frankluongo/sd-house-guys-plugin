function podioForm(form) {
  const submitBtn = form.querySelector("button");

  form.addEventListener("submit", onSubmit);

  async function onSubmit(e) {
    e.preventDefault();

    const inputs = form.elements;
    const email = inputs["email"].value;
    const title = inputs["title"].value;
    const url = form.action;

    const body = JSON.stringify({
      form: {
        fields: {
          seller: {
            title,
          },
          email: [{ value: email, type: "other" }],
        },
      },
      url,
    });

    const options = {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body,
    };
    submitBtn.innerText = "Submitting...";
    const res = await fetch("/wp-json/podio/v1/investor-form", options);
    const data = await res.json();
    if (data?.status === "success") {
      submitBtn.innerText = "Success!";
      if (form.dataset.redirect) window.location = form.dataset.redirect;
    } else {
      submitBtn.setAttribute("disabled", true);
      submitBtn.innerText = "Submit";
      alert("Oh no! Something went wrong. Please try again");
    }
  }
}

function urlEncode(obj) {
  return Object.keys(obj)
    .map((k) => `${encodeURIComponent(k)}=${encodeURIComponent(obj[k])}`)
    .join("&");
}

function podioForms() {
  const forms = document.querySelectorAll('[data-js="podio-form"]');
  forms.forEach(podioForm);
}

document.addEventListener("DOMContentLoaded", podioForms);
