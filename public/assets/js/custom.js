function choicesJsStyleResolver(targetElement, resolverElement) {
    new Choices(document.querySelector(`${targetElement}`), {allowHTML: true});
    if (document.querySelector(`${resolverElement} .invalid-feedback`) !== null) {
        document.querySelector(`${resolverElement} .choices`).style.border = '1px solid red';
        document.querySelector(`${resolverElement} .choices`).style.borderRadius = '5px';
        document.querySelector(`${resolverElement} .choices`).style.marginBottom = '0px';
        document.querySelector(`${resolverElement} .choices`).classList.add('is-invalid');
    }
}

SweetAlert = {
    success: (message) => {
        if (message != null) {
            Swal.fire({
                title: "",
                html: message,
                icon: "success",
                confirmButtonText: `ঠিক আছে`,
            });
        }
    },
    error: (message) => {
        if (message != null) {
            Swal.fire({
                title: "",
                html: message,
                icon: "error",
                confirmButtonText: `ঠিক আছে`
            });
        }
    },
    info: (message) => {
    },
}

ChoiceJs = {
    init: (targetElement) => {
        new Choices(document.querySelector(targetElement), {allowHTML: true});
    },
    initById: (id) => {
        return new Choices(document.getElementById(id), {allowHTML: true});
    },
    initWithStyleResolver: (targetElement, resolverElement) => {
        new Choices(document.querySelector(`${targetElement}`), {allowHTML: true});
        if (document.querySelector(`${resolverElement} .invalid-feedback`) !== null) {
            document.querySelector(`${resolverElement} .choices`).style.border = '1px solid red';
            document.querySelector(`${resolverElement} .choices`).style.borderRadius = '5px';
            document.querySelector(`${resolverElement} .choices`).style.marginBottom = '0px';
            document.querySelector(`${resolverElement} .choices`).classList.add('is-invalid');
        }
    }
}

const closeLoader = () => {
    document.getElementById('loader').style.display = 'none';
}

const openLoader = () => {
    document.getElementById('loader').style.display = 'block';
}

const redirectUrl = (url) => {
    openLoader();
    window.location.href = url;
}

closeLoader();
