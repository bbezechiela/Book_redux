// lets gow
document.addEventListener('DOMContentLoaded', () => {
    console.log('Book Selling Club Events');

    const current_bookClub_name = 'Book Selling Club';

    // trigger create btn from blade
    const createButton =  document.getElementById('create-event');
    createButton.addEventListener('click', createEvent);

    // createe event
    async function createEvent() {
        // get values from elements in the create event model
        const event_name = document.getElementById('event-name').value;
        const image_upload_element = document.getElementById('image-upload');

        var file = '';
        image_upload_element.addEventListener('change', () => {
            file = image_upload_element.files[0];

            document.getElementById('image-preview').src = '';
            document.getElementById('image-preview').src = URL.createObjectURL(file);
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
        console.log(file);

        const adder = await fetch('/createEvent', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrf_token,
            }, 
            body: JSON.stringify({
                'current_bookClub_name': current_bookClub_name,
                'current_user_id': current_user_id,
                'event_name': event_name,
                'event_start_date': start_date,
                'event_end_date': end_date,
                'event_start_time': start_time,
                'event_end_time': end_time,
                'event_type': event_type,
                'event_description': description,
                'event_image_upload': file,
            })
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