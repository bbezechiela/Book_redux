@include('partials.__header', [
'title' => 'BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<div class="container-fluid p-0">
    <!-- NAV -->
    <nav class="navbar navbar-expand-lg shadow bg-light fixed-top" data-aos="fade-down" data-aos-duration="1000">
        <div class="container-fluid mx-3">
            <a class="navbar-brand" href="/"><img src="./assets/Book_Logo.png" alt="Logo" width="130" class="img"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" aria-current="page" href="#home" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Home">Home</a>
                    </li>
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" href="#howItWorks" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="How it Works">How it Works</a>
                    </li>
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" href="#hints" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Hints">Resources</a>
                    </li>
                    <li class="nav-item mx-2 px-3">
                        <a class="nav-link fs-7" href="#aboutUs" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="About Us">About Us</a>
                    </li>
                    <div class="d-flex">
                        <a id="login-btn" href="/login" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Login">Login</a>
                    </div>
                </ul>
            </div>

        </div>
    </nav>

    <!-- HOME -->
    <div id="home" class="container-fluid offset">
        <div class="row align-items-center">
            <div id="landing-title" class="col mx-3" data-aos="fade-right" data-aos-duration="2000">
                <h1 class="mx-2">Uncover New Stories, Trade Used Pages</h1>
                <a id="signup-btn" href="/role" class="btn px-5 w-75 py-2 ms-2" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="Sign Up">Sign Up</a>
            </div>
            <div class="col mx-3 d-flex justify-content-center landing-gif">
                <img class="img" src="./assets/Reading-book.gif" alt="Image" data-aos="fade-left"
                    data-aos-duration="3000">
            </div>
        </div>
    </div>

    <!-- HOW IT WORKS -->
    <div id="howItWorks" class="container-fluid px-0 pt-5 min-vh-100 offset">
        <h1 id="howItWorks-head" class="mx-auto text-center w-25 mt-5 pb-2" data-aos="fade-up" data-aos-duration="1000">
            How it works</h1>
        <div id="howItWorks-header" class="row w-75 mx-auto mt-4 px-5" data-aos="fade-down" data-aos-duration="2000">
            <div id="selling" class="col mx-2 text-center howItWorks-btn">
                <span class="fs-8">Selling</span>
            </div>
            <div id="buying" class="col mx-2 text-center howItWorks-btn">
                <span class="fs-8">Buying</span>
            </div>
            <div id="exchange" class="col mx-2 text-center howItWorks-btn">
                <span class="fs-8">Exchange</span>
            </div>
            <div id="rent" class="col mx-2 text-center howItWorks-btn">
                <span class="fs-8">Rent</span>
            </div>
        </div>

        <!-- SELLING Instructions -->
        <div id="selling-page" class="row justify-content-center mt-5" data-aos="fade-right" data-aos-duration="1500">
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">1</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Begin by creating an account on the website. This involves providing basic information such as your name, email address, and creating a password.">Create
                            an Account</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">2</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Once your account is set up, you can start listing the books you want to sell. Provide details such as the book's title, author, edition, condition, genre, or a brief description.">List
                            Your Books</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">3</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Specify the price you want for each book or indicate if you're open to trading.">Set
                            a Price or Trade Preference</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">4</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Provide accurate shipping details. This includes your location, preferred shipping method, and any additional shipping costs. ">Shipping
                            Information</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">5</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Once your books are listed, potential buyers will browse the website, and if they're interested, they may contact you or initiate a purchase through the platform.">Wait
                            for Buyers</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">6</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="If someone decides to buy for your book, follow the platform's procedures to complete the transaction. This may involve confirming the sale and arranging shipment.">Complete
                            the Transaction</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- BUYING Instructions -->
        <div id="buying-page" class="row justify-content-center mt-5" data-aos="fade-right" data-aos-duration="1500">
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">1</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Start by exploring the website's catalog of available books. You can search for specific titles, authors, or genres. This website also provide recommendations based on your genre preferences.">Browse
                            the Catalog</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">2</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Once you find a book you're interested in, click on it to view more details. Check the book's condition, edition, and any additional information provided by the seller. Make sure it meets your criteria.">Select
                            a Book</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">3</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="If you decide to proceed with the purchase, add the book to your shopping cart. This is a virtual space where you can review your selected items before finalizing the transaction. You can continue browsing for more books if you wish.">Add
                            to Cart</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">4</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="When you're ready to make a purchase, proceed to the checkout page. Here, you'll typically enter your shipping address and payment information. Make sure to review your order summary before confirming the purchase.">Checkout</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">5</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Complete the payment process using the preferred payment method.">Payment</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">6</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="After successful payment, you should receive an order confirmation. The book will then be shipped to the address you provided during checkout.">Confirmation
                            and Delivery</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- EXCHANGE Instructions -->
        <div id="exchange-page" class="row justify-content-center mt-5" data-aos="fade-right" data-aos-duration="1500">
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">1</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Users need to register on the website, creating an account. Once registered, users can list the books they have available for exchange. This involves providing details like the book's title, author, condition, and any other relevant information.">Registration
                            and Listing</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">2</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Users can browse through the listed books on the platform to find titles they are interested in. When a user finds a book they want, they can express interest in acquiring it.">Browsing
                            and Selection</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">3</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="The users involved in a potential exchange can communicate through the platform to negotiate terms, such as shipping arrangements or additional conditions. Once both parties agree on the terms, they confirm the exchange.">Negotiation
                            and
                            Confirmation</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">4</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Users package and ship the books to each other. It's common for users to cover their own shipping costs.">Shipping
                            and Handling</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">5</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Upon receiving the book, the user checks its condition to ensure it matches the description provided by the sender. Users confirm the completion of the exchange on the platform, providing feedback or ratings for each other.">Receiving
                            and Confirmation</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">6</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="After the exchange is complete, users may leave feedback and ratings for each other. This helps build trust within the community and provides valuable information for future exchanges.">Feedback
                            and Ratings</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- RENTING Instructions -->
        <div id="renting-page" class="row justify-content-center mt-5" data-aos="fade-right" data-aos-duration="1500">
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">1</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Start by signing up or creating an account on the website. Provide the necessary information, such as your name, email address, and any other required details.">Create
                            an Account</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">2</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="After creating an account, you can list the books you own and are willing to rent out. Include details like the book's title, author, condition, and any other relevant information.">List
                            Your Books</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">3</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Specify the rental terms for each book you list. This includes the rental duration, rental price, and any additional conditions or requirements.">Set
                            Rental Terms</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">4</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Explore the catalog of books available for rent on the platform. You can search for specific titles, genres, or authors. Each book listing should include details about the book, rental price, and the owner's terms.">Browse
                            Available Books</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">5</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="Once you find a book you want to rent, send a rental request to the book owner. The owner will review your request and may have the option to approve or deny it. If approved, you can proceed with the rental.">Request
                            a Rental</span>
                    </p>
                </div>
            </div>
            <div class="col-3 mx-4 mb-3 card border-0">
                <div class="card-body">
                    <h1 id="howItWorks-num" class="card-title text-center">6</h1>
                    <p id="num-text" class="card-text text-center">
                        <span data-mdb-tooltip-init
                            title="If the owner approves your request, you'll need to complete the transaction through the website's payment system. This may involve providing payment information, and the website may hold the payment until the rental period is over. After you've read the book, return it to the owner according to the agreed-upon terms.">Complete
                            the Transactions</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- HINTS -->
        <div id="hints" class="container-fluid offset px-0 pt-4">
            <h1 id="hints-head" class="mx-auto text-center w-25 mt-5 pb-2" data-aos="fade-up" data-aos-duration="2000">
                Resources</h1>

            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-aos="fade-right"
                data-aos-duration="2500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Master Sales Negotiation with These 7
                                        Amazing Techniques </h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">September 06, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Negotiation is a discussion between two parties to come up with a mutually
                                        beneficial agreement.
                                        In sales, this discussion is between buyers and sellers. Negotiation is an
                                        important sales skill as it is a part of most deals.
                                        Let’s look at sales negotiation techniques to help you build rapport with the
                                        client. </p>
                                    <a id="hints-btn" href="https://www.leadsquared.com/learn/sales/sales-negotiation/"
                                        class="btn">Continue Reading</a>
                                </div>

                            </div>
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Book Packaging, Easy, Safe &
                                        Inexpensive</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">February 03, 2008</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        What are your odds of being content with the
                                        book packaging that shows up in the mail from books you’ve ordered online?
                                        Imagine trying to compare textbooks with a finely bound classic first edition.
                                        That’s the range of packaging I’ve had arrive at my door. My odds of being
                                        pleased after opening a package seem to running around fifty percent.</p>
                                    <a id="hints-btn" href="https://bookshopblog.com/how-to-package-books-for-shipping/"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>

                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Book Marketing 101: Price </h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">October 25, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        How much should your book cost?
                                        Your answer is critical to your book’s success and your author career.
                                        Most authors simply price their books like the authors around them. But I want
                                        you to make informed pricing decisions to understand the why behind book
                                        pricing.
                                        In this article, we’ll discuss the second P of the five Ps of marketing.</p>
                                    <a id="hints-btn" href="https://www.authormedia.com/book-marketing-101-price/"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">How to Ship Books: Tips and Best
                                        Practices for Shipping Books</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">August 04, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Shipping books may seem like a straightforward process, but ensuring that they
                                        arrive safely and in optimal condition requires careful planning and execution.
                                        Shipping books multiple books can be heavy and since they are made of paper,
                                        they are more susceptible to damage when not packed properly. Whether you’re an
                                        avid reader, a book collector, or a bookseller, understanding the best practices
                                        for shipping books is essential.</p>
                                    <a id="hints-btn"
                                        href="https://goshippo.com/blog/how-to-ship-books-tips-and-best-practices-for-shipping-books"
                                        class="btn">Continue Reading</a>
                                </div>

                            </div>
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Best Negotiation Books: A Negotiation
                                        Reading List</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">January 18, 2024</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Negotiation books that will get you to “yes” in any personal or business
                                        negotiation.
                                        Whether you’re facing negotiations with colleagues, customers, or family
                                        members, the following negotiation books from experts at PON offer new
                                        perspectives on common negotiating dilemmas. Among the best books on
                                        negotiation, they’ll help you reach better deals, form stronger relationships,
                                        and effectively address conflict.</p>
                                    <a id="hints-btn"
                                        href="https://www.pon.harvard.edu/daily/negotiation-training-daily/negotiation-books-a-negotiation-reading-list/"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>

                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">Competitive Pricing Strategy:
                                        Benefits, Examples, Strategies</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">October 12, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Setting the right wholesale vs. retail price for your products or services can
                                        make all the difference.
                                        Competitive pricing is a dynamic pricing strategy that empowers business owners
                                        to establish the selling price of their products or services by closely
                                        examining the prices set by their competitors. This approach serves as a
                                        valuable compass, particularly for newcomers in the market, enabling them to
                                        gauge the pricing sweet spot for their offerings.</p>
                                    <a id="hints-btn" href="https://www.bluecart.com/blog/competitive-pricing-strategy"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">How Book Pricing is a Powerful
                                        Strategy to sell more books</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">May 09, 2019</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Finding the pricing sweet spot for your book is really an exercise in
                                        psychology. As such some trial and error is necessary.
                                        This means you’ll have to stay on top of your sales numbers, and make
                                        adjustments as soon as you see sales waning.
                                        The price point implies value,
                                        without requiring a serious investment. In fact, I often recommend this range to
                                        newer authors looking to expand their potential buyer market.</p>
                                    <a id="hints-btn"
                                        href="https://indiereader.com/2019/05/how-book-pricing-is-a-powerful-strategy-to-sell-more-books/"
                                        class="btn">Continue Reading</a>
                                </div>

                            </div>
                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">11 Best Negotiation Books to Read in
                                        2024</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">January 04, 2022</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Negotiation books are guides that teach compromise and persuasion skills. These
                                        works cover topics such as empathizing with the opponent, appealing to the other
                                        party’s interests, and regulating emotions. The purpose of these books is to
                                        help negotiations go more smoothly and help professionals achieve more favorable
                                        deals. These works are a subset of business books and sales books.</p>
                                    <a id="hints-btn" href="https://teambuilding.com/blog/negotiation-books"
                                        class="btn">Continue Reading</a>
                                </div>
                            </div>

                            <div class="card mx-3 rounded-4">
                                <div class="card-body text-center">
                                    <h6 class="card-title" style="color: #E55B13;">How to Market a Book: 7 Tips for
                                        Strategic Pricing</h6>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">May 02, 2023</h6>
                                    <p id="num-text" class="card-text mt-3"
                                        style="text-align: justify; font-size: 12px;">
                                        Pricing your book can be a daunting task and authors don’t realize how much this
                                        factors into how to market a book correctly.
                                        Pricing is the cornerstone of good book marketing. Yes, you want to make sure
                                        that you’re earning enough money to cover your costs and make a profit, but you
                                        also don’t want to price your book so high that it turns readers away. That’s
                                        where strategic pricing comes in.</p>
                                    <a id="hints-btn" href="https://amarketingexpert.com/2023/05/02/how-to-market-a-book-7-tips-for-strategic-pricing/" class="btn">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators position-relative mt-3">
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"
                        style="border-radius: 50%; height: 15px; width: 15px;"></button>
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1" class="" aria-label="Slide 2"
                        style="border-radius: 50%; height: 15px; width: 15px;"></button>
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2" class="" aria-label="Slide 3"
                        style="border-radius: 50%; height: 15px; width: 15px;"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- ABOUT US -->
        <div id="aboutUs" class="container-fluid px-0 min-vh-100 pt-4">
            <h1 id="aboutUs-head" class="mx-auto text-center w-25 mt-5 pb-2" data-aos="fade-up"
                data-aos-duration="2000">About Us</h1>
            <p class="px-5 mt-4 fs-7 text-center" data-aos="fade-right" data-aos-duration="3000">Welcome to <span
                    style="color: #E55B13;">Book</span>Redux – an online platform where students and book
                enthusiasts
                come together to ignite their love for learning, sharing, and connecting. Our goal is to empower you
                to
                buy, sell, exchange, and rent books seamlessly, all while nurturing a vibrant community that
                celebrates
                the joy of reading.</p>

            <div class="row text-center px-5 mt-5">
                <div id="mission-vission" class="col mx-4 p-4 rounded-4" data-aos="zoom-in-up" data-aos-duration="2000">
                    <h3>Mission Statement</h3>
                    <p style="text-align: justify;">&emsp;Our mission is to build a lively online marketplace
                        connecting students and book lovers, making it easy to buy, sell, rent, and exchange books.
                        We're all about creating a community that values accessible, affordable, and sustainable
                        reading. Our goal is to empower individuals in their quest for knowledge, personal
                        development,
                        and the joy of reading by facilitating book sharing and reuse.</p>
                </div>
                <div id="mission-vission" class="col mx-4 p-4 rounded-4" data-aos="zoom-in-up" data-aos-duration="2500">
                    <h3>Vision Statement</h3>
                    <p style="text-align: justify;">&emsp;Our vision is to transform how students and book lovers
                        access used books. We want to be the top choice for affordable literary resources, creating
                        a
                        global community of passionate readers. With technology and shared enthusiasm, we aim to
                        reshape
                        knowledge sharing, fostering a sustainable and inclusive reading community.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js'
])
<script>
    // Landing Page (index.php)
    AOS.init();
    var selling = document.getElementById('selling');
    var buying = document.getElementById('buying');
    var exchange = document.getElementById('exchange');
    var rent = document.getElementById('rent');
    // var donate = document.getElementById('donate');
    var selling_instructions = document.getElementById('selling-page');
    var buying_instructions = document.getElementById('buying-page');
    var exchange_instructions = document.getElementById('exchange-page');
    var renting_instructions = document.getElementById('renting-page');
    // var donate_instructions = document.getElementById('donate-page');
    selling.addEventListener("click", function() {
        selling.style.borderBottom = "2px solid #003060";
        buying.style.borderBottom = "none";
        exchange.style.borderBottom = "none";
        rent.style.borderBottom = "none";
        selling_instructions.style.display = "flex";
        buying_instructions.style.display = "none";
        exchange_instructions.style.display = "none";
        renting_instructions.style.display = "none";
        donate_instructions.style.display = "none";
        // donate.style.borderBottom = "none";
    });
    buying.addEventListener("click", function() {
        selling.style.borderBottom = "none";
        buying.style.borderBottom = "2px solid #003060";
        exchange.style.borderBottom = "none";
        rent.style.borderBottom = "none";
        // alert('buying');
        selling_instructions.style.display = "none";
        buying_instructions.style.display = "flex";
        exchange_instructions.style.display = "none";
        renting_instructions.style.display = "none";
        donate_instructions.style.display = "none";
        // donate.style.borderBottom = "none";
    });
    exchange.addEventListener("click", function() {
        selling.style.borderBottom = "none";
        buying.style.borderBottom = "none";
        exchange.style.borderBottom = "2px solid #003060";
        rent.style.borderBottom = "none";
        selling_instructions.style.display = "none";
        buying_instructions.style.display = "none";
        exchange_instructions.style.display = "flex";
        renting_instructions.style.display = "none";
        donate_instructions.style.display = "none";
        // donate.style.borderBottom = "none";
    });
    rent.addEventListener("click", function() {
        selling.style.borderBottom = "none";
        buying.style.borderBottom = "none";
        exchange.style.borderBottom = "none";
        rent.style.borderBottom = "2px solid #003060";
        selling_instructions.style.display = "none";
        buying_instructions.style.display = "none";
        exchange_instructions.style.display = "none";
        renting_instructions.style.display = "flex";
        donate_instructions.style.display = "none";
        // donate.style.borderBottom = "none";
    });
    // donate.addEventListener("click", function () {
    //     selling_instructions.style.display = "none";
    //     buying_instructions.style.display = "none";
    //     exchange_instructions.style.display = "none";
    //     renting_instructions.style.display = "none";
    //     donate_instructions.style.display = "flex";
    //     selling.style.borderBottom = "none";
    //     buying.style.borderBottom = "none";
    //     exchange.style.borderBottom = "none";
    //     rent.style.borderBottom = "none";
    //     donate.style.borderBottom = "2px solid #003060";
    // })
</script>