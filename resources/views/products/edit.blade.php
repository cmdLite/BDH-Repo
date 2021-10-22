<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Edit</title>
</head>
<body>
<section class="section section-lg">
<div class="shell">
    <div class="range range-15 range-md-middle range-md-center">
        <div class="cell-lg-8 cell-xl-8 reveal-lg-flex" style="height: 660px;">

            <div class="hotel-booking-form">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @elseif (session('Fail'))
            <div class="alert alert-danger">{{ session('Fail') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4> Edit Menu
                    <a href="{{ url('/menus') }}" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('menus/'.$menus->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $menus->id }}">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $menus->name }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <input type="text" name="category" class="form-control" value="{{ $menus->category }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Sub-Cat</label>
                            <input type="text" name="sub-cat" class="form-control" value="{{ $menus->sub_cat }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Image Dir</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input">
                                    <img class="img-food m-3" src="{{ asset($menus->img_dir)}}" alt="">
                                    <input type="hidden" name="old_img" value="{{ $menus->img_dir }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>