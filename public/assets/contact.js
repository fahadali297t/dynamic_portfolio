const form = document.getElementById("contactForm");
const url = form.getAttribute("data-url");

document
    .getElementById("contactForm")
    .addEventListener("submit", async function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const submitBtn = document.getElementById("submitBtn");

        // Disable button while sending
        submitBtn.disabled = true;
        submitBtn.innerText = "Sending...";

        // Remove previous error messages
        document.querySelectorAll(".error-text").forEach((el) => el.remove());

        try {
            const response = await fetch(url, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector(
                        'input[name="_token"]'
                    ).value,
                },
                body: formData,
            });

            if (response.ok) {
                document.getElementById(
                    "formMessage"
                ).innerHTML = `<div class="alert text_white alert-success">Your message has been sent successfully!</div>`;
                form.reset();
            } else {
                const errors = await response.json();

                // Inline error display
                Object.entries(errors.errors).forEach(([field, messages]) => {
                    const input = document.querySelector(`[name="${field}"]`);
                    if (input) {
                        const errorEl = document.createElement("small");
                        errorEl.classList.add("text-danger", "error-text");
                        errorEl.innerText = messages[0]; // show first error
                        input.insertAdjacentElement("afterend", errorEl);
                    }
                });

                // General error alert (optional)
                document.getElementById(
                    "formMessage"
                ).innerHTML = `<div class="alert alert-danger">Please fix the errors below and try again.</div>`;
            }
        } catch (error) {
            document.getElementById(
                "formMessage"
            ).innerHTML = `<div class="alert alert-danger">Something went wrong. Please try again later.</div>`;
        }

        // Re-enable button
        submitBtn.disabled = false;
        submitBtn.innerText = "Send Message";
    });
