// lets gow
document.addEventListener('DOMContentLoaded', () => {
    // create post 
    const createButton = document.getElementById('create-post');
    createButton.addEventListener('click', createPost);
    
    let first_img_file = null;
    document.getElementById('first_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const first_img_holder = document.getElementById('first_img_holder');

        if (files.length > 0) {
            first_img_file = files[0];
            first_img_holder.classList.remove('image-holder', 'imageLabels');

            first_img_holder.classList.add('labelWithImg');
            first_img_holder.style.backgroundImage = `url(${URL.createObjectURL(first_img_file)})`; 
        } else {
            console.log('no file selected');
        }
    });
    
    let second_img_file = null;
    document.getElementById('second_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const second_img_holder = document.getElementById('second_img_holder');

        if (files.length > 0) {
            second_img_file = files[0];
            second_img_holder.classList.remove('image-holder', 'imageLabels');

            second_img_holder.classList.add('labelWithImg');
            second_img_holder.style.backgroundImage = `url(${URL.createObjectURL(second_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    let third_img_file = null;
    document.getElementById('third_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const third_img_holder = document.getElementById('third_img_holder');

        if (files.length > 0) {
            third_img_file = files[0];
            third_img_holder.classList.remove('image-holder', 'imageLabels');

            third_img_holder.classList.add('labelWithImg');
            third_img_holder.style.backgroundImage = `url(${URL.createObjectURL(third_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    let fourth_img_file = null;
    document.getElementById('fourth_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const fourth_img_holder = document.getElementById('fourth_img_holder');

        if (files.length > 0) {
            fourth_img_file = files[0];
            fourth_img_holder.classList.remove('image-holder', 'imageLabels');

            fourth_img_holder.classList.add('labelWithImg');
            fourth_img_holder.style.backgroundImage = `url(${URL.createObjectURL(fourth_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    let fifth_img_file = null;
    document.getElementById('fifth_img').addEventListener('change', (event) => {
        const files = event.target.files;

        const fifth_img_holder = document.getElementById('fifth_img_holder');

        if (files.length > 0) {
            fifth_img_file = files[0];
            fifth_img_holder.classList.remove('image-holder', 'imageLabels');

            fifth_img_holder.classList.add('labelWithImg');
            fifth_img_holder.style.backgroundImage = `url(${URL.createObjectURL(fifth_img_file)})`;
        } else {
            console.log('no file selected');
        }
    });

    async function createPost() {
        // post element
        const captionText = document.getElementById('exampleTextarea').value;

        const formData = new FormData();
        formData.append('current_bookClub_name', current_bookClub_name);
        formData.append('current_user_id', current_user_id);
        formData.append('caption', captionText);
        formData.append('first_img', first_img_file);
        formData.append('second_img', second_img_file);
        formData.append('third_img', third_img_file);
        formData.append('fourth_img', fourth_img_file);
        formData.append('fifth_img', fifth_img_file);

        const adder = await fetch('/createPost', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf_token,
            },
            body: formData,
        });
        const response = await adder.json();

        if (response.data) {
            console.log(response.data);
        } else {
            console.log(response.error);
        }
    }

    // get posts
    async function getPosts() {
        const getter = await fetch(`/getPosts?currentBookClubName=${current_bookClub_name}`, {
            method: 'GET',
        });
        const response = await getter.json();

        if (response.data) {
            console.log(response.data);
            showPosts(response.data);
        } else {
            console.log(response.error);
        }
    }
    getPosts();

    // show posts
    const postOuterContainer_styles = `
        display: flex;
        justify-content: center;
        align-items: flex-end;
        flex-direction: column;
    `;

    const postOuterContainer = document.getElementById('postOuterContainer');
    postOuterContainer.style.cssText = postOuterContainer_styles;

    async function showPosts(responses) {
        responses.forEach(response => {
            
            const postInnerContainer = document.createElement('div');
            postInnerContainer.classList.add('postInnerContainer');

            // header
            const postHeader = document.createElement('div');
            postHeader.classList.add('postHeader');

            // poster user info
            const userProfileCtn = document.createElement('div');
            userProfileCtn.classList.add('userProfileCtn');

            // poster name and date
            const userNameCtn = document.createElement('div');
            const postDate = document.createElement('div');
            const dateHolder = response.created_at.match(/(\d{4})-(\d{2})-(\d{2})/);
            const newDateFormat = dateHolder[0].replace(/(\d{4})-(\d{2})-(\d{2})/, '$2-$3-$1');
            postDate.textContent = newDateFormat;
            
            // user getter
            const userId = response.user_id;
            (async function getUser() {
                const getter = await fetch(`/getUser?userId=${userId}`, {
                    method: 'GET',
                });
                const response = await getter.json();

                if (response.data) {
                    userNameCtn.textContent = `${response.data[0].first_name} ${response.data[0].last_name}`;
                    console.log(response.data);

                    // get poser profile photo
                    const imgLocation = window.location.origin + '/images/profile_photos/' + response.data[0].profile_photo;

                    userProfileCtn.style.backgroundImage = `url(${imgLocation})`;
                } else {
                    console.log(response.error);
                }
            })();

            // container for username tas post date
            const nameAndDateContainer = document.createElement('div');
            nameAndDateContainer.appendChild(userNameCtn);
            nameAndDateContainer.appendChild(postDate);
            nameAndDateContainer.classList.add('nameAndDateContainer'); 

            postHeader.appendChild(userProfileCtn);
            postHeader.appendChild(nameAndDateContainer);

            // body
            const postBody = document.createElement('div');
            postBody.classList.add('postBody');

            // post caption
            const postCaption = document.createElement('div');
            postCaption.classList.add('postCaption');
            postCaption.textContent = response.caption;

            // post images
            const postImgContainer = document.createElement('div');
            postImgContainer.classList.add('postImgContainer');

            // getting five images
            const firstImgCtn = document.createElement('div');
            firstImgCtn.classList.add('postImages');
            firstImgCtn.style.backgroundImage = `url(${window.location.origin}${'/images/profile_photos/'}${response.first_img})`;
            const secondImgCtn = document.createElement('div');
            secondImgCtn.classList.add('postImages');
            secondImgCtn.style.backgroundImage = `url(${window.location.origin}${'/images/profile_photos/'}${response.second_img})`;

            const thirdImgCtn = document.createElement('div');
            thirdImgCtn.classList.add('postImages');
            thirdImgCtn.style.backgroundImage = `url(${window.location.origin}${'/images/profile_photos/'}${response.third_img})`;

            const fourthImgCtn = document.createElement('div');
            fourthImgCtn.classList.add('postImages');
            fourthImgCtn.style.backgroundImage = `url(${window.location.origin}${'/images/profile_photos/'}${response.fourth_img})`;
            
            const fifthImgCtn = document.createElement('div');
            fifthImgCtn.classList.add('postImages');
            fifthImgCtn.style.backgroundImage = `url(${window.location.origin}${'/images/profile_photos/'}${response.fifth_img})`;

            postImgContainer.appendChild(firstImgCtn);
            postImgContainer.appendChild(secondImgCtn);
            postImgContainer.appendChild(thirdImgCtn);
            postImgContainer.appendChild(fourthImgCtn);
            postImgContainer.appendChild(fifthImgCtn);

            postBody.appendChild(postCaption);
            postBody.appendChild(postImgContainer);

            // footer
            const postFooter = document.createElement('div');
            postFooter.textContent = 'footer';
            postFooter.classList.add('postFooter');

            postInnerContainer.appendChild(postHeader);
            postInnerContainer.appendChild(postBody);
            postInnerContainer.appendChild(postFooter);

            postOuterContainer.appendChild(postInnerContainer);
        });
    }
});