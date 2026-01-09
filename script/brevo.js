
document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contact-form");
    if (!contactForm) {
        return;
    }

    contactForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        const config = window.BIOSOLVE_CONTACT || {};
        const responseMessage = document.getElementById("response-message");
        if (!config.ajaxUrl || !config.nonce || !responseMessage) {
            return;
        }

        const payload = new URLSearchParams({
            action: "biosolve_contact",
            nonce: config.nonce,
            firstName: document.getElementById("firstName").value,
            lastName: document.getElementById("lastName").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            message: document.getElementById("message").value
        });

        try {
            const response = await fetch(config.ajaxUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8"
                },
                body: payload
            });
            const result = await response.json();

            if (result && result.success) {
                responseMessage.innerText = config.successMessage || "Mensagem enviada com sucesso!";
                responseMessage.style.color = "green";
                contactForm.reset();
            } else {
                const apiMessage = result && result.data ? result.data : "";
                responseMessage.innerText = (config.errorServerMessage || "Erro ao conectar com o servidor. ") + apiMessage;
                responseMessage.style.color = "red";
            }
        } catch (error) {
            responseMessage.innerText = config.errorMessage || "Erro ao conectar com o servidor.";
            responseMessage.style.color = "red";
        }
    });
});
