<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">

</div>


<div class="image-viewer" id="imageViewer">
    <div class="viewer-content">
        <button class="viewer-close" onclick="closeImageViewer()">&times;</button>
        <img src="" alt="" class="viewer-image" id="viewerImage">
        <div class="viewer-info" id="viewerInfo"></div>
    </div>
</div>


<script>
    // Image Viewer Logic
    function openImageViewer(imgElem, title) {
        document.getElementById('viewerImage').src = imgElem.src;
        document.getElementById('viewerImage').alt = title;
        document.getElementById('viewerInfo').textContent = title;
        document.getElementById('imageViewer').classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function closeImageViewer() {
        document.getElementById('imageViewer').classList.remove('show');
        document.body.style.overflow = '';
    }


    function downloadImage(filename) {
        const pdfPath = '/' + filename;
        const link = document.createElement("a");
        link.href = pdfPath;
        link.download = pdfPath; // optional custom filename
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }


    // Delete Image (demo only)
    function deleteImage(filename) {
        alert('Delete: ' + filename);
    }



    // Close viewer on ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeImageViewer();
    });
</script>
