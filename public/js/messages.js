// const csrfTokenn = csrfToken;
let lastMessageTimestamp = '1990-12-12 12:12:12';
let lastConversationTimestamp = '1990-12-12 12:12:12';

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('rightSectionOuterContainer').style.visibility = 'hidden';
    
    // outercontainer it messages
    const messageOuterContainer = document.getElementById('messageOuterContainer');
    
    // outercontainer list para an mga convo
    const conversationList = document.getElementById('conversationList');
    
    // outer container it form
    const formOuterContainer = document.getElementById('formOuterContainer');
    
    // search result
    const searchResult = document.createElement('div');

    // show now conversation
    const showNoConversation = document.createElement('div');

    // get conversations function
    function getConversations() {
        const xhttp = new XMLHttpRequest();

        xhttp.open('GET', `/getConversations?lastConversationTimestamp=${lastConversationTimestamp}&current_username=${current_username}`, true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                const responses = JSON.parse(this.responseText);
                
                // checker if may sulod
                if (responses.data) {
                    lastConversationTimestamp = responses.data[responses.data.length - 1].created_at;
                    showConversations(responses.data);
                } else {
                    //console.log('waray pa conversations');
                    zeroConversation();
                }
            }
        }
        
        xhttp.send();
    }
    
    //bug here
    getConversations();
    //setInterval(getConversations, 1200);
    
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
                document.getElementById('rightSectionOuterContainer').style.visibility = 'visible';

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

                messagesHeaderCtn.appendChild(receiver_photo);
                messagesHeaderCtn.appendChild(receiverName);

                // ay kalimot ig clear it innerHTML para dri mag utro utro it element tas dri man retain it value kada click it container
                formOuterContainer.innerHTML = '';

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
                
                // pag kuha mga messages
                function getMessages() {
                    const xhttp = new XMLHttpRequest();
                    xhttp.open('GET', `/getMessage?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${response.conversation_name}`, true);
                    xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    
                    xhttp.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            const responses = JSON.parse(this.responseText);
                             
                            if (responses) {
                                try {
                                    lastMessageTimestamp = responses.data[responses.data.length - 1].created_at;
                                    displayMessages(responses.data);
                                    console.log(responses.data);
                                    console.log(response.conversation_name);
                                } catch {
                                    //console.log("waray bago na message");
                                }
                            }
                        }
                    }
    
                    xhttp.send();
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
                getMessages();
                //setInterval(getMessages, 1500);

                document.getElementById('sendMessageButton').addEventListener('click', function() {
                    const message_content = document.getElementById('messageInputContainer').value;

                    // conversation name
                    // conversation_name = response.conversation_name;
                    console.log(response.conversation_name);
    
                    // pag send message
                    const xhttp1 = new XMLHttpRequest();
                            
                    xhttp1.open('POST', '/sendMessageTwo', true);
                    xhttp1.setRequestHeader('Content-Type', 'application/json');
                    xhttp1.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                
                    xhttp1.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            const response = JSON.parse(this.responseText);
                            console.log(response.message);
                            document.getElementById('messageForm').reset();
                            getMessages();
                        } else {
                            console.log('failed an pag request');
                        }
                    } 
                
                    const data = JSON.stringify({
                        current_username: current_username,
                        sender_id: current_user_id,
                        message_content: message_content,
                        conversation_name: response.conversation_name,
                        conversation_id: response.conversation_id
                    });
                    
                    xhttp1.send(data);
                });    

            });
            
            // try pag pa work it pag delete gamit pag hold it container itself
            // conversationCtn.addEventListener('touchstart', function() {
            //     setTimeout(function() {
            //         const xhttp = new XMLHttpRequest();
            //         xhttp.open('DELETE', `/deleteConversation?conversation_id=${response.conversation_id}`, true);
            //         xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            //         xhttp.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            //         xhttp.onreadystatechange = function() {
            //             if (this.readyState === 4 && this.status === 200) {
            //                 const responses = JSON.parse(this.responseText);

            //                 if (responses) {
            //                     console.log(responses);
            //                 }
            //             }
            //         }
            //         console.log('na hold for 1.5sec');
            //         xhttp.send();
            //     }, 1500);
            // });

            // conversationCtn.addEventListener('touchend', function() {
            //     // clearTimeout(timeout);
            //     console.log('touch ended');            
            // });

        });
    }
    
    // search function
    function searchUser(username) {
        document.getElementById('searchInputContainer').value = "";
        searchResult.classList.add('searchResult');
        searchResult.innerHTML = "";
        const searchOuterCtn = document.getElementById('searchOuterContainer');

        const xhttp = new XMLHttpRequest();
        
        xhttp.open('GET', `/searchUser?username=${username}`, true);
        xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                const responses = JSON.parse(this.responseText);


                if (responses.data) {
                    searchResult.textContent = responses.data.username;
                    searchOuterCtn.appendChild(searchResult);

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
                        document.getElementById('rightSectionOuterContainer').style.visibility = 'visible';
                        searchResult.style.display = 'none';

                        // clear it outer container
                        messageOuterContainer.innerHTML = '';

                        // message header container
                        const messagesHeaderContainer = document.getElementById('messagesHeaderContainer');
                        messagesHeaderContainer.innerHTML = '';
                        messagesHeaderContainer.id = 'messagesHeaderContainer';
                        
                        // receiver name
                        const receiverName = document.createElement('div');
                        receiverName.textContent = responses.data.username;
                        receiverName.style.paddingLeft = '15px';

                        // receiver photo
                        const receiver_photo = document.createElement('div');
                        receiver_photo.style.cssText = receiver_profile_pic_styles;
                        receiver_photo.style.backgroundImage = 'url("' + imgLocation +'")';

                        messagesHeaderContainer.appendChild(receiver_photo);
                        messagesHeaderContainer.appendChild(receiverName);


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
                        
                        // messaga timestamp
                        lastMessageTimestamp = '1990-12-12 12:12:12';                        
                        
                        // pag kuha messages ha db based ha conversation id
                        function getMessages() {    
                            const receiver_username = responses.data.username;

                            // conversation name para mayda niya reference hain it kuha.on
                            const convoName = current_username + "," + receiver_username;
                            console.log(convoName);
                                                    
                            const xhttp = new XMLHttpRequest();
                            
                            xhttp.open('GET', `/getMessage?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${convoName}`, true);
                            xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                            
                            xhttp.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    
                                    const responses = JSON.parse(this.responseText);
                                    if (Object.keys(responses).length > 0) {
                                        try {
                                            lastMessageTimestamp = responses.data[responses.data.length - 1].created_at;
                                            console.log(lastMessageTimestamp);
                                        } catch {
                                            //console.log("waray bago na message");
                                        }
                                        //console.log(responses);
                                        displayMessages(responses.data);                
                                    } else {
                                        console.log('Nothing inside result set');
                                    }
                                }
                            }
                            
                            xhttp.send();
                        };

                        // tawag an getMessages once maka click nat user ha search result
                        // setInterval(getMessages, 1500); 
                        getMessages();

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
                                    getConversations();
                                    getMessages();
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
                    });
                
                } else {
                    console.log('username does not exist');
                }
            }
        }

        xhttp.send();
    }

    // search input container
    document.getElementById('searchButton').addEventListener('click', function() {
        var username = document.getElementById('searchInputContainer').value;

        if (username == '') {
            searchResult.style.display = 'none';
            console.log('input something');
        } else {
            console.log('search input container data sent to search function');
            searchUser(username);
        }
        username = '';
        console.log(username);
    });

});
