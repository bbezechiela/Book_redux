// dito ang simula
// simula ng lahat
document.addEventListener("DOMContentLoaded", () => {
	// outer container
	const postContainer = document.getElementById("postContainer");
	postContainer.setAttribute("id", "outerContainer");

	// create function pag kuha mga gin post ha db
	function getPosts() {
		console.log("asda");
		const xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function () {
			if (this.readyState === 4 && this.status === 200) {
				const responses = JSON.parse(this.responseText);

				if (responses.length > 0) {
					responses.forEach(response => {
						// surudlan hin content na tikang ha db
						const responseDiv = document.createElement("div");
						responseDiv.textContent = response.book_title;
						responseDiv.classList.add("responseDiv");

						// two div's para an mga event listener an pan like tas pan wishlish
						const addToLike = document.createElement("div");
						const addToCart = document.createElement("div");

						addToLike.textContent = "Like";
						addToCart.textContent = "Wish List";

						// parent element hin atun response div
						const innerContainer = document.createElement("div");
						innerContainer.classList.add("innerContainer");
						innerContainer.appendChild(responseDiv);
						innerContainer.appendChild(addToLike);
						innerContainer.appendChild(addToCart);

						// append ha outer container
						postContainer.appendChild(innerContainer);

						// event listener para ha like feature
						addToLike.addEventListener("click", function () {
							console.log(response.book_ID);
							const xhttp = new XMLHttpRequest();

							xhttp.onload = function () {
								if (this.status >= 200 && this.status < 300) {
									console.log("Request Success");
								} else {
									console.log("Request Denied");
								}
							}

							const postData = JSON.stringify({
								bookID : response.book_ID,
								currentUserID : currentUserID
							});


							xhttp.open("POST", "send_like_book.php", true);
							xhttp.setRequestHeader("Content-Type", "application/json");

							xhttp.send(postData);
						});

						// event listener para ha cart feature
						addToCart.addEventListener("click", function () {
							const xhttp = new XMLHttpRequest();

							xhttp.onload = function () {
								if (this.status >= 200 && this.status < 300) {
									console.log("Cart request success");
								} else {
									console.log("Cart request denied");
								}
							}

							const postData = JSON.stringify({
								book_ID : response.book_ID,
								currentUserID : currentUserID
							});

							xhttp.open("POST", "send_cart_book.php", true);
							xhttp.setRequestHeader("Content-Type", "application/json");
							xhttp.send(postData);
						});
					});
				}


			}
		}

		xhttp.open("GET", "get_book_posts.php", true);
		xhttp.send();
	}

	getPosts();

});
