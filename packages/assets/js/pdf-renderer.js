document.addEventListener('DOMContentLoaded', () => {
    // Configure worker source
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'assets/js/lib/pdf.worker.min.js';

    const containers = document.querySelectorAll('.pdf-container');

    containers.forEach(container => {
        const url = container.dataset.url;
        if (!url) return;

        // Show loading state (optional)
        container.innerHTML = '<div class="pdf-loading">Ładowanie...</div>';

        const loadingTask = pdfjsLib.getDocument(url);
        loadingTask.promise.then(pdf => {
            // Fetch the first page
            pdf.getPage(1).then(page => {
                let rotation = container.dataset.rotation 
                    ? parseInt(container.dataset.rotation) 
                    : page.rotate;

                // 1. Sprawdzamy orientację
                let baseViewport = page.getViewport({ 
                    scale: 1, 
                    rotation: rotation 
                });

                // 2. Wymuszamy pion (jeśli leży -> obróć o 90 stopni)
                if (baseViewport.width > baseViewport.height) {
                    rotation = (rotation + 90) % 360;
                    baseViewport = page.getViewport({ 
                        scale: 1, 
                        rotation: rotation 
                    });
                }

                const containerWidth = container.clientWidth;
                const scale = containerWidth / baseViewport.width;
                
                const viewport = page.getViewport({ 
                    scale: scale, 
                    rotation: rotation 
                });

                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                
                // Add canvas to container, remove loading text
                container.innerHTML = '';
                container.appendChild(canvas);

                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                
                page.render(renderContext);
            });
        }, reason => {
            // PDF loading error
            console.error(reason);
            container.innerHTML = `<div class="pdf-error">Błąd ładowania PDF</div>`;
        });
    });
});
