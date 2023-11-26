@include('partials.__header', [
'title' => 'Listing | BookRedux',
'bootstrap_link' => '/bootstrap/bootstrap.min.css',
'css_link' => '/css/listing-style.css',
'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div id="body-container" class="container-fluid px-0 body">
    <div id="sellersidebar" class="sellersidebar p-2 min-vh-100 shadow">
        <x-sellersidebar />
    </div>
    <div id="content" class="pe-0 content">
        <ul class="nav sticky-top head-nav shadow py-4 px-4 top-nav">
            <div class="w-100 d-flex mt-1 p-1">
                <a href="/" class="px-2"><img class="img mt-1 me-5" src="../assets/Book_Logo.png" alt="Logo"></a>
            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                        <input class="form-control rounded-3 search-field" type="text" placeholder="Search">
                    </div>
                    {{-- <a href="/sellermessage"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Messages">
                            <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    {{-- <a href="/sellernotification"><button class="btn mx-1 mt-1" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" data-bs-title="Notification">
                            <i class="fa fa-bell-o" aria-hidden="true" style="font-size: 20px; color: #003060;"></i>
                        </button></a> --}}
                    <a href="/profile"><button class="btn mx-1 p-0" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-title="Profile">
                            <img src="{{ asset('images/profile_photos/' . session('profile_pic')) }}" alt="profile"
                                width="35" height="35" class="rounded-5" style="margin-right: 2em;">
                        </button></a>
                </div>
            </div>
        </ul>
        <div class="container-fuid pt-3 px-3">
            <div class="row border mx-2 mt-3 p-3 shadow rounded">
                <div class="col d-flex align-items-center">
                    <p class="fs-3 order mx-auto fw-bold m-0">Order Status</p>
                </div>
                <a href="/trackrental" class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Rental Period Tracking</p>
                </a>

                <a href="/sellerorders" class="btn book-status col-2 ms-1 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Orders</p>
                </a>

                <a href="/sellerdelivered" class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Delivered</p>
                </a>
                <a href="/sellerdropped" class="btn book-status col-2 mx-2 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Dropped</p>
                </a>
                <a href="/sellerrefund" class="btn book-status col-2 me-1 rounded rounded-4 py-2">
                    <p class="my-0 text-center fw-bold fs-3">0</p>
                    <p class="my-0 text-center fs-6">Refund</p>
                </a>

            </div>
            <!-- My List contents -->
            <div class="row contents px-3 mt-4">
                <div class="row justify-content-between mx-auto">
                    <div class="col-4 d-flex flex-row">
                        <h3 class="fw-bold list-title">My List</h3>
                        <button id="create-listing"
                            class="create-btn-sale btn px-3 ms-2 d-flex align-items-center h-75"><i
                                class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 5px;"></i>Create
                            listing for Sale</button>
                        <button id="create-listing"
                            class="create-btn-exchange btn px-3 ms-2 d-flex align-items-center h-75"><i
                                class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 5px;"></i>Create
                            listing for Rent</button>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label class="fw-bold" for="sort">Sort by</label>
                        <select class="px-3 py-1 h-75 ms-2 rounded" name="" id="sort">
                            <option selected disabled></option>
                            <option value="All">All</option>
                            <option value="Sale">Sale</option>
                            {{-- <option value="Exchange">Exchange</option> --}}
                            <option value="Rent">Rent</option>
                        </select>
                    </div>
                    <div id="content-cards" class="w-100 mx-2 row justify-content-start px-4"
                        style="height: 300px; margin-top: 2em;">
                        <div class="card col-3 m-1 shadow" style="width: 240px; flex: 0 0 auto;">
                            <span id="status_" hidden>Rent</span>
                            <span id="user_" hidden>Nestine</span>
                            <span id="edition_" hidden>1st Edition</span>
                            <span id="condition_" hidden>Like New</span>
                            <span id="description_" hidden>This is a description</span>
                            <span id="language_" hidden>English</span>
                            <span id="weight_" hidden>5</span>
                            <span id="width_" hidden>5</span>
                            <span id="height_" hidden>5</span>
                            <span id="length_" hidden>5</span>
                            <span id="courier_" hidden>J&T</span>
                            <span id="price_" hidden>P100</span>

                            <span id="exchange_preferences_" hidden>I prefer anything haha</span>

                            <span id="rental_duration_" hidden>1 month</span>
                            <span id="rental_terms_and_condition_" hidden>Nothing terms and conditions</span>
                            <span id="security_deposit_" hidden>P200</span>

                            <img id="photo_" data-filename="" src="../assets/brown_book.png" class="img mx-auto p-2"
                                alt="" width="130px" height="170px">
                            <div class="card-body py-0">
                                <p id="title_" class="card-title mb-0 fw-bold">
                                    Book Title</p>
                                <p id="author_" class="card-text mt-0 mb-0 pb-0">
                                    Mika Salamanca</p>
                                <p id="genre_" class="card-text mt-0 mb-2 pt-0">
                                    Comedy & Satire</p>
                                <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                    <a class="fw-bold p-0 edit-book" onclick="">Edit</a>
                                    {{-- <div class="btns d-flex flex-row mb-2 dropdown">
                                        <button
                                            class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center like-button"><i
                                                class="fa fa-thumbs-up fa-lg" aria-hidden="true"
                                                style="margin-right: 8px"></i>100</button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- {{ $books->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        {{-- create listing --}}
        <div class="modal fade" id="createListingModal" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add listing for </h1>
                        <select name="" class="btn mx-2 fw-bold px-0 interaction-type" id="modal-category">
                            <option value="Sale">Sale</option>
                            <option value="Sale">Sale</option>
                            {{-- <option value="Exchange">Exchange</option> --}}
                            <option value="Rent">Rent</option>
                        </select>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- sale -->
                    <div id="sale">
                        <form id="sale-form" action="/mylist/salepost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">
                                <div class="row">
                                    <div class="col-5 me-1 px-0 border mb-2 rounded">
                                        <input type="text" name="user_id" value="{{ session('id') }}" hidden>
                                        <input type="text" name="weight" id="sale-weight" hidden>
                                        <input type="text" name="width" id="sale-width" hidden>
                                        <input type="text" name="height" id="sale-height" hidden>
                                        <input type="text" name="length" id="sale-length" hidden>
                                        <input type="text" name="courier" id="sale-courier" hidden>

                                        <input type="file" name="book_photo" id="sale-image" accept="image/*" hidden>
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">The book
                                            photo
                                            field must be a file of type: jpeg, png, jpg, gif.</small>
                                        <label for="sale-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="sale-book-image" src="../assets/listing.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-4 control-label" for="filebutton1">Back
                                                    Cover</label>
                                                <div class="col-md-8">
                                                    <div class="input-file-wrapper">
                                                        <input id="filebutton1" name="filebutton1"
                                                            class="input-file form-control" type="file"
                                                            style="margin-bottom: 12px;">
                                                    </div>
                                                </div>

                                                <label class="col-md-4 control-label" for="filebutton2"
                                                    style="white-space: nowrap;">Content or Interior Photos</label>
                                                <div class="col-md-8">
                                                    <div class="input-file-wrapper">
                                                        <input id="filebutton2" name="filebutton2"
                                                            class="input-file form-control" type="file"
                                                            style="margin-bottom: 12px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <select name="genre" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Genre</option>
                                            <option value="Educational">Educational</option>
                                            <option value="Romance & Saga">Romance & Saga</option>
                                            <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                            <option value="Science Fiction">Science Fiction</option>
                                            <option value="Historical Fiction">Historical Fiction</option>
                                            <option value="Mystery & Suspense">Mystery & Suspense</option>
                                            <option value="Young Adult">Young Adult</option>
                                            <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                            <option value="Horror & Supernatural">Horror & Supernatural</option>
                                            <option value="Comedy & Satire">Comedy & Satire</option>
                                            <option value="Poetry & Prose">Poetry & Prose</option>
                                            <option value="Self-Help">Self-Help</option>
                                            <option value="Crime & Thriller">Crime & Thriller</option>
                                        </select>
                                        <input type="text" name="stock" id="stock-exchange" class="form-control"
                                            placeholder="Stock" style="margin-bottom: 12px; color: #003060;">
                                        <input type="text" name="price" id="price" class="form-control" id="list-name"
                                            placeholder="Price" style="margin-bottom: 12px; color: #003060;">
                                        <button type="button" id="sale-shipping-fee-btn" class="form-control"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form"
                                            style="text-align: justify; margin-bottom: 12px;">
                                            Shipping Fee
                                        </button>
                                        <select name="condition" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Condition</option>
                                            <option value="New">New</option>
                                            <option value="Like New">Like New</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                        <select name="language" class="form-control form-select" id=""
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Language</option>
                                            <option value="English" selected>English</option>
                                        </select>
                                    </div>
                                    <input type="text" name="title" class="form-control" placeholder="Title"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="author" class="form-control" placeholder="Author"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="edition" id="edition-sale" class="form-control"
                                        placeholder="Edition" style="margin-bottom: 12px; color: #003060;">
                                    <textarea name="description" id="description" class="form-control" cols="30"
                                        rows="4" placeholder="Description"
                                        style="margin-bottom: 12px; color: #003060;"></textarea>
                                    <div class="col guidelines">
                                        <h6>Listing Guidelines</h6>
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseOne"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseOne">
                                                        Genre Guidelines
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseOne"
                                                    class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <strong>Educational: </strong>
                                                        <small>Educational books aim to impart knowledge and information
                                                            to readers. They cover a wide range of topics, from academic
                                                            subjects to self-improvement and skill
                                                            development.</small><br>
                                                        <strong>Romance & Saga: </strong>
                                                        <small>Romance and Saga novels typically focus on the emotional
                                                            and romantic relationships of the main characters. Sagas
                                                            often encompass multiple generations and can be epic in
                                                            scope.</small><br>
                                                        <strong>Fantasy & Adventure: </strong>
                                                        <small>Fantasy and Adventure books transport readers to
                                                            imaginative worlds filled with magical creatures and epic
                                                            quests. They often involve heroes or heroines on thrilling
                                                            adventures.</small><br>
                                                        <strong>Science Fiction: </strong>
                                                        <small>Science fiction explores speculative and futuristic
                                                            concepts often rooted in scientific and technological
                                                            advancements. It can delve into futuristic technologies,
                                                            space exploration, and alternate realities.</small><br>
                                                        <strong>Historical Fiction: </strong>
                                                        <small>Historical fiction is set in a particular historical
                                                            period and incorporates real events, people, and settings
                                                            into a fictional narrative. It offers a glimpse into the
                                                            past with fictional characters and stories.</small><br>
                                                        <strong>Mystery & Suspense: </strong>
                                                        <small>Mystery and Suspense books revolve around solving a
                                                            puzzle, uncovering a secret, or navigating high-stakes
                                                            situations. They keep readers engaged through suspenseful
                                                            and often thrilling plots.</small><br>
                                                        <strong>Young Adult: </strong>
                                                        <small>Young Adult literature targets teenage and young adult
                                                            readers. These books address the challenges and experiences
                                                            of young people, covering various genres and themes relevant
                                                            to this age group.</small><br>
                                                        <strong>Non-Fiction & Biography: </strong>
                                                        <small>Non-fiction books provide factual information on various
                                                            subjects, while biographies offer an in-depth look at the
                                                            lives of real individuals. Both genres are grounded in
                                                            reality and offer insights and knowledge.</small><br>
                                                        <strong>Horror & Supernatural: </strong>
                                                        <small>Horror and Supernatural books aim to evoke fear and
                                                            suspense in readers. They often involve elements of the
                                                            supernatural, such as ghosts, vampires, and otherworldly
                                                            phenomena.</small><br>
                                                        <strong>Comedy & Satire: </strong>
                                                        <small>Comedy and Satire books are intended to make readers
                                                            laugh and often use humor and wit to comment on society,
                                                            politics, or human behavior. Satire may employ irony and
                                                            sarcasm to critique or mock.</small><br>
                                                        <strong>Poetry & Prose: </strong>
                                                        <small>This genre encompasses creative works that use language
                                                            and imagery to convey emotions, ideas, and beauty. Poetry
                                                            focuses on rhythmic and symbolic language, while prose
                                                            includes fiction and non-fiction works that tell stories or
                                                            convey information.</small><br>
                                                        <strong>Self-Help: </strong>
                                                        <small>Self-Help books offer guidance, advice, and strategies
                                                            for personal development and self-improvement. They address
                                                            various aspects of life, including mental health,
                                                            relationships, productivity, and well-being.</small><br>
                                                        <strong>Crime & Thriller: </strong>
                                                        <small>Crime and Thriller novels are filled with suspense,
                                                            intrigue, and criminal elements. They often involve
                                                            detectives, law enforcement, or ordinary individuals caught
                                                            in dangerous situations, with an emphasis on solving crimes
                                                            and facing perilous challenges.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseTwo"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseTwo">
                                                        Book Condition Guidelines
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo"
                                                    class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <strong>New: </strong>
                                                        <small>A book that is in pristine condition, showing no
                                                            signs of use or wear. It looks like it has just come from
                                                            the bookstore and
                                                            may still have
                                                            the original packaging or dust jacket.</small><br>
                                                        <strong>Like New: </strong>
                                                        <small>The book appears almost brand new but may have minor
                                                            imperfections,
                                                            such as a slight crease on the spine or cover, which are
                                                            hardly
                                                            noticeable.</small><br>
                                                        <strong>Very Good: </strong>
                                                        <small>The book is in excellent condition overall, with minimal
                                                            signs
                                                            of
                                                            wear. There may be slight cover or spine creases, but the
                                                            pages are clean
                                                            and
                                                            unmarked.</small><br>
                                                        <strong>Good: </strong>
                                                        <small>The book has been read and shows some wear and tear, but
                                                            it is
                                                            still in
                                                            reasonable condition. There may be creases, minor stains, or
                                                            dog-eared
                                                            pages,
                                                            but no significant damage.</small><br>
                                                        <strong>Fair: </strong>
                                                        <small>The book has seen significant use and displays noticeable
                                                            wear. It
                                                            may
                                                            have loose or torn pages, markings, or
                                                            highlighting.</small><br>
                                                        <strong>Poor: </strong>
                                                        <small>The book is heavily worn, damaged, or may be missing
                                                            pages or
                                                            covers.
                                                            It is not in good reading condition and might be suitable
                                                            only for reference
                                                            purposes or collectors looking for rare editions.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseThree"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseThree">
                                                        Selling Guidelines
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseThree"
                                                    class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <strong>Book Information: </strong>
                                                        <small>Provide accurate and detailed information about the book
                                                            you want to sell. Include the book's title, author or
                                                            other relevant identifiers, edition, condition (e.g., new,
                                                            used), and a brief description.</small><br>

                                                        <strong>Pricing: </strong>
                                                        <small>Set a competitive and reasonable price for your book.
                                                            Consider factors such as the book's condition, demand, and
                                                            market rates.</small><br>

                                                        <strong>Images: </strong>
                                                        <small>Upload clear and high-quality images of the book's cover
                                                            and any relevant pages or content. Images help potential
                                                            buyers assess the book's condition.
                                                        </small><br>

                                                        <strong>Listing Description: </strong>
                                                        <small>Write a clear and informative description of the book.
                                                            Mention any highlights, notes, or signs of wear and tear if
                                                            the book is used.</small><br>

                                                        <strong>Policies: </strong>
                                                        <small>Familiarize yourself with BookRedux's policies,
                                                            especially those related to listing books for sale. Ensure
                                                            that your listing complies with these policies.</small><br>

                                                        <strong>Honesty and Accuracy: </strong>
                                                        <small>Be honest about the book's condition and any potential
                                                            flaws. Misrepresentation may lead to disputes and return
                                                            requests.</small><br>

                                                        <strong>Pricing and Fees: </strong>
                                                        <small>Understand the pricing structure and fees associated with
                                                            selling on the platform. <strong>BookRedux will charge 10%
                                                                of the
                                                                total price when the listing is placed in
                                                                order.</strong></small><br>

                                                        <strong>Availability and Stock Management: </strong>
                                                        <small>Regularly update your listing's availability. If the book
                                                            is no longer available, remove the listing
                                                            promptly.</small><br>

                                                        <strong>Communication: </strong>
                                                        <small>Be responsive to potential buyers' inquiries and
                                                            messages. Good communication can build trust with
                                                            buyers.</small><br>

                                                        <strong>Shipping: </strong>
                                                        <small>Clearly specify your shipping methods, costs, and
                                                            estimated delivery times. Use appropriate packaging to
                                                            protect the book during transit.</small><br>

                                                        <strong>Payment: </strong>
                                                        <small>BookRedux will handle payment processing. Ensure that
                                                            your payment information is accurate and up to
                                                            date.</small><br>

                                                        <strong>Review and Monitor Listings: </strong>
                                                        <small>Regularly review and monitor your book listings. Make
                                                            necessary adjustments to improve the visibility and
                                                            attractiveness of your listings.</small><br>

                                                        <strong>Buyer Feedback: </strong>
                                                        <small>Encourage buyers to leave feedback after completing a
                                                            transaction. Positive feedback can enhance your reputation
                                                            on the platform.</small>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseOne"
                                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                        Terms and Conditions for Listing Books for Sale
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseFour"
                                                    class="accordion-collapse collapse show">
                                                    <div class="accordion-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>You warrant that all books listed are genuine, free from
                                                            copyright infringement, and do not violate any intellectual
                                                            property rights.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>BookRedux will handle returns and refunds in accordance
                                                            with its policies. You must comply with these policies
                                                            regarding returns and refunds for your listings.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>BookRedux may charge commissions, listing fees, or other
                                                            charges for using its platform. These fees are outlined in
                                                            the User Fee Schedule.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>BookRedux reserves the right to terminate your seller
                                                            account or remove your listings for any violation of these
                                                            terms or for other legitimate reasons.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>By listing books, you grant BookRedux the right to use
                                                            your content, including images and descriptions, for
                                                            promotional and display purposes on the
                                                            platform.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>BookRedux will process payments from customers on your
                                                            behalf and may deduct applicable fees and
                                                            commissions.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>Users are encouraged to resolve disputes among themselves
                                                            through communication and negotiation. BookRedux is not
                                                            responsible for disputes between users.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>You are responsible for providing accurate
                                                            and complete information about the books you list, including
                                                            title, author, condition, and price.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>By listing a book, you confirm that you are the rightful
                                                            owner of the book, or you have the necessary authorization
                                                            to sell it.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>You are responsible for fulfilling orders
                                                            promptly and providing accurate shipping information.
                                                            Failure to fulfill orders may result in penalties or account
                                                            suspension.</small><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check" style="margin-top: 1em">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">I have read and
                                                    agree
                                                    to the listing terms and condition.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" id="submitButton" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;" disabled>List</button>
                            </div>
                        </form>
                    </div>

                    <!-- rent -->
                    <div id="rent">
                        <form id="rent-form" action="/mylist/rentpost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">
                                <div class="row">
                                    <div class="col-5 px-0 me-1 border mb-2 rounded">
                                        <input type="text" name="user_id" value="" hidden>
                                        <input type="text" name="weight" id="rent-weight" hidden>
                                        <input type="text" name="width" id="rent-width" hidden>
                                        <input type="text" name="height" id="rent-height" hidden>
                                        <input type="text" name="length" id="rent-length" hidden>
                                        <input type="text" name="courier" id="rent-courier" hidden>

                                        <input type="file" name="book_photo" id="rent-image" class="d-none">
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">The book
                                            photo
                                            field must be a file of type: jpeg, png, jpg, gif.</small>
                                        <label for="rent-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="rent-book-image" src="/assets/listing.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-4 control-label" for="filebutton1">Back
                                                    Cover</label>
                                                <div class="col-md-8">
                                                    <div class="input-file-wrapper">
                                                        <input id="filebutton1" name="filebutton1"
                                                            class="input-file form-control" type="file"
                                                            style="margin-bottom: 12px;">
                                                    </div>
                                                </div>

                                                <label class="col-md-4 control-label" for="filebutton2"
                                                    style="white-space: nowrap;">Content or Interior Photos</label>
                                                <div class="col-md-8">
                                                    <div class="input-file-wrapper">
                                                        <input id="filebutton2" name="filebutton2"
                                                            class="input-file form-control" type="file"
                                                            style="margin-bottom: 12px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <select name="genre" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Genre</option>
                                            <option value="Educational">Educational</option>
                                            <option value="Romance & Saga">Romance & Saga</option>
                                            <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                            <option value="Science Fiction">Science Fiction</option>
                                            <option value="Historical Fiction">Historical Fiction</option>
                                            <option value="Mystery & Suspense">Mystery & Suspense</option>
                                            <option value="Young Adult">Young Adult</option>
                                            <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                            <option value="Horror & Supernatural">Horror & Supernatural</option>
                                            <option value="Comedy & Satire">Comedy & Satire</option>
                                            <option value="Poetry & Prose">Poetry & Prose</option>
                                            <option value="Self-Help">Self-Help</option>
                                            <option value="Crime & Thriller">Crime & Thriller</option>
                                        </select>
                                        <select name="condition" id="" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Condition</option>
                                            <option value="New">New</option>
                                            <option value="Like New">Like New</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                        <button type="button" id="rent-shipping-fee-btn" class="form-control"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form"
                                            style="text-align: justify; margin-bottom: 12px;">
                                            Shipping Fee
                                        </button>
                                        <input type="text" name="price" id="rental-price" class="form-control"
                                            placeholder="Rental Price" style="margin-bottom: 12px; color: #003060;">
                                        <input type="text" name="security_deposit" class="form-control"
                                            placeholder="Security Deposit" style="margin-bottom: 12px; color: #003060;">
                                    </div>
                                    <input type="text" name="title" class="form-control" placeholder="Title"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="author" class="form-control" placeholder="Author"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="edition" class="form-control" placeholder="Edition"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <select name="language" class="form-control form-select" id=""
                                        style="margin-bottom: 12px; color: #003060;">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                    <input type="text" name="rental_duration" class="form-control"
                                        placeholder="Rental Duration" style="margin-bottom: 12px; color: #003060;">
                                    <textarea name="rental_terms_and_condition" id="exchange-preferences"
                                        class="form-control" cols="30" rows="4" placeholder="Rental Terms and Condition"
                                        style="margin-bottom: 12px; color: #003060;"></textarea>
                                    <textarea name="description" id="" class="form-control" cols="30" rows="4"
                                        placeholder="Description"
                                        style="margin-bottom: 12px; color: #003060;"></textarea>
                                    <div class="col guidelines">
                                        <h6>Listing Guidelines</h6>
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseOne"
                                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                        Genre Guidelines
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <strong>Educational: </strong>
                                                        <small>Educational books aim to impart knowledge and information
                                                            to readers. They cover a wide range of topics, from academic
                                                            subjects to self-improvement and skill
                                                            development.</small><br>
                                                        <strong>Romance & Saga: </strong>
                                                        <small>Romance and Saga novels typically focus on the emotional
                                                            and romantic relationships of the main characters. Sagas
                                                            often encompass multiple generations and can be epic in
                                                            scope.</small><br>
                                                        <strong>Fantasy & Adventure: </strong>
                                                        <small>Fantasy and Adventure books transport readers to
                                                            imaginative worlds filled with magical creatures and epic
                                                            quests. They often involve heroes or heroines on thrilling
                                                            adventures.</small><br>
                                                        <strong>Science Fiction: </strong>
                                                        <small>Science fiction explores speculative and futuristic
                                                            concepts often rooted in scientific and technological
                                                            advancements. It can delve into futuristic technologies,
                                                            space exploration, and alternate realities.</small><br>
                                                        <strong>Historical Fiction: </strong>
                                                        <small>Historical fiction is set in a particular historical
                                                            period and incorporates real events, people, and settings
                                                            into a fictional narrative. It offers a glimpse into the
                                                            past with fictional characters and stories.</small><br>
                                                        <strong>Mystery & Suspense: </strong>
                                                        <small>Mystery and Suspense books revolve around solving a
                                                            puzzle, uncovering a secret, or navigating high-stakes
                                                            situations. They keep readers engaged through suspenseful
                                                            and often thrilling plots.</small><br>
                                                        <strong>Young Adult: </strong>
                                                        <small>Young Adult literature targets teenage and young adult
                                                            readers. These books address the challenges and experiences
                                                            of young people, covering various genres and themes relevant
                                                            to this age group.</small><br>
                                                        <strong>Non-Fiction & Biography: </strong>
                                                        <small>Non-fiction books provide factual information on various
                                                            subjects, while biographies offer an in-depth look at the
                                                            lives of real individuals. Both genres are grounded in
                                                            reality and offer insights and knowledge.</small><br>
                                                        <strong>Horror & Supernatural: </strong>
                                                        <small>Horror and Supernatural books aim to evoke fear and
                                                            suspense in readers. They often involve elements of the
                                                            supernatural, such as ghosts, vampires, and otherworldly
                                                            phenomena.</small><br>
                                                        <strong>Comedy & Satire: </strong>
                                                        <small>Comedy and Satire books are intended to make readers
                                                            laugh and often use humor and wit to comment on society,
                                                            politics, or human behavior. Satire may employ irony and
                                                            sarcasm to critique or mock.</small><br>
                                                        <strong>Poetry & Prose: </strong>
                                                        <small>This genre encompasses creative works that use language
                                                            and imagery to convey emotions, ideas, and beauty. Poetry
                                                            focuses on rhythmic and symbolic language, while prose
                                                            includes fiction and non-fiction works that tell stories or
                                                            convey information.</small><br>
                                                        <strong>Self-Help: </strong>
                                                        <small>Self-Help books offer guidance, advice, and strategies
                                                            for personal development and self-improvement. They address
                                                            various aspects of life, including mental health,
                                                            relationships, productivity, and well-being.</small><br>
                                                        <strong>Crime & Thriller: </strong>
                                                        <small>Crime and Thriller novels are filled with suspense,
                                                            intrigue, and criminal elements. They often involve
                                                            detectives, law enforcement, or ordinary individuals caught
                                                            in dangerous situations, with an emphasis on solving crimes
                                                            and facing perilous challenges.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseTwo"
                                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                                        Book Condition Guidelines
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <strong>New: </strong>
                                                        <small>A book that is in pristine condition, showing no
                                                            signs of use or wear. It looks like it has just come from
                                                            the bookstore and
                                                            may still have
                                                            the original packaging or dust jacket.</small><br>
                                                        <strong>Like New: </strong>
                                                        <small>The book appears almost brand new but may have minor
                                                            imperfections,
                                                            such as a slight crease on the spine or cover, which are
                                                            hardly
                                                            noticeable.</small><br>
                                                        <strong>Very Good: </strong>
                                                        <small>The book is in excellent condition overall, with minimal
                                                            signs
                                                            of
                                                            wear. There may be slight cover or spine creases, but the
                                                            pages are clean
                                                            and
                                                            unmarked.</small><br>
                                                        <strong>Good: </strong>
                                                        <small>The book has been read and shows some wear and tear, but
                                                            it is
                                                            still in
                                                            reasonable condition. There may be creases, minor stains, or
                                                            dog-eared
                                                            pages,
                                                            but no significant damage.</small><br>
                                                        <strong>Fair: </strong>
                                                        <small>The book has seen significant use and displays noticeable
                                                            wear. It
                                                            may
                                                            have loose or torn pages, markings, or
                                                            highlighting.</small><br>
                                                        <strong>Poor: </strong>
                                                        <small>The book is heavily worn, damaged, or may be missing
                                                            pages or
                                                            covers.
                                                            It is not in good reading condition and might be suitable
                                                            only for reference
                                                            purposes or collectors looking for rare editions.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseThree"
                                                        aria-expanded="true"
                                                        aria-controls="panelsStayOpen-collapseThree">
                                                        Guidelines for Listing a Book for Exchange
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseThree"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <strong>Book Information: </strong>
                                                        <small>Provide accurate and detailed information about the book
                                                            you want to sell. Include the book's title, author or
                                                            other relevant identifiers, edition, condition (e.g., new,
                                                            used), and a brief description.</small><br>

                                                        <strong>Exchange Terms: </strong>
                                                        <small>Clearly outline your exchange terms. Specify what types
                                                            of
                                                            books you are willing to exchange for and any conditions or
                                                            preferences you have.</small><br>

                                                        <strong>Images: </strong>
                                                        <small>Upload clear and high-quality images of the book's cover
                                                            and any relevant pages or content. Images help potential
                                                            exchange partners assess the book's condition.
                                                        </small><br>

                                                        <strong>Listing Description: </strong>
                                                        <small>Write a clear and informative description of the book and
                                                            your preferences for the exchange.
                                                            Mention any highlights, notes, or signs of wear and tear if
                                                            the book is used.</small><br>

                                                        <strong>Policies: </strong>
                                                        <small>Familiarize yourself with BookRedux's policies,
                                                            especially those related to listing books for exchange.
                                                            Ensure
                                                            that your listing complies with these policies.</small><br>

                                                        <strong>Honesty and Accuracy: </strong>
                                                        <small>Be honest about the book's condition and any potential
                                                            flaws. Misrepresentation may lead to disputes and exchange
                                                            request denials.</small><br>

                                                        <strong>Availability and Stock Management: </strong>
                                                        <small>Regularly update your exchange listing's availability. If
                                                            the
                                                            book
                                                            is no longer available, remove the listing
                                                            promptly.</small><br>

                                                        <strong>Communication: </strong>
                                                        <small>Be responsive to potential exchange partners' inquiries
                                                            and
                                                            messages. Good communication is key to finding suitable
                                                            exchange
                                                            opportunities.</small><br>

                                                        <strong>Exchange Negotiation: </strong>
                                                        <small>Be open to negotiation with potential exchange partners.
                                                            Discuss terms, conditions, and any additional details to
                                                            ensure
                                                            a mutually beneficial exchange.</small><br>

                                                        <strong>Review and Monitor Listings: </strong>
                                                        <small>Regularly review and monitor your book exchange listings.
                                                            Make
                                                            necessary adjustments to improve the visibility and
                                                            attractiveness of your listings.</small><br>

                                                        <strong>Feedback: </strong>
                                                        <small>After completing an exchange, consider leaving feedback
                                                            about
                                                            the experience with your exchange partner. Positive feedback
                                                            can
                                                            enhance your reputation on the platform..</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseOne"
                                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                        Terms and Conditions for Listing Books for Rent
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseOne"
                                                    class="accordion-collapse collapse show">
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>You warrant that all books listed for rent are
                                                            genuine,
                                                            free from copyright infringement, and do not violate any
                                                            intellectual property rights.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>Users agree to the rental process outlined on
                                                            BookRedux,
                                                            which may include communication with other users,
                                                            negotiation of
                                                            rental terms, and arranging for the rental of
                                                            books.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>BookRedux reserves the right to terminate your seller
                                                            account or remove your listings for any violation of these
                                                            terms or for other legitimate reasons.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>By listing books, you grant BookRedux the right to use
                                                            your content, including images and descriptions, for
                                                            promotional and display purposes on the
                                                            platform.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>Users are encouraged to resolve disputes among themselves
                                                            through communication and negotiation. BookRedux is not
                                                            responsible for disputes between users.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>You are responsible for providing accurate and complete
                                                            information about the books you list, including title,
                                                            author, condition, rental price, and rental
                                                            duration.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>By listing a book, you confirm that you are the rightful
                                                            owner of the book, or you have the necessary authorization
                                                            to rent it.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>You are responsible for fulfilling orders
                                                            promptly and providing accurate shipping information.
                                                            Failure to fulfill orders may result in penalties or account
                                                            suspension.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>Users should agree on rental terms, including rental
                                                            duration, rental price, and any security deposit, before
                                                            finalizing the rental. BookRedux is not
                                                            responsible for the terms of rental agreements between
                                                            users.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>Users may be required to pay a security deposit or rental
                                                            fee to rent books. BookRedux will process
                                                            these payments securely and may deduct applicable fees and
                                                            commissions.</small><br>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                        </svg>
                                                        <small>BookRedux may charge fees or commissions for using its
                                                            platform, as outlined in the User Fee Schedule.</small><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" id="submit" class="btn mx-auto w-25 text-white rounded-3"
                                    style="background-color: #E55B13;">List</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        {{-- update listing modal --}}
        <div class="modal fade" id="updateListingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Listing</h1>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <select name="" class="btn mx-5 fw-bold px-0 interaction-type" id="edit-modal-category">
                        <option value="Sale">Sale</option>
                        <option value="Sale">Sale</option>
                        <option value="Exchange">Exchange</option>
                        <option value="Rent">Rent</option>
                    </select>
                    <input type="text" id="edit-book-id" name="id" hidden>
                    <!-- sale -->
                    <div id="edit-sale-div">
                        <form id="edit-sale-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">

                                <div class="row">
                                    <div class="col-5 me-1 px-0 border mb-2 rounded">
                                        <input type="text" name="user_id" value="" hidden>
                                        <input type="text" name="weight" id="edit-sale-weight" hidden>
                                        <input type="text" name="width" id="edit-sale-width" hidden>
                                        <input type="text" name="height" id="edit-sale-height" hidden>
                                        <input type="text" name="length" id="edit-sale-length" hidden>
                                        <input type="text" name="courier" id="edit-sale-courier" hidden>

                                        <input type="file" name="book_photo" id="edit-sale-image" accept="image/*"
                                            hidden>
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">The book
                                            photo
                                            field must be a file of type: jpeg, png, jpg, gif.</small>
                                        <label for="edit-sale-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="edit-sale-book-image" src="../assets/listing.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <select name="genre" id="edit-sale-genre" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Genre</option>
                                            <option value="Educational">Educational</option>
                                            <option value="Romance & Saga">Romance & Saga</option>
                                            <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                            <option value="Science Fiction">Science Fiction</option>
                                            <option value="Historical Fiction">Historical Fiction</option>
                                            <option value="Mystery & Suspense">Mystery & Suspense</option>
                                            <option value="Young Adult">Young Adult</option>
                                            <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                            <option value="Horror & Supernatural">Horror & Supernatural</option>
                                            <option value="Comedy & Satire">Comedy & Satire</option>
                                            <option value="Poetry & Prose">Poetry & Prose</option>
                                            <option value="Self-Help">Self-Help</option>
                                            <option value="Crime & Thriller">Crime & Thriller</option>
                                        </select>
                                        <input type="text" name="price" id="edit-sale-price" class="form-control"
                                            placeholder="Price" style="margin-bottom: 12px; color: #003060;">
                                        <button type="button" id="edit-sale-shipping-fee-btn" class="form-control"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form"
                                            style="text-align: justify; margin-bottom: 12px; color: #003060;">
                                            Shipping Fee
                                        </button>
                                        <select name="condition" id="edit-sale-condition"
                                            class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Condition</option>
                                            <option value="New">New</option>
                                            <option value="Like New">Like New</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                        <select name="language" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;" id="edit-sale-language">
                                            <option>Language</option>
                                            <option value="English" selected>English</option>
                                        </select>
                                    </div>
                                    <input type="text" id="edit-sale-title" name="title" class="form-control"
                                        placeholder="Title" style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" id="edit-sale-author" name="author" class="form-control"
                                        placeholder="Author" style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" id="edit-sale-edition" name="edition" id="edition-sale"
                                        class="form-control" placeholder="Edition"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <textarea name="description" id="edit-sale-description" class="form-control"
                                        cols="30" rows="4" placeholder="Description"
                                        style="margin-bottom: 12px; color: #003060;"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="sale-update"
                                    class="btn mx-auto w-25 text-white rounded-3 update-btn">Update</button>
                                <form id="sale-form-delete  " method="POST">
                                    @csrf
                                    <button type="button" id="sale-delete"
                                        class="btn mx-auto w-25 rounded-3 delete-btn">Delete</button>
                                </form>
                            </div>
                        </form>
                    </div>

                    <!-- exchange -->
                    <div id="edit-exchange-div" class="modal-body container-fluid px-5">
                        <form id="edit-exchange-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-5 me-1 border px-0 mb-2 rounded">
                                    <input type="text" name="user_id" value="" hidden>
                                    <input type="text" name="weight" id="edit-exchange-weight" hidden>
                                    <input type="text" name="width" id="edit-exchange-width" hidden>
                                    <input type="text" name="height" id="edit-exchange-height" hidden>
                                    <input type="text" name="length" id="edit-exchange-length" hidden>
                                    <input type="text" name="courier" id="edit-exchange-courier" hidden>

                                    <input type="file" name="book_photo" id="edit-exchange-image" class="d-none">
                                    <small style="color: #737679; margin-left: 8px; font-size: 10px;">The book photo
                                        field must be a file of type: jpeg, png, jpg, gif.</small>
                                    <label for="edit-exchange-image" class="position-relative w-100 h-100"
                                        style="cursor: pointer;">
                                        <img id="edit-exchange-book-image" src="../assets/listing.png" alt="image"
                                            class="img-fluid position-absolute top-50 start-50 translate-middle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            data-bs-title="Click to Upload Image" width="170" height="170">
                                    </label>

                                </div>
                                <div class="col">
                                    <select name="genre" id="edit-exchange-genre" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;">
                                        <option>Genre</option>
                                        <option value="Educational">Educational</option>
                                        <option value="Romance & Saga">Romance & Saga</option>
                                        <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Historical Fiction">Historical Fiction</option>
                                        <option value="Mystery & Suspense">Mystery & Suspense</option>
                                        <option value="Young Adult">Young Adult</option>
                                        <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                        <option value="Horror & Supernatural">Horror & Supernatural</option>
                                        va
                                        <option value="Comedy & Satire">Comedy & Satire</option>
                                        <option value="Poetry & Prose">Poetry & Prose</option>
                                        <option value="Self-Help">Self-Help</option>
                                        <option value="Crime & Thriller">Crime & Thriller</option>
                                    </select>
                                    <input type="text" name="edition" id="edit-exchange-edition" class="form-control"
                                        placeholder="Edition" style="margin-bottom: 12px; color: #003060;">
                                    <button type="button" id="edit-exchange-shipping-fee-btn" class="form-control"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Click to open shipping form"
                                        style="text-align: justify; margin-bottom: 12px; color: #003060;">
                                        Shipping Fee
                                    </button>
                                    <select name="condition" id="edit-exchange-condition"
                                        class="form-control form-select" style="margin-bottom: 12px; color: #003060;">
                                        <option>Condition</option>
                                        <option value="New">New</option>
                                        <option value="Like New">Like New</option>
                                        <option value="Very Good">Very Good</option>
                                        <option value="Good">Good</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Poor">Poor</option>
                                    </select>
                                    <select name="language" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;" id="edit-exchange-language">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                </div>
                                <input type="text" id="edit-exchange-title" name="title" class="form-control"
                                    placeholder="Title" style="margin-bottom: 12px; color: #003060;">
                                <input type="text" id="edit-exchange-author" name="author" class="form-control"
                                    placeholder="Author" style="margin-bottom: 12px; color: #003060;">
                                <textarea name="exchange_preferences" id="edit-exchange-preferences"
                                    class="form-control" cols="30" rows="4" placeholder="Exchange Preferences"
                                    style="margin-bottom: 12px; color: #003060;"></textarea>
                                <textarea name="description" id="edit-exchange-description" class="form-control"
                                    cols="30" rows="4" placeholder="Description"
                                    style="margin-bottom: 12px; color: #003060;"></textarea>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="exchange-update"
                                    class="btn mx-auto w-25 text-white rounded-3 update-btn">Update</button>
                                <button type="button" id="exchange-delete"
                                    class="btn mx-auto w-25 rounded-3 delete-btn">Delete</button>
                            </div>
                        </form>
                    </div>

                    <!-- rent -->
                    <div id="edit-rent-div">
                        <form id="edit-rent-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body container-fluid px-5">
                                <div class="row">
                                    <div class="col-5 px-0 me-1 border mb-2 rounded">
                                        <input type="text" name="user_id" value="" hidden>
                                        <input type="text" name="weight" id="edit-rent-weight" hidden>
                                        <input type="text" name="width" id="edit-rent-width" hidden>
                                        <input type="text" name="height" id="edit-rent-height" hidden>
                                        <input type="text" name="length" id="edit-rent-length" hidden>
                                        <input type="text" name="courier" id="edit-rent-courier" hidden>

                                        <input type="file" name="book_photo" id="edit-rent-image" class="d-none">
                                        <small style="color: #737679; margin-left: 8px; font-size: 10px;">The book
                                            photo
                                            field must be a file of type: jpeg, png, jpg, gif.</small>
                                        <label for="edit-rent-image" class="position-relative w-100 h-100"
                                            style="cursor: pointer;">
                                            <img id="edit-rent-book-image" src="../assets/listing.png" alt="image"
                                                class="img-fluid position-absolute top-50 start-50 translate-middle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                data-bs-title="Click to Upload Image" width="170" height="170">
                                        </label>

                                    </div>
                                    <div class="col">
                                        <select name="genre" id="edit-rent-genre" class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Genre</option>
                                            <option value="Educational">Educational</option>
                                            <option value="Romance & Saga">Romance & Saga</option>
                                            <option value="Fantasy & Adventure">Fantasy & Adventure</option>
                                            <option value="Science Fiction">Science Fiction</option>
                                            <option value="Historical Fiction">Historical Fiction</option>
                                            <option value="Mystery & Suspense">Mystery & Suspense</option>
                                            <option value="Young Adult">Young Adult</option>
                                            <option value="Non-Fiction & Biography">Non-Fiction & Biography</option>
                                            <option value="Horror & Supernatural">Horror & Supernatural</option>
                                            <option value="Comedy & Satire">Comedy & Satire</option>
                                            <option value="Poetry & Prose">Poetry & Prose</option>
                                            <option value="Self-Help">Self-Help</option>
                                            <option value="Crime & Thriller">Crime & Thriller</option>
                                        </select>
                                        <select name="condition" id="edit-rent-condition"
                                            class="form-control form-select"
                                            style="margin-bottom: 12px; color: #003060;">
                                            <option>Condition</option>
                                            <option value="New">New</option>
                                            <option value="Like New">Like New</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                        <button type="button" id="edit-rent-shipping-fee-btn" class="form-control"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Click to open shipping form"
                                            style="text-align: justify; margin-bottom: 12px; color: #003060;">
                                            Shipping Fee
                                        </button>
                                        <input type="text" name="price" id="edit-rent-rental-price" class="form-control"
                                            placeholder="Rental Price" style="margin-bottom: 12px; color: #003060;">
                                        <input type="text" name="security_deposit" id="edit-rent-security-deposit"
                                            class="form-control" placeholder="Security Deposit"
                                            style="margin-bottom: 12px; color: #003060;">
                                    </div>
                                    <input type="text" name="title" id="edit-rent-title" class="form-control"
                                        placeholder="Title" style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="author" id="edit-rent-author" class="form-control"
                                        placeholder="Author" style="margin-bottom: 12px; color: #003060;">
                                    <input type="text" name="edition" id="edit-rent-edition" class="form-control"
                                        placeholder="Edition" style="margin-bottom: 12px; color: #003060;">
                                    <select name="language" class="form-control form-select"
                                        style="margin-bottom: 12px; color: #003060;" id="edit-rent-language">
                                        <option>Language</option>
                                        <option value="English" selected>English</option>
                                    </select>
                                    <input type="text" name="rental_duration" id="edit-rent-rental-duration"
                                        class="form-control" placeholder="Rental Duration"
                                        style="margin-bottom: 12px; color: #003060;">
                                    <textarea name="rental_terms_and_condition"
                                        id="edit-rent-rental-terms-and-condition" class="form-control" cols="30"
                                        rows="4" placeholder="Rental Terms and Condition"
                                        style="margin-bottom: 12px; color: #003060;"></textarea>
                                    <textarea name="description" id="edit-rent-description" class="form-control"
                                        cols="30" rows="4" placeholder="Description"
                                        style="margin-bottom: 12px; color: #003060;"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" id="rent-update"
                                    class="btn mx-auto w-25 text-white rounded-3 update-btn">Update</button>
                                <button type="button" id="rent-delete"
                                    class="btn mx-auto w-25 rounded-3 delete-btn">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- shipping fee --}}
        <div class="modal fade" id="shipping-fee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button id="back-shipping" class="btn text-decoration-none float-start"><img
                                src="{{ asset('assets/left_arrow.png') }}" alt="back"></button>
                        <div class="d-flex justify-content-center w-100">
                            <h3 class="modal-title" id="staticBackdropLabel">Shipping Fee</h3>
                        </div>
                    </div>
                    <div class="modal-body py-2 px-4">
                        <span class="m-0 p-0" style="color: #737679; text-align: justify; font-size: 15px">Please
                            fill
                            in dimensions accurately. Inaccurate or missing dimensions may result in additional shipping
                            fee or failed delivery.</span>
                        <input type="number" name="weight" id="weight" class="form-control" placeholder="Weight (kg)"
                            style="margin-bottom: 7px; margin-top: 8px; color: #003060;"><br>

                        <label class="fw-bold" for="size">Packaging Size</label><br>
                        <input id="width" name="width" type="number" class="form-control" placeholder="Width (cm)"
                            style="margin-bottom: 7px; color: #003060;"><br>
                        <input id="height" name="height" type="number" class="form-control" placeholder="Height (cm)"
                            style="margin-bottom: 7px; color: #003060;"><br>
                        <input id="length" name="length" type="number" class="form-control" placeholder="Length (cm)"
                            style="margin-bottom: 7px; color: #003060;"><br>

                        <label class="fw-bold" for="courier">Please Select Courier</label><br>
                        {{-- <input id="jrs" class="ms-2" name="courier" type="radio" value="JRS Express">
                        <label for="jrs">JRS Express</label><br> --}}
                        <input id="jt" class="ms-2" name="courier" type="radio" value="J&T Express">
                        <label for="jt">J&T Express</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="shipping-save-btn" class="btn mx-auto w-25 text-white rounded-3"
                            style="background-color: #E55B13;">Save</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- edit shipping fee --}}
        <div class="modal fade" id="edit-shipping-fee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button id="edit-back-shipping" class="btn text-decoration-none float-start"><img
                                src="{{ asset('assets/left_arrow.png') }}" alt="back"></button>
                        <div class="d-flex justify-content-center w-100">
                            <h3 class="modal-title" id="staticBackdropLabel">Shipping Fee</h3>
                        </div>
                    </div>
                    <div class="modal-body py-2 px-4">
                        <span class="m-0 p-0" style="color: #737679; text-align: justify; font-size: 15px">Please
                            fill
                            in dimensions accurately. Inaccurate or missing dimensions may result in additional shipping
                            fee or failed delivery.</span>
                        <input type="number" name="weight" id="edit-weight" class="form-control"
                            placeholder="Weight (kg)" style="margin-bottom: 7px; color: #003060;"><br>

                        <label class="fw-bold" for="size">Packaging Size</label><br>
                        <input id="edit-width" name="width" type="number" class="form-control" placeholder="Width (cm)"
                            style="margin-bottom: 7px; color: #003060;"><br>
                        <input id="edit-height" name="height" type="number" class="form-control"
                            placeholder="Height (cm)" style="margin-bottom: 7px; color: #003060;"><br>
                        <input id="edit-length" name="length" type="number" class="form-control"
                            placeholder="Length (cm)" style="margin-bottom: 7px; color: #003060;"><br>

                        <label class="fw-bold" for="courier">Please Select Courier</label><br>
                        {{-- <input id="edit-jrs" class="ms-2" name="courier" type="radio" value="JRS Express">
                        <label for="edit-jrs">JRS Express</label><br> --}}
                        <input id="edit-jt" class="ms-2" name="courier" type="radio" value="J&T Express">
                        <label for="edit-jt">J&T Express</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="edit-shipping-save-btn" class="btn mx-auto w-25 text-white rounded-3"
                            style="background-color: #E55B13;">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.__footer', [
'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
'aos_link' => '/aos-master/dist/aos.js',
])

<script>
    document.getElementById('flexCheckDefault').addEventListener('change', function() {
        var submitButton = document.getElementById('submitButton');
        submitButton.disabled = !this.checked;
    });
</script>