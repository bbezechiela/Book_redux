@include('partials.__header', [
    'title' => 'Books',
    'bootstrap_link' => '/bootstrap/bootstrap.min.css',
    'css_link' => '/css/style.css',
    'aos_link' => '/aos-master/dist/aos.css',
])
<div class="container-fluid p-3">    
        <h1 class="text-center text-primary fw-bold">Listing of books available in <span class="text-warning">Book</span>Redux</h1>
    <table class="table table-striped">
        <thead>
            <tr>                
                <th scope="col" class="fw-bold fs-5">User who Posted</th>
                <th scope="col" class="fw-bold fs-5">Book Photo</th>
                <th scope="col" class="fw-bold fs-5">Status</th>
                <th scope="col" class="fw-bold fs-5">Title</th>
                <th scope="col" class="fw-bold fs-5">Author</th>
                <th scope="col" class="fw-bold fs-5">Edition</th>
                <th scope="col" class="fw-bold fs-5">Genre</th>
                <th scope="col" class="fw-bold fs-5">Stock</th>
                <th scope="col" class="fw-bold fs-5">Condition</th>
                <th scope="col" class="fw-bold fs-5">Description</th>
                <th scope="col" class="fw-bold fs-5">Language</th>
                <th scope="col" class="fw-bold fs-5">Price</th>
                <th scope="col" class="fw-bold fs-5">Weight</th>
                <th scope="col" class="fw-bold fs-5">Width</th>
                <th scope="col" class="fw-bold fs-5">Height</th>
                <th scope="col" class="fw-bold fs-5">Length</th>
                <th scope="col" class="fw-bold fs-5">Courier</th>
                <th scope="col" class="fw-bold fs-5">Posted At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>                    
                    <td>{{ $book->user->first_name . ' ' . $book->user->last_name }}</td>
                    <td><img class="img w-100" src="{{ asset('images/books/' . $book->book_photo) }}" alt="book photo"></td>
                    <td>For {{ $book->status }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>{{ $book->condition }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->language }}</td>
                    <td>₱{{ $book->price }}</td>
                    <td>{{ $book->weight }}</td>
                    <td>{{ $book->width }}</td>
                    <td>{{ $book->height }}</td>
                    <td>{{ $book->length }}</td>
                    <td>{{ $book->courier }}</td>
                    <td>{{ $book->created_at }}</td>
                </tr>
            @endforeach           
        </tbody>
    </table>    
</div>
@include('partials.__footer', [
    'bootstrap_link' => '/bootstrap/bootstrap.bundle.min.js',
    'aos_link' => '/aos-master/dist/aos.js',
])
