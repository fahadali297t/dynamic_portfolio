document.addEventListener("DOMContentLoaded", async function () {
    await fetchImageGallery();
    await fetchPdfGallery();
});

const form = document.getElementById("uploadFileForm");
const inputField = document.getElementById("files");

inputField.addEventListener("change", () => {
    if (inputField.files.length > 0) {
        form.submit();
    }
});

const fileContentCard = document.getElementById("file_card_content");
console.log(fileContentCard);

const toggleImage = () => {
    document.getElementById("image_viewer").classList.toggle("d-none");
};

const displayImage = (path) => {
    document.getElementById("img_src").src = path;
    document.getElementById("img_src").classList.remove("d-none");
    document.getElementById("video_src").classList.add("d-none");
    toggleImage();
};

const displayVideo = (path) => {
    document.getElementById("video_src").src = path;
    document.getElementById("video_src").classList.remove("d-none");
    document.getElementById("img_src").classList.add("d-none");
    toggleImage();
};

function fetchImageGallery() {
    fetch(`/admin/images`)
        .then((response) => response.text()) // Blade returns HTML, so use .text()
        .then((html) => {
            document.getElementById("imageModal").innerHTML = html;
            // document.getElementById("imageModal").classList.toggle("d-none");
        })
        .catch((error) => console.error("Error loading preview:", error));
}

function fetchPdfGallery() {
    fetch(`/admin/pdf`)
        .then((response) => response.text()) // Blade returns HTML, so use .text()
        .then((html) => {
            document.getElementById("pdfModal").innerHTML = html;
            // document.getElementById("imageModal").classList.toggle("d-none");
        })
        .catch((error) => console.error("Error loading preview:", error));
}

const toggleImageGallery = () => {
    document.getElementById("imageModal").classList.toggle("d-none");
};

function selectImage(imageUrl, id) {
    document.getElementById("selectedImagePreview").src = imageUrl;
    document.getElementById("image_id").value = id;

    bootstrap.Modal.getInstance(document.getElementById("imageModal")).hide();
}
