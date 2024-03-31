// materials js
document.addEventListener('DOMContentLoaded', () => {
    // overlay for upload
    // const uploadOverlay = document.createElement('div');
    // uploadOverlay.classList.add('uploadOverlay');

    // const mainOuterContainer = document.getElementById('mainOuterContainer');

    const formOuterContainer = document.getElementById('formOuterContainer');
    // formOuterContainer.style.visibility = 'hidden';

    let visibilityState = false;
    document.getElementById('upload').addEventListener('click', () => {
        if (visibilityState === false) {
            formOuterContainer.style.visibility = 'visible';
            visibilityState = true;
        } else {
            formOuterContainer.style.visibility = 'hidden';
            visibilityState = false; 
        }
    });


    // handling file document
    const fileDocument = document.getElementById('file');
    let fileContent = null;

    const fileButton = document.getElementById('labell');

    fileDocument.addEventListener('change', (event) => {
        const file = event.target.files;

        if (file.length > 0) {
            fileContent = file[0];

            fileButton.textContent = fileContent.name;
            console.log(fileContent);
        } else {
            console.log('no file selected');
        } 
    }); 

    formOuterContainer.addEventListener('submit', (event) => {
        event.preventDefault();

        // getting form data
        const title = document.getElementById('title').value;
        const category = document.getElementById('category').value;
        const description = document.getElementById('description').value;
    
        // publish button
        console.log(title, category, description);

        const formData = new FormData();
        formData.append('user_id', current_user_id);
        formData.append('document_info', fileContent);
        formData.append('title', title);
        formData.append('category', category);
        formData.append('description', description);

        (async () => {
            const adder = await fetch('/uploadMaterial', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrf_token,
                }, 
                body: formData
            });
            const response = await adder.json();
            if (response.data) {
                console.log(response.data);
                formOuterContainer.reset();
            } else {
                console.log(response.error);
            }
        })();

    });
});