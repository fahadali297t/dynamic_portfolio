// For pdf
const pdfFetchBtn = document.getElementById("fetchPdfBtn");
pdfFetchBtn.addEventListener("click", async () => {
    // pdfFetchBtn.disabled = true;
    let q = pdfFetchBtn.innerText;
    if (q == "Documents") {
        q = "a";
    } else {
        q = "b";
    }
    await fetchPdfGallery(q); // Wait until finished
    const modal = new bootstrap.Modal(document.getElementById("pdfModal"));
    modal.show(); // Open modal after fetchData
    pdfFetchBtn.disabled = false;
});

async function fetchPdfGallery(q) {
    await fetch("/admin/pdf?q=" + q)
        .then((response) => response.text())
        .then((html) => {
            const modalContainer = document.getElementById("pdfModal");
            modalContainer.innerHTML = html;

            // Re-init the Bootstrap modal instance
            const modalEl = modalContainer.querySelector(".modal");
            if (modalEl) {
                bootstrap.Modal.getOrCreateInstance(modalEl);
            }
        })
        .catch((error) => console.error("Error loading preview:", error));
}

function viewPDF(filename) {
    window.open("/" + filename, "_blank");
}

// Download PDF function
function downloadPDF(filename) {
    const pdfPath = "/" + filename;
    const link = document.createElement("a");
    link.href = pdfPath;
    link.download; // optional custom filename
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

function selectPdf(path) {
    document.getElementById("resume").value = path;
    document.getElementById("selectPdf").submit();
}
