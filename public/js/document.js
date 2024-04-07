// mabuhay 
document.addEventListener('DOMContentLoaded', () => {
    console.log(responsee[0]);

    const pdfjsLib = pdfjsLib;

    pdfjsLib.getDocument('{{ asset("path/to/your/pdf/file.pdf") }}').promise.then(function(pdf) {
        // Get the first page of the PDF
        pdf.getPage(1).then(function(page) {

            // Create a viewport to scale the page to fit the viewer
            var viewport = page.getViewport({scale: 1});

            // Create a new canvas element to render the page
            var canvas = document.createElement('canvas');
            canvas.style.height = '400px';
            canvas.style.width = '400px';
            //   canvas.style.width = viewport.width + 'px';
            //   canvas.style.height = viewport.height + 'px';
        
            document.getElementById('mainOuterContainer').appendChild(canvas);

            // Render the page on the canvas
            var context = canvas.getContext('2d');
            var renderContext = {
                canvasContext: context,
                viewport: viewport,
            };
            page.render(renderContext);
        });
    });
});
