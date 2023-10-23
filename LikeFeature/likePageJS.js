// dito ang simula

document.addEventListener("DOMContentLoaded", function () {
	// getting outer container
	const outerContainer = document.getElementById("outerContainer");

	// himo function an para mga gin like na libro
	function getLikedBooks() {
		const xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function() {
			if (this.readyState === 4 && this.status === 200) {
				const responses = JSON.parse(this.responseText);

				console.log(responses);
				if (responses.length > 0) {
					console.log("mayda sulod an result set");
					displayLikedBooks(responses);
			 	} else {
					console.log("waray sulod an result set");
				}
			} else {
				//console.log("waray sulod it result set");
			}
		}

		// ha second parameter ha send kita hin arguments para ig handto didto tat php file
		xhttp.open("GET", `get_liked_book.php?currentUserID=${currentUserID}`, true);
		xhttp.send();
	}

	// set interval para sigi lat tawag ha getLikedBook na function
	//setInterval(getLikedBooks, 200);

	getLikedBooks();

	// himo function para ig display it rresult set haat php file
	function displayLikedBooks(responses) {
		responses.forEach(response => {
			const innerContainer = document.createElement("div");

			const responseDiv = document.createElement("div");
			responseDiv.textContent = response.book_title;

			const unLikeBtn = document.createElement("div");
			unLikeBtn.textContent = "Unlike";

			const cartBtn = document.createElement("div");
			cartBtn.textContent = "cartBtn";

			innerContainer.appendChild(responseDiv);
			innerContainer.appendChild(unLikeBtn);
			innerContainer.appendChild(cartBtn);
			innerContainer.classList.add("innerContainer");

			outerContainer.appendChild(innerContainer);

			console.log(response.liked_book_ID);

			// unlike button event
			unLikeBtn.addEventListener("click", function () {
				const xhttp = new XMLHttpRequest();

				xhttp.onload = function () {
					if (this.status >= 200 && this.status < 300) {
						console.log("Success");
					} else {
						console.log("Denied");
					}
				}

				const postData = JSON.stringify({
					liked_book_ID :	response.liked_book_ID
				});

				xhttp.open("DELETE", "delete_liked_book.php", true);
				xhttp.setRequestHeader("Content-Type", "application/json");
				xhttp.send(postData);
			});
		});
	}

});
