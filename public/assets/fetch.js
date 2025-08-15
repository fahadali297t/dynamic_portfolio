const selectBtn = document.getElementById("selectImageBtn");

selectBtn.addEventListener("click", async function () {
    selectBtn.disabled = true;
    await fetchImageGallery(); // Wait until finished
    const modal = new bootstrap.Modal(document.getElementById("imageModal"));
    modal.show(); // Open modal after fetchData
    selectBtn.disabled = false;
});

async function fetchImageGallery() {
    await fetch(`/admin/images?q=add`)
        .then((response) => response.text()) // Blade returns HTML, so use .text()
        .then((html) => {
            document.getElementById("imageModal").innerHTML = html;
            // document.getElementById("imageModal").classList.toggle("d-none");
        })
        .catch((error) => console.error("Error loading preview:", error));
}

document
    .getElementById("image_upload")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        const preview = document.getElementById("preview");

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result; // set img src
                preview.style.display = "block"; // make visible
            };
            reader.readAsDataURL(file);
        } else {
            preview.src =
                '{{ asset("assets/images/gray-user-profile-icon-png-fP8Q1P.png") }}';
            // preview.style.display = 'none';
        }
    });
