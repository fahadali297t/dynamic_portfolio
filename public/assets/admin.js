const form = document.getElementById("uploadFileForm");
const inputField = document.getElementById("files");

inputField.addEventListener("change", () => {
    if (inputField.files.length > 0) {
        form.submit();
        inputField.disabled = true; // disable further clicks/changes
    }
});

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

const toggleImageGallery = () => {
    document.getElementById("imageModal").classList.toggle("d-none");
};

function selectImage(imageUrl, id) {
    document.getElementById("selectedImagePreview").src = imageUrl;
    document.getElementById("image_id").value = id;

    bootstrap.Modal.getInstance(document.getElementById("imageModal")).hide();
    // alert("Hello");
}
