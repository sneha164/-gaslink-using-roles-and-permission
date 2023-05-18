@extends('layouts.app')
@section('content')
<section>
    <div class="search" style="margin-top: 150px;">
        <form method="GET" action="#"
            style="display: flex;
                    margin-left: 600px;
                    margin-top: 20px;
                    ">
            <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" >
            <input type="submit" value="search" class="btn btn-outline-primary">
        </form>
    </div>
</section>
    <div class="container">
        <div data-aos="fade-up">
            <div class="row mt-3">
                @foreach ($technicians as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card mb-5 mt-5">
                                <h3 class="card-title ">{{ $item->begin_date }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
