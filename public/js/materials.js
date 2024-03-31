// materials js
document.addEventListener('DOMContentLoaded', () => {
    // overlay for upload
    const uploadOverlay = document.createElement('div');
    uploadOverlay.classList.add('uploadOverlay');

    const mainOuterContainer = document.getElementById('mainOuterContainer');

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
});