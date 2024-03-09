@include('partials.__header', [
    'title' => 'Survey | BookRedux',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/survey-style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])

<div class="container">
    <h2>What genres are you most interested in?</h2>
    <h6>Your feedback will help us personalize your page to better suit your preferences.</h6>
    <small>Select all that apply</small>

    <div class="col container-fluid px-4 py-2">
        <form action="/interest" method="POST">
            @csrf
            <div class="row px-3">
                <div class="col-3">
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="educational" value="Educational"
                            autocomplete="off" />
                        <label class="btn" for="educational">Educational</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="romance" value="Romance & Saga"
                            autocomplete="off" />
                        <label class="btn" for="romance">Romance & Saga</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="fantasy"
                            value="Fantasy & Adventure" autocomplete="off" />
                        <label class="btn" for="fantasy">Fantasy & Adventure</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="science"
                            value="Science Fiction" autocomplete="off" />
                        <label class="btn" for="science">Science Fiction</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="history"
                            value="Historical Fiction" autocomplete="off" />
                        <label class="btn" for="history">Historical Fiction</label>
                    </div>
                </div>
                <div class="col">
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="mystery"
                            value="Mystery & Suspense" autocomplete="off" />
                        <label class="btn" for="mystery">Mystery & Suspense</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="youngAdult" value="Young Adult"
                            autocomplete="off" />
                        <label class="btn" for="youngAdult">Young Adult</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="non-fiction"
                            value="Non-Fiction & Biography" autocomplete="off" />
                        <label class="btn" for="non-fiction">Non-Fiction & Biography</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="horror"
                            value="Horror & Supernatural" autocomplete="off" />
                        <label class="btn" for="horror">Horror & Supernatural</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="poetry" value="Poetry & Prose"
                            autocomplete="off" />
                        <label class="btn" for="poetry">Poetry & Prose</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="self-help" value="Self-Help"
                            autocomplete="off" />
                        <label class="btn" for="self-help">Self-Help</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="crime"
                            value="Crime & Thriller" autocomplete="off" />
                        <label class="btn" for="crime">Crime & Thriller</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="comedy"
                            value="Comedy & Satire" autocomplete="off" />
                        <label class="btn" for="comedy">Comedy & Satire</label>
                    </div>
                </div>
            </div>


            {{-- <div class="row px-3">
                <div class="col-2">
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="educational" value="Educational"
                            autocomplete="off" />
                        <label class="btn" for="educational">Educational</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="romance" value="Romance & Saga"
                            autocomplete="off" />
                        <label class="btn" for="romance">Romance & Saga</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="fantasy"
                            value="Fantasy & Adventure" autocomplete="off" />
                        <label class="btn" for="fantasy">Fantasy & Adventure</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="science"
                            value="Science Fiction" autocomplete="off" />
                        <label class="btn" for="science">Science Fiction</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="mystery"
                            value="Mystery & Suspense" autocomplete="off" />
                        <label class="btn" for="mystery">Mystery & Suspense</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="youngAdult" value="Young Adult"
                            autocomplete="off" />
                        <label class="btn" for="youngAdult">Young Adult</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="non-fiction"
                            value="Non-Fiction & Biography" autocomplete="off" />
                        <label class="btn" for="non-fiction">Non-Fiction & Biography</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="poetry" value="Poetry & Prose"
                            autocomplete="off" />
                        <label class="btn" for="poetry">Poetry & Prose</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="self-help" value="Self-Help"
                            autocomplete="off" />
                        <label class="btn" for="self-help">Self-Help</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="crime"
                            value="Crime & Thriller" autocomplete="off" />
                        <label class="btn" for="crime">Crime & Thriller</label>
                    </div>
                </div>
                <div class="col-2">
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="comedy"
                            value="Comedy & Satire" autocomplete="off" />
                        <label class="btn" for="comedy">Comedy & Satire</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="horror"
                            value="Horror & Supernatural" autocomplete="off" />
                        <label class="btn" for="horror">Horror & Supernatural</label>
                    </div>
                    <div class="check-button">
                        <input type="checkbox" class="btn-check" name="interest[]" id="history"
                            value="Historical Fiction" autocomplete="off" />
                        <label class="btn" for="history">Historical Fiction</label>
                    </div>
                </div>
            </div> --}}
            {{-- <button type="button" class="submit-btn" id="submit-button"><a href="/home">Get started<i
                        class="fa fa-arrow-right" aria-hidden="true"></i></a></button> --}}
            <button type="submit" class="submit-btn text-white" id="submit-button">Get started<i class="fa fa-arrow-right"
                    aria-hidden="true"></i></button>
        </form>
    </div>

    @include('partials.__footer', [
        'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
        'aos_link' => '/aos-master/dist/aos.js',
    ])

    {{-- <input type="checkbox" class="btn" name="interest[]" id="educational" value="Educational">
                <label for="educational">Educational</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="romance" value="Romance & Saga">
                <label for="romance">Romance & Saga</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="fantasy" value="Fantasy & Adventure">
                <label for="fantasy">Fantasy & Adventure</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="science" value="Science Fiction">
                <label for="science">Science Fiction</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="history" value="Historical Fiction">
                <label for="history">Historical Fiction</label> --}}

    {{-- <input type="checkbox" name="interest[]" id="mystery" value="Mystery & Suspense">
                <label for="mystery">Mystery & Suspense</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="youngAdult" value="Young Adult">
                <label for="youngAdult">Young Adult</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="non-fiction" value="Non-Fiction & Biography">
                <label for="non-fiction">Non-Fiction & Biography</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="horror" value="Horror & Supernatural">
                <label for="horror">Horror & Supernatural</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="comedy" value="Comedy & Satire">
                <label for="comedy">Comedy & Satire</label> --}}

    {{-- <input type="checkbox" name="interest[]" id="poetry" value="Poetry & Prose">
                <label for="poetry">Poetry & Prose</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="self-help" value="Self-Help">
                <label for="self-help">Self-Help</label><br> --}}
    {{-- <input type="checkbox" name="interest[]" id="crime" value="Crime & Thriller">
                <label for="crime">Crime & Thriller</label> --}}
