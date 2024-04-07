// materials js
document.addEventListener('DOMContentLoaded', () => {
    const overlayContainer = document.getElementById('overlayContainer');

    let visibilityState = false;
    document.getElementById('upload').addEventListener('click', () => {
        if (visibilityState === false) {
            overlayContainer.style.visibility = 'visible';
            visibilityState = true;
        } else {
            overlayContainer.style.visibility = 'hidden';
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
    
    // slug validation // slug generator
    const validateSlug = (readableSlug) => {
        readableSlug = readableSlug.replace(/\s+/g, '-');
        readableSlug = readableSlug.toLowerCase();
        readableSlug = readableSlug.replace(/[^a-z0-9\-]/g, '');
        readableSlug = readableSlug.replace(/^-+|-+$/g, '');
        console.log(readableSlug);
        
        return readableSlug;
    }
    
    // malaksi it pag execute dapat ig await hiya
    const slugGenerator = (title) => {
        const randomNumber = Math.floor(Math.random() * 9000000000) + 1000000000;

        const readableSlug = validateSlug(title);
        console.log(readableSlug);

        const slug = `${randomNumber}-${readableSlug}`;

        return slug;
    }

    console.log(Math.floor(Math.random() * 10) + 1);

    // submit event from the upload form
    formOuterContainer.addEventListener('submit', (event) => {
        event.preventDefault();

        // getting form data
        const title = document.getElementById('title').value;
        const category = document.getElementById('category').value;
        const description = document.getElementById('description').value;

        // evoke slug generator
        const slug = slugGenerator(title);
    
        // publish button
        console.log(title, category, description);

        const formData = new FormData();
        formData.append('user_id', current_user_id);
        formData.append('document_info', fileContent);
        formData.append('title', title);
        formData.append('category', category);
        formData.append('description', description);
        formData.append('slug', slug);

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

    // section containers
    const mathAndScienceMaterials = document.getElementById('mathAndScienceMaterials');
    const techAndEngineeringMaterials = document.getElementById('techAndEngineeringMaterials');
    const historyMaterials = document.getElementById('historyMaterials');

    
    // getting materials from db
    async function getMaterials() {
        try {
            const getter = await fetch('/getMaterials', {
                method: 'GET',
            });
            
            const response = await getter.json();
            if (response.data) {
                console.log(response.data);

                response.data.forEach(response => {
                    console.log(response);
                    
                    const materialCard = document.createElement('div');
                    materialCard.classList.add('materialCard');
                        
                    const materialLabel = document.createElement('div');
                    materialLabel.textContent = response.slug;    
                        
                    materialCard.appendChild(materialLabel);
                    materialCard.addEventListener('click', () => materialCardEvent(response));

                    switch (response.category) {
                        case 'work':
                            techAndEngineeringMaterials.appendChild(materialCard);
                            break;
                        case 'history':
                            historyMaterials.appendChild(materialCard);
                            break;
                        case 'math':
                            mathAndScienceMaterials.appendChild(materialCard);
                            break;
                        default:
                            console.log('...');                       
                    }
                });
            } else {
                console.log(response.error);
            }

        } catch (error) {
            console.log(error);
        }
    }
    getMaterials();

    // event listener for material card
    function materialCardEvent(response) {
        console.log(response.slug);

        window.location.href = `/document/${response.slug}`;
    } 

});