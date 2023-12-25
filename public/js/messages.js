// const csrfTokenn = csrfToken;
let lastMessageTimestamp = '1990-12-12 12:12:12';
let lastConversationTimestamp = '1990-12-12 12:12:12';

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('rightSectionOuterContainer').style.display = 'none';
    
    // ellipsis pop out
    const ellipsisPopUp = document.getElementById('ellipsisPopUp');
    ellipsisPopUp.style.display = 'none';

    // outercontainer it messages
    const messageOuterContainer = document.getElementById('messageOuterContainer');
    
    // outercontainer list para an mga convo
    const conversationList = document.getElementById('conversationList');
    
    // outer container it form
    const formOuterContainer = document.getElementById('formOuterContainer');
    
    // show now conversation
    const showNoConversation = document.createElement('div');

    // initial check ha conversation
    let initialCheckDone = false;

    // initialize current controller
    let currentController = null;

    // get conversations function
    function getConversations() {
        fetch(`/getConversations?lastConversationTimestamp=${lastConversationTimestamp}&current_username=${current_username}`)
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Error in getting messages');
            })
            .then(responses => {
                if (responses.data) {
                    try {
                        lastConversationTimestamp = responses.data[responses.data.length - 1].created_at;
                        initialCheckDone = true;
                        showConversations(responses.data);
                    } catch {
                        // waray na conversation
                    }
                } else if (!initialCheckDone) {
                    // console.log('no conversation found');
                    zeroConversation();
                    initialCheckDone = true;
                }
            })
            .catch(error => console.log(error));
    }
    
    //getConversations();
    setInterval(getConversations, 1500);
    
    // zero conversation
    function zeroConversation() {
        showNoConversation.classList.add('noConversation');
        showNoConversation.textContent = 'No active conversation found. Search for a user to start a conversation';
        
        conversationList.appendChild(showNoConversation);
        //showNoConversation.style.display = 'none';
    }

    // show conversations
    function showConversations(responses) {
        responses.forEach(response => {
            // split anay 
            var stringToArr = response.conversation_name.split(',');
            var checkedReceiverUsername = (stringToArr[0] === current_username) ? stringToArr[1] : stringToArr[0];
            
            const conversationCtn = document.createElement('div');
            conversationCtn.id = 'conversationCtn';
            conversationCtn.classList.add('conversationCtn');

            const receiver_profile_pic = document.createElement('div');
            const imgLocation = window.location.origin + '/images/profile_photos/' + response.profile_photo.profile_photo;

            const receiver_profile_pic_styles = `
                min-height: 50px;
                min-width: 50px;
                border-radius: 15px;
                background-size: cover;
                background-repeat: no-repeat;
            `;

            // para ma apply an mga styles
            receiver_profile_pic.style.cssText = receiver_profile_pic_styles;
            // url an image depende kun hinut user tas it ira image
            receiver_profile_pic.style.backgroundImage = 'url("' + imgLocation + '")'; 

            // image name checker
            //console.log(response.profile_photo.profile_photo);

            const receiver_name = document.createElement('div');
            receiver_name.textContent = checkedReceiverUsername;
            receiver_name.style.paddingLeft = '15px';

            conversationCtn.appendChild(receiver_profile_pic);
            conversationCtn.appendChild(receiver_name);
            
            conversationList.appendChild(conversationCtn);
            
            // add event listener
            conversationCtn.addEventListener('click', function() {
                // checker if mayda last controller request
                if (currentController) {
                    currentController.abort();
                    console.log('previous fetch request aborted');
                } else {
                    console.log('waray pa previous fetch request');
                }

                const controller = new AbortController();
                const signal = controller.signal;
                currentController = controller;

                // pa show an right section or an conversation container between users
                document.getElementById('rightSectionOuterContainer').style.display = 'block';

                lastMessageTimestamp = '1990-12-12 12:12:12';
                
                messageOuterContainer.innerHTML = '';

                // message header container
                const messagesHeaderCtn = document.getElementById('messagesHeaderContainer');
                messagesHeaderCtn.innerHTML = '';
                messagesHeaderCtn.id = 'messagesHeaderContainer';

                // receiver name
                const receiverName = document.createElement('div');
                receiverName.textContent =  checkedReceiverUsername;
                receiverName.style.paddingLeft = '15px';
                
                // receiver photo
                const receiver_photo = document.createElement('div');
                receiver_photo.style.cssText = receiver_profile_pic_styles;
                receiver_photo.style.backgroundImage = 'url("' + imgLocation +'")';
                
                // conversation menu
                const conversationMenu = document.createElement('div');
                conversationMenu.textContent = '...';
                conversationMenu.id = 'conversationMenu';

                // anotherCtn
                const anotherCtn = document.createElement('div');
                anotherCtn.id = 'anotherCtn';

                anotherCtn.appendChild(receiver_photo);
                anotherCtn.appendChild(receiverName);

                messagesHeaderCtn.appendChild(anotherCtn);
                messagesHeaderCtn.appendChild(conversationMenu);
                
                // ay kalimot ig clear it innerHTML para dri mag utro utro it element tas dri man retain it value kada click it container
                formOuterContainer.innerHTML = '';

                const form = document.createElement('form');
                form.id = 'messageForm';
                form.method = 'post';
                
                // input field design
                const inputFieldCss = `
                    width: 400px;
                    border: 1px solid grey;
                `;

                const inputField = document.createElement('input');
                inputField.id = 'messageInputContainer';
                inputField.type = 'textarea';
                inputField.placeholder = 'Type message...';
                inputField.style.cssText = inputFieldCss;                

                const submitButtonCss = `
                    width: 120px;
                    border: 1px solid grey;
                    background-color: #003060;
                    color: white;
                `;

                const submitButton = document.createElement('button');
                submitButton.id = 'sendMessageButton';
                submitButton.type = 'button';
                submitButton.textContent = 'Send';
                submitButton.style.cssText = submitButtonCss;

                form.appendChild(inputField);
                form.appendChild(submitButton);
                formOuterContainer.appendChild(form);

                
                // pag kuha mga messages
                function getMessages() {
                    fetch(`/getMessage?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${response.conversation_name}`, {
                        method: 'GET',
                        signal: signal
                    })
                        .then(response => {
                            if (response.ok) {
                                return response.json();
                            }
                            throw new Error('Error in getting messages');
                        })
                        .then(responses => {
                            if (responses.data) {
                                try {
                                    lastMessageTimestamp = responses.data[responses.data.length - 1].created_at;
                                    displayMessages(responses.data);
                                    console.log(responses.data);
                                } catch {
                                    // console.log('no new messages');
                                }
                            }
                        })
                        .catch(error => console.log(error));
                }

                // display messages ha search na approach
                function displayMessages(responses) {
                    responses.forEach(response => {
                        const messageInnerContainer = document.createElement('div');
                        messageInnerContainer.classList.add('messageInnerContainer');

                        const messageCtn = document.createElement('div');
                        messageCtn.textContent = response.message_content;
                        messageCtn.id = "messageCtn";
                        
                        const messageReceiverPhoto = document.createElement('div');
                        messageReceiverPhoto.style.cssText = receiver_profile_pic_styles;
                        messageReceiverPhoto.style.backgroundImage = 'url("' + imgLocation +'")';

                        if (response.sender_id == current_user_id) {
                            messageCtn.classList.add('messageRight');
                            messageOuterContainer.appendChild(messageCtn);
                        } else {
                            messageInnerContainer.classList.add('messageLeft');
                            messageCtn.classList.add('messageCtnLeft');
                            messageInnerContainer.appendChild(messageReceiverPhoto);
                            messageInnerContainer.appendChild(messageCtn);
                            messageOuterContainer.appendChild(messageInnerContainer);                            
                        }


                        messageOuterContainer.scrollTop = messageOuterContainer.scrollHeight;
                    });
                }

                //bug here
                //getMessages();
                setInterval(getMessages, 1500);

                document.getElementById('sendMessageButton').addEventListener('click', function() {
                    const message_content = document.getElementById('messageInputContainer').value;

                    // conversation name
                    // conversation_name = response.conversation_name;
                    console.log(response.conversation_name);
                    
                    const data = {
                        current_username: current_username,
                        sender_id: current_user_id,
                        message_content: message_content,
                        conversation_name: response.conversation_name,
                        conversation_id: response.conversation_id
                    };
    
                    // pag send message
                    fetch('/sendMessageTwo', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify(data),
                    })
                        .then(responses => {
                            if (responses.ok) {
                                return responses.json();
                            }
                            throw new Error('Sending message error');
                        })
                        .then(response => {
                            //console.log(response);
                            document.getElementById('messageForm').reset();
                        })
                        .catch(error => console.log(error));
                });    
                
                //delete Conversation Ctn Based. 'event tikang ha conversation list na click'
                conversationMenu.addEventListener('click', function() {
                    // ellipsis changes
                    ellipsisPopUp.style.display = 'block';
                    
                    // elements ha ellipsis
                    const popUpOuterContainer = document.createElement('div');
                    popUpOuterContainer.classList.add('popUpOuterContainer');

                    const popUpInnerContainer = document.createElement('div');
                    popUpInnerContainer.classList.add('popUpInnerContainer');

                    const popUpMessage = document.createElement('div');
                    popUpMessage.textContent = 'Are you sure you want to delete this conversation?';
                    popUpMessage.classList.add('popUpMessage');
                    
                    const buttonCss = `
                        height: 65px;
                        width: 150px;
                        font-size: 18px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border-radius: 10px;
                        background-color: #003060;
                        color: white;
                    `;

                    const yesButton = document.createElement('div');
                    yesButton.type = 'button';
                    yesButton.textContent = 'Yes';
                    yesButton.style.cssText = buttonCss;

                    const noButton = document.createElement('div');
                    noButton.type = 'button';
                    noButton.textContent = 'No';
                    noButton.style.cssText = buttonCss;

                    const popUpButtonCtn = document.createElement('div');
                    popUpButtonCtn.classList.add('popUpButtonCtn');

                    popUpButtonCtn.appendChild(yesButton);
                    popUpButtonCtn.appendChild(noButton);

                    // append an mga elements ha inner popup container
                    popUpInnerContainer.appendChild(popUpMessage);
                    popUpInnerContainer.appendChild(popUpButtonCtn);

                    // append an inner pop up ha outer popup
                    popUpOuterContainer.appendChild(popUpInnerContainer);

                    // append ha pinaka outer
                    ellipsisPopUp.appendChild(popUpOuterContainer);
                    ellipsisPopUp.classList.add('ellipsisPopUp');

                    // yes button if clicked
                    yesButton.addEventListener('click', function() {
                        fetch(`/deleteConversationCtnBased?conversation_id=${response.conversation_id}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            },
                        })
                        .then(responses => {
                            if (responses.ok) {
                                return responses.json();
                            }
                            throw new Error('Error in deleting conversation');
                        })
                        .then(response => {
                            console.log('Conversation deleted successfully');

                            // remove conversation container after ma delete
                            conversationCtn.remove();
                            rightSectionOuterContainer.style.display = 'none';
                            ellipsisPopUp.style.display = 'none';
                        })
                        .catch(error => console.log(error));
                    });
                    
                    // no button if clicked
                    noButton.addEventListener('click', () => {
                        ellipsisPopUp.style.display = 'none';
                    });

                    // pag mag click outer container an kanan pop up
                    ellipsisPopUp.addEventListener('click', () => {
                        ellipsisPopUp.style.display = 'none';
                        ellipsisPopUp.innerHTML = '';
                    });

                    popUpInnerContainer.addEventListener('click', function(event) {
                        // stopPropagation dri gin aallow na mag bubble up it handlers from child to parent/root element
                        event.stopPropagation();
                    });
                });
            });
        });
    }
    
    // search function
    function searchUser(username) {
        const searchResult = document.createElement('div');

        //clear it outercontainer
        document.getElementById('searchInputContainer').value = "";
       // searchResult.innerHTML = "";
        const searchOuterCtn = document.getElementById('searchOuterContainer');

        if (searchOuterCtn.children.length >= 2) {
            const secondChild = searchOuterCtn.children[1];

            secondChild.remove();
        } else {
            console.log('waray child');
        }

        const xhttp = new XMLHttpRequest();
        
        xhttp.open('GET', `/searchUser?username=${username}`, true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                const responses = JSON.parse(this.responseText);
                
                console.log(responses);
                console.log(responses.data);
                if (responses.data) {

                    searchResult.textContent = responses.data.username;
                    console.log(searchResult.textContent);
                    
                    searchResult.classList.add('searchResult');

                    
                    searchOuterCtn.appendChild(searchResult);
                    
                    if (searchOuterCtn && searchResult) {
                        searchOuterCtn.removeChild(searchResult);
                    }
                    const imgLocation = window.location.origin + '/images/profile_photos/' + responses.data.profile_photo;

                    const receiver_profile_pic_styles = `
                        min-height: 50px;
                        min-width: 50px;
                        border-radius: 15px;
                        background-size: cover;
                        background-repeat: no-repeat;
                    `;
                    
                    searchOuterCtn.appendChild(searchResult);
                    searchResult.addEventListener('click', function() {
                        // check if mayda previous fetch request if mayda ig aabort
                        if (currentController) {
                            currentController.abort();
                            console.log('previous fetch request aborted "search approach"');
                        } else {
                            console.log('waray pa previous fetch request "search approach"');
                        }

                        const controller = new AbortController();
                        const signal = controller.signal;
                        currentController = controller;

                        const receiver_namee = responses.data.username;
                        console.log(receiver_namee);

                        const rightSectionOuterContainer = document.getElementById('rightSectionOuterContainer');
                        rightSectionOuterContainer.style.display = 'block';

                        searchResult.remove();
                        // clear it outer container
                        messageOuterContainer.innerHTML = '';

                        // message header container
                        const messagesHeaderContainer = document.getElementById('messagesHeaderContainer');
                        messagesHeaderContainer.innerHTML = '';
                        messagesHeaderContainer.id = 'messagesHeaderContainer';

                        // conversation menu
                        const conversationMenu = document.createElement('div');
                        conversationMenu.textContent = '...';
                        conversationMenu.id = 'conversationMenu';

                        // receiver name
                        const receiverName = document.createElement('div');
                        receiverName.textContent = responses.data.username;
                        receiverName.style.paddingLeft = '15px';

                        // receiver photo
                        const receiver_photo = document.createElement('div');
                        receiver_photo.style.cssText = receiver_profile_pic_styles;
                        receiver_photo.style.backgroundImage = 'url("' + imgLocation +'")';

                        // anotherCtn
                        const anotherCtn = document.createElement('div');
                        anotherCtn.id = 'anotherCtn';

                        anotherCtn.appendChild(receiver_photo);
                        anotherCtn.appendChild(receiverName);

                        messagesHeaderContainer.appendChild(anotherCtn);
                        messagesHeaderContainer.appendChild(conversationMenu);

                        // clear an outer container an kanan form para dri mag retain an mga elements
                        formOuterContainer.innerHTML = '';

                        //console.log(jsonArr);
                        searchResult.textContent = null;
                        
                        // create form, input, submitButton
                        const form = document.createElement('form');
                        form.id = 'messageForm';
                        form.method = 'post';
                        
                        const inputField = document.createElement('input');
                        inputField.id = 'messageInputContainer';
                        inputField.type = 'textarea';
                        inputField.placeholder = 'Type message...';

                        const submitButton = document.createElement('button');
                        submitButton.id = 'sendMessageButton';
                        submitButton.type = 'button';
                        submitButton.textContent = 'Send';

                        form.appendChild(inputField);
                        form.appendChild(submitButton);

                        formOuterContainer.appendChild(form);
                        
                        // message timestamp
                        lastMessageTimestamp = '1990-12-12 12:12:12';                        
                        
                        const receiver_username = responses.data.username;

                        const convoName = current_username + ',' + receiver_username;

                        // pag kuha messages ha db based ha conversation id
                        function getMessages() {    
                            // conversation name para mayda niya reference hain it kuha.on
                            // console.log(convoName);
                            
                            fetch(`/getMessage?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${convoName}`, {
                                method: 'GET',
                                signal: signal,
                            })
                                .then(response => {
                                    if (response.ok) {
                                        return response.json();
                                    } else {
                                        throw new Error('error in getting messages');
                                    }
                                })
                                .then(responses => {
                                    if (responses.data) {
                                        try {
                                            lastMessageTimestamp = responses.data[responses.data.length - 1].created_at;
                                            // console.log(lastMessageTimestamp);
                                            displayMessages(responses.data);
                                        } catch {
                                            // not getting any messages
                                        }
                                    }
                                })
                                .catch(error => console.log(error));
                        };

                        // tawag an getMessages once maka click nat user ha search result
                        setInterval(getMessages, 1500); 
                        //getMessages();

                        // display messages ha search na approach
                        function displayMessages(responses) {
                            responses.forEach(response => {
                                const messageInnerContainer = document.createElement('div');
                                messageInnerContainer.classList.add('messageInnerContainer');

                                const messageCtn = document.createElement('div');
                                messageCtn.textContent = response.message_content;
                                messageCtn.id = "messageCtn";
                                
                                const messageReceiverPhoto = document.createElement('div');
                                messageReceiverPhoto.style.cssText = receiver_profile_pic_styles;
                                messageReceiverPhoto.style.backgroundImage = 'url("' + imgLocation +'")';

                                if (response.sender_id == current_user_id) {
                                    messageCtn.classList.add('messageRight');
                                    messageOuterContainer.appendChild(messageCtn);
                                } else {
                                    messageInnerContainer.classList.add('messageLeft');
                                    messageCtn.classList.add('messageCtnLeft');
                                    messageInnerContainer.appendChild(messageReceiverPhoto);
                                    messageInnerContainer.appendChild(messageCtn);
                                    messageOuterContainer.appendChild(messageInnerContainer);                            
                                }

                                messageOuterContainer.scrollTop = messageOuterContainer.scrollHeight;
                            });
                        }

                        // text area ha form
                        document.getElementById('sendMessageButton').addEventListener('click', function() {
                            const messageValue = document.getElementById('messageInputContainer').value;
                            
                            // creation of conversation container
                            const xhttp1 = new XMLHttpRequest();
                            
                            // conversation name
                            const conversation_name = current_username + "," + responses.data.username; 
                            
                            xhttp1.open('POST', '/conversations', true);
                            xhttp1.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                            xhttp1.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    
                            xhttp1.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    const responses = JSON.parse(this.responseText);
                                    console.log(responses);
                                    // bugs here
                                    // getConversations();
                                    // getMessages();
                                    showNoConversation.style.display = 'none';
                                } else {
                                    console.log('Post denied' + 'message');
                                }
                            }
    
                            const conversation_data = JSON.stringify({
                                conversation_name: conversation_name 
                            });
                        
                            xhttp1.send(conversation_data);
                            
                            // pag send message
                            const xhttp = new XMLHttpRequest();
                        
                            xhttp.open('POST', '/sendMessage', true);
                            xhttp.setRequestHeader('Content-Type', 'application/json');
                            xhttp.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                        
                            xhttp.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    const response = JSON.parse(this.responseText);
                                    console.log(response.message);
                                    document.getElementById('messageForm').reset();
                                } else {
                                    console.log('failed an pag request');
                                }
                            } 
                        
                            const data = JSON.stringify({
                                sender_id: current_user_id,
                                receiver_id: responses.data['id'],
                                message_content: messageValue,
                                conversation_name: conversation_name
                            });
                            
                            xhttp.send(data);
                        });  


                        // conversationMenu.addEventListener('click', function() {
                        //     console.log('delete kuntaloy');
                        // });

                        
                        //delete Conversation Ctn Based. 'event tikang ha conversation list na click'
                        conversationMenu.addEventListener('click', function() {
                            // ellipsis changes
                            ellipsisPopUp.style.display = 'block';
                            
                            // elements ha ellipsis
                            const popUpOuterContainer = document.createElement('div');
                            popUpOuterContainer.classList.add('popUpOuterContainer');

                            const popUpInnerContainer = document.createElement('div');
                            popUpInnerContainer.classList.add('popUpInnerContainer');

                            const popUpMessage = document.createElement('div');
                            popUpMessage.textContent = 'Are you sure you want to delete this conversation?';
                            popUpMessage.classList.add('popUpMessage');
                            
                            const buttonCss = `
                                height: 65px;
                                width: 150px;
                                font-size: 18px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                border-radius: 10px;
                                background-color: #003060;
                                color: white;
                            `;

                            const yesButton = document.createElement('div');
                            yesButton.type = 'button';
                            yesButton.textContent = 'Yes';
                            yesButton.style.cssText = buttonCss;

                            const noButton = document.createElement('div');
                            noButton.type = 'button';
                            noButton.textContent = 'No';
                            noButton.style.cssText = buttonCss;

                            const popUpButtonCtn = document.createElement('div');
                            popUpButtonCtn.classList.add('popUpButtonCtn');

                            popUpButtonCtn.appendChild(yesButton);
                            popUpButtonCtn.appendChild(noButton);

                            // append an mga elements ha inner popup container
                            popUpInnerContainer.appendChild(popUpMessage);
                            popUpInnerContainer.appendChild(popUpButtonCtn);

                            // append an inner pop up ha outer popup
                            popUpOuterContainer.appendChild(popUpInnerContainer);

                            // append ha pinaka outer
                            ellipsisPopUp.appendChild(popUpOuterContainer);
                            ellipsisPopUp.classList.add('ellipsisPopUp');

                            // yes button if clicked
                            yesButton.addEventListener('click', function() {
                                fetch(`/deleteConversationSearchBased?conversation_name=${convoName}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                })
                                .then(responses => {
                                    if (responses.ok) {
                                        return responses.json();
                                    }
                                    throw new Error('Error in deleting conversation');
                                })
                                .then(response => {
                                    console.log('Conversation deleted successfully',  response);

                                    rightSectionOuterContainer.style.display = 'none';
                                    ellipsisPopUp.style.display = 'none';
                                })
                                .catch(error => console.log(error));
                            });
                            
                            // no button if clicked
                            noButton.addEventListener('click', () => {
                                ellipsisPopUp.style.display = 'none';
                            });

                            // pag mag click outer container an kanan pop up
                            ellipsisPopUp.addEventListener('click', () => {
                                ellipsisPopUp.style.display = 'none';
                                ellipsisPopUp.innerHTML = '';
                            });

                            popUpInnerContainer.addEventListener('click', function(event) {
                                // stopPropagation dri gin aallow na mag bubble up it handlers from child to parent/root element
                                event.stopPropagation();
                            });
                        });
                    });
                } else {
                    // if waray user //searchResult //searchOuterCtn
                    console.log('username does not exist');

                    searchResult.textContent = 'No user found';
                    searchResult.classList.add('searchResult');

                    searchOuterCtn.appendChild(searchResult);
                }
            }
        }

        xhttp.send();
    }

    // search input container
    document.getElementById('searchButton').addEventListener('click', function() {
        var username = document.getElementById('searchInputContainer').value;
        
        if (username == '') {
            //searchResult.style.display = 'none';
            console.log('input something');
        } else {
            console.log('search input container data sent to search function');
            searchUser(username);
        }
        username.innerHTML = '';
    });
});
