// Book club selling club 
document.addEventListener('DOMContentLoaded', function() {

    const demoSelectFile = document.createElement('input');
    demoSelectFile.type = 'file';
    demoSelectFile.id = 'inputFile';

    document.getElementById('demo').appendChild(demoSelectFile);


    demoSelectFile.addEventListener('change', (event) => {
        const file = URL.createObjectUrl(event.target.file[0]) ;
        console.log(file);
    });
  
});
