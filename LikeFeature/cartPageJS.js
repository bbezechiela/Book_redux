//dito ang simula

document.addEventListener("DOMContentLoaded", function () {
	// outer container
	const outerContainer = document.getElementById("outerContainer");

	// getter cart items function
	function getCartItems() {
		const xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function () {
			if (this.readyState === 4 && this.status === 200) {
				const responses = JSON.parse(this.responseText);

				console.log(responses);

				if (responses.length > 0) {
					// himo.a na argument it responses ha display cart itmes na function
					displayCartItems(responses);
				} else {
					//console.log("waray sulod it result set");
				}
			}
		}

		xhttp.open("GET", `get_cart_items.php?currentUserID=${currentUserID}`, true);
		xhttp.send();
	}

	getCartItems();

	function displayCartItems(responses) {
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
		});
	}
});
