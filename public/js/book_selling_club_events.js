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
            console.log(URL.createObjectURL(file));
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

    // Fisher yates shuffle algorithm
    function shuffleEvents(events) {
        for (let i = events.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [events[i], events[j]] = [events[j], events[i]];
        }

        return events;
    }

    // show events 
    async function getEvents() {
        const getEvents = await fetch(`/getEvents?currentBookClubName=${current_bookClub_name}`, {
            method: 'GET' 
        });

        const response = await getEvents.json();
        if (response.data) {
            console.log(response.data);

            const shuffledEvents = shuffleEvents(response.data);
            console.log(shuffledEvents);

            showEvents(shuffledEvents);

        } else {
            console.log(response.error);
        }

    }
    getEvents();

    function showEvents(responses) {
        responses.forEach(response => {
            const eventInnerContainer_style = `
                width: 900px;
                max-width: 900px;
                height: 350px;
                margin-bottom: 20px;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                flex-direction: row;
                border-radius: 5px;
                box-shadow: 0 0 4px grey;
            `;

            // container kada event
            const eventInnerContainer = document.createElement('div');
            eventInnerContainer.style.cssText = eventInnerContainer_style;

            const leftSection_style = `
                width: 300px;
                height: inherit;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            `;

            const leftSection = document.createElement('div');
            leftSection.style.cssText = leftSection_style;

            const event_image_style = `
                height: 260px;
                width: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            `;

            // event picture
            const image_location = window.location.origin + '/images/profile_photos/' + response.image_path; 
            console.log(image_location);
            const event_image = document.createElement('div');
            event_image.style.cssText = event_image_style;
            event_image.style.backgroundImage = `url(${image_location})`;

            const event_type_stype = `
                height: 40px;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                background-color: #003060;
            `;

            // didi nat mamanipulate an event type
            const event_type = document.createElement('div');
            const remove_white_space = response.type.replace('-', ' ');
            const manipulated_event_type = remove_white_space.replace(/\b\w/g, function(char) {
                return char.toUpperCase();
            });
            event_type.textContent = manipulated_event_type;
            event_type.style.cssText = event_type_stype

            leftSection.appendChild(event_image);
            leftSection.appendChild(event_type);

            // left section
            const rightSection_style = `
                height: 300px;
                width: 500px;
                display: flex;
                justify-content: space-evenly;
                align-items: flex-start;
                flex-direction: column;
            `;
            
            const rightSection = document.createElement('div');
            rightSection.style.cssText = rightSection_style;
                
            // event header 
            const event_header = document.createElement('div');
            
            // event date && time 
            const event_date_time = document.createElement('div');
            const newDateFormat = response.start_date.replace(/(\d{4})-(\d{2})-(\d{2})/, "$2-$3-$1");

            // month number
            const eventMonthNumber = newDateFormat.match(/(\d{2})/);
            const manipulated_event_month = eventMonthNumber[1].replace('0','');

            const months = [
                '', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
            ];

            // day number
            const eventDayNumber = newDateFormat.match(/-(\d{2})/);

            // year number
            const eventYearNumber = newDateFormat.match(/(?<=-)\d+$/);

            event_date_time.textContent = `${months[manipulated_event_month]} ${eventDayNumber[1]}, ${eventYearNumber[0]}`;
            event_date_time.classList.add('eventHeader');
            
            // event name 
            const event_name = document.createElement('div');
            event_name.textContent = response.name;
            event_name.classList.add('eventHeader');
            
            // event poser
            const event_poser = document.createElement('div');
            
            const userId = response.user_id;
            // user getter
            async function getUser() {
                const getter = await fetch(`/getUser?userId=${userId}`, {
                    method: 'GET'
                });
                const response = await getter.json();

                if (response.data) {
                    event_poser.textContent = `Posted by ${response.data[0].first_name}`;
                    event_poser.classList.add('event_poser');
                    console.log(response.data);
                } else {
                    console.log(response.error);
                }
            };

            getUser();

            event_header.appendChild(event_date_time);
            event_header.appendChild(event_name);
            event_header.appendChild(event_poser);         

            // event body
            const event_body = document.createElement('div');
            event_body.textContent = response.description; 

            const event_join_button_style = `
                height: 50px;
                width: 120px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
                cursor: pointer;
            `;
            // hello there my friend

            // event join button
            const event_join_button = document.createElement('div');
            event_join_button.id = 'joinEvent';
            event_join_button.textContent = 'Join';
            event_join_button.style.cssText = event_join_button_style;

            const event_id = response.event_id;
            // event add member
            event_join_button.addEventListener('click', async () => {
                console.log(event_id);
                const adder = await fetch(`/addMember`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrf_token,
                    }, 
                    body: JSON.stringify({
                        'eventId': event_id,
                        'userId': current_user_id,
                    })
                });
                const response = await adder.json();

                if (response.data) {
                    console.log(response.data);
                } else {
                    console.log(response.error);
                }
            
            });

            rightSection.appendChild(event_header);
            rightSection.appendChild(event_body);
            rightSection.appendChild(event_join_button);
            
            eventInnerContainer.appendChild(leftSection);
            eventInnerContainer.appendChild(rightSection);

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