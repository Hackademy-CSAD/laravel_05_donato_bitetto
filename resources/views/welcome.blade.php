<x-layout>

    
    <div class="container mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-6">

                <form method="POST" action="{{route('movie.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Year</label>
                        <input type="number" class="form-control" id="year" name="year" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image path</label>
                        <input type="text" class="form-control" id="img" name="img" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">{{ $movie->title }}</h5>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
