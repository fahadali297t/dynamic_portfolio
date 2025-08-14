@extends('layouts.app')


@section('content')
    @if (session('success'))
        <x-success :msg="session('success')" />
    @endif
    @if (session('error'))
        <x-error :msg="session('error')" />
    @endif

    <x-imagesgallery />
    <x-frontend.skill-form />



    <div class="row">
        {{-- skills --}}
        <x-skills-crud :skills="$skills" />
        {{-- for resume --}}
        <x-resume-crud :resume="$resume" />
    </div><!--end row-->
@endsection


@section('script')
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const pdfItems = document.querySelectorAll('.pdf-item');

            pdfItems.forEach(item => {
                const title = item.getAttribute('data-title').toLowerCase();
                if (title.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // View PDF function
        function viewPDF(filename) {
            alert(
                `Opening PDF: ${filename}\n\nIn a real application, this would:\n- Open the PDF in a new tab\n- Show in an embedded viewer\n- Use PDF.js for custom viewing`
            );
        }

        // Download PDF function
        function downloadPDF(filename) {
            alert(`Downloading: ${filename}\n\nIn a real application, this would start the PDF download.`);
        }

        // Clear search when modal is closed
        document.getElementById('pdfModal').addEventListener('hidden.bs.modal', function() {
            document.getElementById('searchInput').value = '';
            document.querySelectorAll('.pdf-item').forEach(item => {
                item.style.display = 'block';
            });
        });
    </script>
@endsection
