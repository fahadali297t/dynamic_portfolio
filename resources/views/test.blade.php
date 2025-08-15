<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">

  
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="page-title">Image Gallery</h1>
                <p class="page-subtitle">Browse and view your image collection</p>

                <!-- Trigger Button -->
                <button type="button" class="btn trigger-btn" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <i class="bi bi-images me-2"></i>
                    View Gallery
                </button>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">
                        <i class="bi bi-collection"></i>
                        Image Gallery
                        <span class="image-count">12 Images</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Image Grid -->
                    <div class="row g-3" id="imageGrid">
                        <!-- Image Card 1 -->
                        <div class="col-lg-4 col-md-6 image-item" data-title="Mountain Landscape" data-type="jpg">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Mountain Landscape
                                    </h6>
                                    <span class="image-size">2.4 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=1" alt="Mountain Landscape"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Mountain Landscape')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Mountain Landscape&quot;]'), 'Mountain Landscape')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('mountain.jpg')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('mountain.jpg')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Image Card 2 -->
                        <div class="col-lg-4 col-md-6 image-item" data-title="City Skyline" data-type="png">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        City Skyline
                                    </h6>
                                    <span class="image-size">1.8 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=2" alt="City Skyline"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'City Skyline')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;City Skyline&quot;]'), 'City Skyline')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('city.png')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('city.png')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Image Card 3 -->
                        <div class="col-lg-4 col-md-6 image-item" data-title="Ocean Sunset" data-type="jpg">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Ocean Sunset
                                    </h6>
                                    <span class="image-size">3.1 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=3" alt="Ocean Sunset"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Ocean Sunset')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Ocean Sunset&quot;]'), 'Ocean Sunset')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('sunset.jpg')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('sunset.jpg')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Image Card 4 -->
                        <div class="col-lg-4 col-md-6 image-item" data-title="Forest Path" data-type="png">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Forest Path
                                    </h6>
                                    <span class="image-size">2.2 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=4" alt="Forest Path"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Forest Path')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Forest Path&quot;]'), 'Forest Path')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('forest.png')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('forest.png')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Image Card 5 -->
                        <div class="col-lg-4 col-md-6 image-item" data-title="Winter Scene" data-type="gif">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Winter Scene
                                    </h6>
                                    <span class="image-size">1.5 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=5" alt="Winter Scene"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Winter Scene')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Winter Scene&quot;]'), 'Winter Scene')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('winter.gif')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('winter.gif')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Image Card 6 -->
                        <div class="col-lg-4 col-md-6 image-item" data-title="Abstract Art" data-type="svg">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Abstract Art
                                    </h6>
                                    <span class="image-size">800 KB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=6" alt="Abstract Art"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Abstract Art')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Abstract Art&quot;]'), 'Abstract Art')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action"
                                        onclick="downloadImage('abstract.svg')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('abstract.svg')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- More image cards... -->
                        <div class="col-lg-4 col-md-6 image-item" data-title="Garden Flowers" data-type="jpg">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Garden Flowers
                                    </h6>
                                    <span class="image-size">2.8 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=7" alt="Garden Flowers"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Garden Flowers')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Garden Flowers&quot;]'), 'Garden Flowers')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action"
                                        onclick="downloadImage('flowers.jpg')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('flowers.jpg')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 image-item" data-title="Desert Dunes" data-type="png">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Desert Dunes
                                    </h6>
                                    <span class="image-size">1.9 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=8" alt="Desert Dunes"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Desert Dunes')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Desert Dunes&quot;]'), 'Desert Dunes')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('desert.png')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('desert.png')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 image-item" data-title="Night Sky" data-type="jpg">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Night Sky
                                    </h6>
                                    <span class="image-size">3.5 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=9" alt="Night Sky"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Night Sky')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Night Sky&quot;]'), 'Night Sky')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('night.jpg')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('night.jpg')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 image-item" data-title="Waterfall" data-type="gif">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Waterfall
                                    </h6>
                                    <span class="image-size">4.1 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=10" alt="Waterfall"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Waterfall')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Waterfall&quot;]'), 'Waterfall')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action"
                                        onclick="downloadImage('waterfall.gif')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('waterfall.gif')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 image-item" data-title="Architecture" data-type="svg">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Architecture
                                    </h6>
                                    <span class="image-size">1.2 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=11" alt="Architecture"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Architecture')">
                                </div>
                                <div class="image-actions">
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Architecture&quot;]'), 'Architecture')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action"
                                        onclick="downloadImage('architecture.svg')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action"
                                        onclick="deleteImage('architecture.svg')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 image-item" data-title="Autumn Leaves" data-type="png">
                            <div class="image-card">
                                <div class="image-header">
                                    <h6 class="image-title">
                                        <i class="bi bi-image"></i>
                                        Autumn Leaves
                                    </h6>
                                    <span class="image-size">2.6 MB</span>
                                </div>
                                <div class="image-preview">
                                    <img src="https://picsum.photos/300/200?random=12" alt="Autumn Leaves"
                                        class="image-thumbnail" onclick="openImageViewer(this, 'Autumn Leaves')">
                                </div>
                                <div class="image-actions">
                                    <!-- ...existing code... -->
                                    <button class="btn btn-view btn-action"
                                        onclick="openImageViewer(document.querySelector('[alt=&quot;Autumn Leaves&quot;]'), 'Autumn Leaves')">
                                        <i class="bi bi-eye"></i> View
                                    </button>
                                    <button class="btn btn-download btn-action" onclick="downloadImage('autumn.png')">
                                        <i class="bi bi-download"></i> Save
                                    </button>
                                    <button class="btn btn-delete btn-action" onclick="deleteImage('autumn.png')">
                                        <i class="bi bi-trash"></i> Del
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Image Grid -->
                </div>
            </div>
        </div>
    </div>

    <!-- Full Screen Image Viewer -->
    <div class="image-viewer" id="imageViewer">
        <div class="viewer-content">
            <button class="viewer-close" onclick="closeImageViewer()">&times;</button>
            <img src="" alt="" class="viewer-image" id="viewerImage">
            <div class="viewer-info" id="viewerInfo"></div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- Gallery JS -->
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

        // Download Image (demo only)
        function downloadImage(filename) {
            alert('Download: ' + filename);
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
</body>

</html>
<!-- ...existing code... -->
