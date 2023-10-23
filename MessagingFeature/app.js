let lastMessageTimestamp = "1990-12-12 12:12:12";

document.addEventListener("DOMContentLoaded", function () {
	// Message Container
	const conversationContainer = document.getElementById("conversationContainer");

	// Conversation List
	const conversationList = document.getElementById("conversationList");

	// receiverUserID
	let receiverUserID = 0;

	// timestamp
	let lastConversationTimestamp = "1990-12-12 12:12:12";

	// receiver data para an conversation table
	let receiverUserName = "";

	// pag show mga conversation table
	function getConversationTable() {
		const xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function () {
			if (xhttp.readyState === 4 && xhttp.status === 200) {
				const responses = JSON.parse(xhttp.responseText);
				if (responses.length > 0) {
					console.log(responses);
					lastConversationTimestamp = responses[responses.length - 1].timestamp;
					showConversationList(responses);
				} else {
					//console.log("Waray sulod it reponse na tikang ha get conversation table");
				}
			}
		}

		// na gamit backtick syntax para mag pass parameter tikadto get_conversation file
		xhttp.open("GET", `get_conversationTable.php?lastConversationTimestamp=${lastConversationTimestamp}`, true);
		xhttp.send();
		//console.log("na eexecute ako");
	}
//	getConversationTable();
	setInterval(getConversationTable, 500);

	function showConversationList(responses) {
		responses.forEach(response => {
			// create hin container kada element na gin return
			const convoCtn = document.createElement("div");

			// mga attributes na need ig add, add nala didi it style para it container
			convoCtn.classList.add("convoCtn");
			convoCtn.textContent = response.conversationName;

			conversationList.appendChild(convoCtn);

			// mga argument ha mga open functions dinhi na scope

			convoCtn.addEventListener("click", function() {
				conversationContainer.innerHTML = "";

				lastMessageTimestamp = "1990-12-12 12:12:12";

				console.log("hello " + response.conversationName + " " + response.conversationID);

                                // Creating container for potential participants
                                const form = document.createElement("form");
                                form.method = "post";

	                        const input = document.createElement("input");
                                input.type = "text";
                                input.id = "inputField";
                                input.placeholder = "Message...";

                                const sendButton = document.createElement("button");
                                sendButton.type = "button";
                                sendButton.id = "sendMessage";
                                sendButton.textContent = "Send";

                                form.appendChild(input);
                                form.appendChild(sendButton);

                                conversationContainer.appendChild(form);
                                conversationContainer.classList.add("conversationContainer");

				const conversationID = response.conversationID;

				// pag kuha mga existing messages ha db depende it current user
				function gettingMessages() {
					const xhttp = new XMLHttpRequest();

					xhttp.onreadystatechange = function () {
                                        	if (this.readyState === 4 && this.status === 200) {
							const response = JSON.parse(this.responseText);
							if (response.length > 0) {
                	                        		lastMessageTimestamp = response[response.length - 1].timestamp;
								showMessages(response);
							} else {
								//console.log("waray sulod it messages tikang ha db");
							}

                                       		 }
                                	}

					const conversationName = response.conversationName;

					xhttp.open("GET", `get_message3.php?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${conversationName}`, true);
					xhttp.send();
				}

//				gettingMessages();
				setInterval(gettingMessages, 500);

				// add event listener ha existing convo
				document.getElementById("sendMessage").addEventListener("click", function () {
					// kuha value ha input field
					const inputField = document.getElementById("inputField");
					const inputFieldValue = inputField.value;
					console.log(response.conversationID);

					// const participantsUserName = currentUserName + "," + response

					const sendMessageJson = JSON.stringify({
						receiverUserDetail: response.conversationName,
						inputFieldValue: inputFieldValue,
						conversationID: response.conversationID
					});

					const xhttp = new XMLHttpRequest();

					xhttp.onreadystatechange = function () {
						if (this.readyState === 4 && this.status === 200) {
							//const response = JSON.parse(this.responseText);
							//console.log(response);
						}
					}

					xhttp.open("POST", "send_messages2.php", true);
					xhttp.setRequestHeader("Content-Type", "application/json");

					xhttp.send(sendMessageJson);
					inputField.value = "";
				});
			});
		});
	}

	// pag display messsage tikanag ha db
	function displayMessages(messages) {
		messages.forEach(message => {
			const messageDiv = document.createElement("div");
			messageDiv.textContent = message.content;
			//parseInt(message.senderID)
			if (message.senderID == currentUserID) {
				messageDiv.classList.add("messageRight");
			} else {
				messageDiv.classList.add("messageLeft");
			}
			conversationContainer.appendChild(messageDiv);
		});
	}

	//pag display messsage tikanag ha db
	function showMessages(messages) {
		messages.forEach(message => {
			const messageDiv = document.createElement("div");
			messageDiv.textContent = message.content;
			//parseInt(message.senderID)
			if (message.senderID == currentUserID) {
				messageDiv.classList.add("messageRight");
			} else {
				messageDiv.classList.add("messageLeft");
			}
			conversationContainer.appendChild(messageDiv);
		});
	}

	// Search user / search function
	function searchUser(username) {
		conversationContainer.innerHTML = "";
		const searchResult = document.getElementById("searchResult");
		searchResult.innerHTML = "";

		const xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function () {
			if (this.readyState === 4 && this.status === 200) {
				//console.log("Request Success ha part na kanan search");
				const response = JSON.parse(this.responseText);
				console.log(response);
				if (response.length > 0) {
					const searchDiv = document.createElement("div");
					searchDiv.textContent = response[0].username;
					searchDiv.classList.add("searchResultCtn");

					searchResult.appendChild(searchDiv);


					// Event Listener
					searchDiv.addEventListener("click", function  () {
						conversationContainer.innerHTML = "";

						lastMessageTimestamp = "1990-12-12 12:12:12";

						receiverUserID = response[0].userID;
						receiverUserName = response[0].username;

						// Creating container for potential participants
						const form = document.createElement("form");
						form.method = "post";

						const input = document.createElement("input");
						input.type = "text";
						input.id = "inputField";
						input.placeholder = "Message...";

						const sendButton = document.createElement("button");
						sendButton.type = "button";
						sendButton.id = "sendMessage";
						sendButton.textContent = "Send";

						form.appendChild(input);
						form.appendChild(sendButton);

						conversationContainer.appendChild(form);
						conversationContainer.classList.add("conversationContainer");
						searchField.value = "";
						searchDiv.style.display = "none";


						//pag kuha message ha db
						function getMessages() {
							const xhttp = new XMLHttpRequest();

							xhttp.onreadystatechange = function () {
								if (this.readyState === 4 && this.status === 200) {
									var messages = JSON.parse(this.responseText);
									if (messages.length > 0) {
										lastMessageTimestamp = messages[messages.length - 1].timestamp;
										//console.log(lastMessageTimestamp);
										displayMessages(messages);
									}
					        		}
							}

							const conversationName = currentUserName + "," + receiverUserName;
							console.log(conversationName);

							//xhttp.open("GET", `get_messages.php?lastMessageTimestamp=${lastMessageTimestamp}&receiverUserID=${receiverUserID}`, true);
							xhttp.open("GET", `get_message3.php?lastMessageTimestamp=${lastMessageTimestamp}&conversationName=${conversationName}`, true);
							xhttp.send();
						}

						//getMessages();
						setInterval(getMessages, 1200);

						// Sending message to db
						document.getElementById("sendMessage").addEventListener("click", function () {
							const xhttp1 = new XMLHttpRequest();

							const senderUserID = currentUserID;
							receiverUserID = response[0].userID;
							const participantsUserIDs = senderUserID.toString() + "," + receiverUserID.toString();

							const senderUserName = currentUserName;
							receiverUserName = response[0].username;
							const participantsUserName = senderUserName + "," + receiverUserName;

							var conversationTableData = JSON.stringify({
								//participantsUserIDs : participantsUserIDs
								participantsUserName : participantsUserName
							});

							xhttp1.onload = function() {
								if (xhttp1.status >= 200 && xhttp1.status < 300) {
									console.log("Conversation Table Request Success");
								} else {
									console.log("Conversation Table Request Denied");
								}
							}
							console.log(conversationTableData);

							xhttp1.open("POST", "conversationTable.php", true);
							xhttp1.setRequestHeader("Content-Type", "application/json");

							xhttp1.send(conversationTableData);

							// Staring line code for sending message
							const inputField = document.getElementById("inputField");
							const inputFieldMessage = inputField.value;

							const xhttp = new XMLHttpRequest();
							const otherMessageData = JSON.stringify({
								messageValue : inputFieldMessage,
								receiverID : response[0].userID,
								participantsUserName : participantsUserName
							});

							xhttp.open("POST", "send_messages.php", true);
							xhttp.setRequestHeader("Content-Type", "application/json");

							xhttp.onload = function () {
								if (xhttp.status >= 200 && xhttp.status < 300) {
									console.log("Request success");
								} else {
									console.log("Request denied");
								}
							}

							xhttp.send(otherMessageData);
							inputField.value = "";
						});
						console.log("clicked");
					});
				} else {
					const searchDiv = document.createElement("div");
					searchDiv.textContent = "User does not exist";
					searchDiv.classList.add("searchResultCtn");
					searchResult.appendChild(searchDiv);
				}
			} else {
				console.log("Request Denied ha part na kanan search");
			}
		};
		// kanan search user na open function
		xhttp.open("GET", `searchUser.php?username=${username}`, true);
		xhttp.send();
	}

	// Event listener
	document.getElementById("searchButton").addEventListener("click", function () {
		const username = document.getElementById("searchField").value;

		console.log("CLICKED HA TEXT FIELD");
		searchUser(username);
	});
});

