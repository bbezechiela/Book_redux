// Book club my wall
document.addEventListener('DOMContentLoaded', function() {
    // current post timestamp
    let lastPostTimestamp = '1990-12-12 12:12:12';

    // Fisher yates shuffle algorithm
    function shuffleEvents(events) {
        for (let i = events.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [events[i], events[j]] = [events[j], events[i]];
        }

        return events;
    }

    async function getAllPosts() {
        const getter = await fetch(`/getAllPosts?currentPostTimestamp=${lastPostTimestamp}`, {
            method: 'GET',
        });
        const response = await getter.json();

        if (response.data) {
            lastPostTimestamp = response.data[response.data.length - 1].created_at;

            console.log(response.data);
            const shuffledEvents = shuffleEvents(response.data);

            showPosts(shuffledEvents);
        } else {
            console.log(response.error);
        }
    }
    // getAllPosts();
    setInterval(getAllPosts, 1200);

    const postOuterContainer_styles = `
        display: flex;
        justify-content: center;
        align-items: flex-end;
        flex-direction: column;
        margin-top: 50px;
    `;

    const postOuterContainer = document.getElementById('postOuterContainer');
    postOuterContainer.style.cssText = postOuterContainer_styles;


    async function showPosts(responses) {
        responses.forEach(response => {
            const postInnerContainer = document.createElement('div');
            postInnerContainer.classList.add('postInnerContainer');

            const ellipsis = document.createElement('div');
            ellipsis.textContent = '...';
            ellipsis.classList.add('ellipsis');

            // ellipsis popup elements
            const hidePost = document.createElement('div');
            hidePost.textContent = 'Hide Post';
            hidePost.classList.add('popUpElements');
            hidePost.addEventListener('click', () => {
                console.log('hide post');
                console.log(response.post_id);
            });          
            
            const reportPost = document.createElement('div');
            reportPost.textContent = 'Report Post';
            reportPost.classList.add('popUpElements');
            reportPost.addEventListener('click', () => {
                console.log('report post');
            });

            const ellipsisPopUp = document.createElement('div');
            ellipsisPopUp.classList.add('ellipsisPopUp');

            ellipsisPopUp.appendChild(hidePost);
            ellipsisPopUp.appendChild(reportPost);

            let ellipsisInitialState = 1;
            ellipsis.addEventListener('click', (e) => {
                e.stopPropagation();
                if (ellipsisInitialState % 2 === 0) {
                    ellipsisPopUp.classList.add('ellipsisInitialState');
                } else {
                    ellipsisPopUp.classList.remove('ellipsisInitialState');
                }

                ellipsisInitialState++;
                ellipsis.append(ellipsisPopUp);
            });

            document.addEventListener('click', () => {
                ellipsisPopUp.classList.add('ellipsisInitialState');
                console.log('asdsadas');

                ellipsisInitialState = 1;
            });
            
            postInnerContainer.appendChild(ellipsis);

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

            // container para club name
            const clubName = document.createElement('div');
            clubName.classList.add('clubName');

            // club getter
            const club_id = response.club_id;
            (async function getClub() {
                const getter = await fetch(`/getClub?clubId=${club_id}`, {
                    method: 'GET',
                });
                const response = await getter.json();

                if (response.data) {
                    // console.log(response.data);
                    clubName.textContent = response.data.book_club_name;
                } else {
                    console.log(response.error);
                }
            })();

            // container for username tas post date
            const nameAndDateContainer = document.createElement('div');
            nameAndDateContainer.appendChild(userNameCtn);
            nameAndDateContainer.appendChild(postDate);
            nameAndDateContainer.classList.add('nameAndDateContainerForMyWall'); 

            // club name container combination with name and date container;
            const threeInOne = document.createElement('div');
            threeInOne.classList.add('threeInOne');
            threeInOne.appendChild(clubName);
            threeInOne.appendChild(nameAndDateContainer)

            postHeader.appendChild(userProfileCtn);
            postHeader.appendChild(threeInOne);

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
            postFooter.classList.add('postFooter');

            const likeButton = document.createElement('div');
            likeButton.className = 'fa fa-thumbs-o-up';
            likeButton.textContent = ' Like';
            likeButton.addEventListener('click', () => {
                console.log('like clicked');
            });

            const commentButton = document.createElement('div');
            commentButton.className = 'fa fa-comment-o';
            commentButton.style.marginLeft = '15px';
            commentButton.textContent = ' Comment';
            commentButton.addEventListener('click', () => {
                console.log('comment liked');
            });

            postFooter.appendChild(likeButton);
            postFooter.appendChild(commentButton);

            postInnerContainer.appendChild(postHeader);
            postInnerContainer.appendChild(postBody);
            postInnerContainer.appendChild(postFooter);

            postOuterContainer.appendChild(postInnerContainer);
        });
    }
});
