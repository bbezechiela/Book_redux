@include('partials.__header', [
    'title' => 'Explore | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/explore-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDYtN3BNCcHFJXpQXrNMxKxIsc9-Pdd-0&callback=console.debug&libraries=maps,marker,places&v=beta">
    </script>
</head>
<style>
    .explore-side-btn {
        background-color: #003060;
    }

    .saved-side-btn {
        background-color: #2D6092;
    }
</style>
<div id="body-container" class="container-fluid px-0">
    <div id="sidebar" class="sidebar p-2 min-vh-100 shadow">
        <x-sidebar />
    </div>
    <div id="content" class="content">
        <ul class="nav bg-light sticky-top head-nav shadow py-4 px-4">
            <div class="w-100 d-flex mt-2 p-0">
                <a href="/explore" id="logo" class="px-2"><img class="img mx-1" src="../assets/Book_Logo.png"
                        alt="Logo"></a>

            </div>
            <div class="position-absolute end-0">
                <div class="d-flex">
                    <div class="input-group mt-1" style="height: 2em">
                        {{-- <span class="input-group-text" style="width: 15%;">
                            <i class="fa fa-search"></i>
                        </span> --}}
                        <div class="d-flex flex-row">
                            <span class="bg-white rounded-start-3 ps-2" style="width: 10%">
                                <i class="fa fa-search"></i>
                            </span>
                            <div class="position-relevant d-flex flex-column">
                                <input id="search_input" class="w-100 rounded-end-3 px-2 border border-0" type="text"
                                    placeholder="Search" style="height: 2em; outline: none">
                                <div id="searches" class="position-absolute border bg-light w-100 mt-5 p-2"
                                    style="cursor: pointer;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav py-profile justify-content-end" style="margin-left: 2em; margin-right: 2em;">
                        <li class="nav-item dropdown">
                            <a href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                class="nav-link dropdown-toggle avatar" aria-expanded="false" title="profile">
                                <img src="{{ session('image') }}" alt="notification" width="35" height="35"
                                    class="rounded-5">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/myprofile">Profile</a></li>
                                <li><a class="dropdown-item" href="/mypurchase">My Exchange Request</a></li>
                                <li><a class="dropdown-item" href="/addresses">Addresses</a></li>
                                {{-- <li><a class="dropdown-item" href="/changepassword">Change Password</a></li> --}}
                                <li><a class="dropdown-item" href="/reviewsandratings">User Reviews and Ratings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
        <div class="content px-5 py-4 row gap-4">
            <div class="w-100" style="border-bottom: 2px solid #E55B13;">
                <h3 class="fw-bold text-center" style="color: #E55B13;">Saved Books</h3>
                {{-- <hr class="]" > --}}
            </div>
            @foreach ($books as $saved)
                @if ($saved->user_id == session('id'))
                    <div class="card m-1 pb-4 shadow" style="width: 200px; flex: 0 0 auto; cursor: pointer;"
                        onclick="clickedPost({{ $saved->book->id }}, {{ $saved->book->user_id }})">
                        <img src="{{ asset('images/book_cover/' . $saved->book->back_cover) }}" class="img mx-auto p-2"
                            alt="..." width="130px" height="150px">
                        <div class="card-body py-0">
                            <p id="book-title" class="card-title mb-0 fw-bold">{{ $saved->book->title }}</p>
                            <p class="card-text mt-0 mb-0">{{ $saved->book->author }}<br>
                                {{ $saved->book->genre }}</p>
                            <p class="fw-bold" style="color: #E55B13;">{{ $saved->book->status }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

</body>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
<script>
    window.embeddedChatbotConfig = {
        chatbotId: "XDQ-VKWvQDxvk6o6YOZkL",
        domain: "www.chatbase.co"
    }
</script>
<script src="https://www.chatbase.co/embed.min.js" chatbotId="XDQ-VKWvQDxvk6o6YOZkL" domain="www.chatbase.co" defer>
</script>


<script>
    function stopPropagation() {
        event.stopPropagation();
    }
    // search script
    var search = document.getElementById('search_input');
    var searchContainer = document.getElementById('searches');
    if (search.value.trim().length < 1) {
        searchContainer.style.display = 'none'
    }
    search.addEventListener('keydown', (event) => {
        if (event.key === 'Enter' || event.keyCode === 13) {
            window.location.href = '/searchitem/' + search.value;
        }
    });
    search.addEventListener('input', () => {
        if (search.value.trim().length > 1) {
            const requestOptions = {
                method: 'GET',
            };
            fetch('/search/' + search.value.trim(), requestOptions)
                .then(response => response.json())
                .then(result => {
                    searchContainer.style.display = 'inline';
                    searchContainer.innerHTML = '';
                    // console.log(result);
                    // var loopCount = 0;

                    result.forEach(data => {
                        console.log(data);
                        // if (data.stock > 0) {
                        const suggestionElement = document
                            .createElement('div');
                        const searchedImage = document.createElement(
                            'img');
                        const searchedContent = document.createElement(
                            'div');
                        const titleText = document.createElement('p');
                        const authorText = document.createElement('p');
                        // suggestionElement.textContent = data.title;
                        suggestionElement.id = "searched-item";
                        suggestionElement.className = 'row px-2';
                        searchedImage.src = '/images/book_cover/' + data
                            .back_cover;
                        searchedImage.className = 'col-3 px-0 bg-light';
                        searchedContent.className = 'col border';
                        searchedContent.id = 'textContent';
                        titleText.className = 'm-0 fw-bold';
                        titleText.id = 'searched-title';
                        titleText.textContent = data.title;
                        authorText.id = 'searched-author';
                        authorText.textContent = data.author;
                        suggestionElement.addEventListener('click',
                            () => {
                                window.location.href = "/product/" +
                                    data.id;
                                searchContainer.innerHTML = '';
                            });
                        searchContainer.appendChild(suggestionElement);
                        suggestionElement.appendChild(searchedImage);
                        suggestionElement.appendChild(searchedContent);
                        searchedContent.appendChild(titleText);
                        searchedContent.appendChild(authorText);

                        // loopCount++;
                        // if (loopCount === 3) {
                        //     breakLoop = true;
                        //     return false;
                        // }
                        // }
                    });
                })
                .catch(error => console.log('error', error));
        } else {
            searchContainer.style.display = 'none'
            searchContainer.innerHTML = '';
        }
    });
    // clicked post
    function clickedPost(id, user_id) {
        window.location.href = "/product/" + id;
    };
</script>
