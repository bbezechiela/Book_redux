// lets gow
document.addEventListener('DOMContentLoaded', () => {
    console.log('Book Selling Club Events');

    const current_bookClub_name = 'Book Selling Club';

    // trigger create btn from blade
    const createButton =  document.getElementById('create-event');
    createButton.addEventListener('click', createEvent);

    const image_upload_element = document.getElementById('image-upload');

    let file = '';
    image_upload_element.addEventListener('change', (event) => {
        const files = event.target.files;
        
        document.getElementById('image-preview').src = '';
        
        if (files.length > 0) {
            file = files[0];
            document.getElementById('image-preview').src = URL.createObjectURL(file);
        } else {
            console.log('files waray sulod');
        }
    });

    // createe event
    async function createEvent() {
        // get values from elements in the create event model
        const event_name = document.getElementById('event-name').value;

        image_upload_element.addEventListener('click', () => {
            console.log('image upload clicked');
        });
    
        const start_date = document.getElementById('start-date').value;
        const end_date = document.getElementById('end-date').value;
        const start_time = document.getElementById('start-time').value;
        const end_time = document.getElementById('end-time').value;
        const event_type = document.getElementById('event-type').value;
        const description = document.getElementById('event-description').value;

        console.log(event_name);
        console.log(description);
        console.log(start_date);
        console.log(start_time);
        console.log(event_type);
        console.log(file.name);
        console.log(file);

        const formData = new FormData();
        formData.append('current_bookClub_name', current_bookClub_name);
        formData.append('current_user_id', current_user_id);
        formData.append('event_name', event_name);
        formData.append('event_start_date', start_date);
        formData.append('event_end_date', end_date);
        formData.append('event_start_time', start_time);
        formData.append('event_end_time', end_time);
        formData.append('event_type', event_type);
        formData.append('event_description', description);
        formData.append('event_image_upload', file);

        const adder = await fetch('/createEvent', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf_token,
            }, 
            body: formData, 
        });

        if (adder.ok) {
            console.log('adder okay');
        }

        const response = await adder.json();
            
        if (response.data) {
            console.log(response.data);
        } else {
            console.log(response.error);
        }
 
    }

    // ids, event-name, image-upload, start-date, end-date, start-time, end-time, event-type, event-description, create-event

    // show events 
    async function getEvents() {
        const getEvents = await fetch(`/getEvents?currentBookClubName=${current_bookClub_name}`, {
            method: 'GET' 
        });

        const response = await getEvents.json();
        if (response.data) {
            console.log(response.data);

            showEvents(response.data);

        } else {
            console.log(response.error);
        }

    }
    getEvents();

    function showEvents(responses) {
        responses.forEach(response => {
            const innerCtnStyle = `
                min-width: 900px;
                max-width: 900px;
                height: 300px;
                border: 1px solid black;
                margin-bottom: 20px;
            `;

            const eventInnerContainer = document.createElement('div');
            eventInnerContainer.style.cssText = innerCtnStyle;

            const rightSection = document.createElement('div');
            const event_image = document.createElement('div');

            const event_type = document.createElement('div');
            event_type.textContent = response.type;

            rightSection.appendChild(event_image);
            rightSection.appendChild(event_type);

            const leftSection = document.createElement('div');

            const eventOuterContainer = document.getElementById('eventOuterContainer');
            eventOuterContainer.appendChild(eventInnerContainer);
            
        });
    }

    const joinEvent = document.createElement('div');
    joinEvent.addEventListener('click', async () => {
    // join request ha event
        const joinRequest = await fetch('/joinRequest', {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrf_token,
            },
            body: JSON.stringify({
                'currentUserId': current_user_id,
                'currentBookClubName': current_bookClub_name,
                'requestStatus': 'pending'      
            })
        });
        const response = await joinRequest.json();

        if (response.data) {
            console.log(response.data);
        } else {
            console.log(response.error);
        }
    });

});