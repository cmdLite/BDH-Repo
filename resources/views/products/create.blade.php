<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Create</title>
</head>
<body>
<section class="section section-lg">
<div class="shell">
    <div class="range range-15 range-md-middle range-md-center">
        <div class="cell-lg-8 cell-xl-8 reveal-lg-flex" style="height: 660px;">

        <div class="hotel-booking-form">
            @if (session('saved'))
            <div class="alert alert-success">{{ session('saved') }}</div>
            @elseif (session('noimg'))
            <div class="alert alert-danger">{{ session('noimg') }}</div>
            @endif
            @error('name')
             <p class="text-danger">{{ $message }}&emsp;<span class="glyphicon glyphicon-remove text-danger"></span></p>
             @enderror
             @error('image')
                          <p class="text-danger mt-0 mb-2">{{ $message }}&emsp;<span class="glyphicon glyphicon-remove text-danger"></span></p>
             @enderror
             
             
            <div class="card">
                <div class="card-header">
                    <h4> Create Menu
                    <a href="{{ url('/menus') }}" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
                        <input type="hidden" name="id" value="">
                        
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="" data-constraints="@Required">
                        </div>

                        <div class="form-group mb-3">
                            <label for="category">Category</label>
                            {{-- <input onchange="dis()" id="category" type="text" name="category" class="form-control" value=""> --}}
                            <select onchange="dis()" id="category" type="text" name="category" class="form-control" value="">
                                <option value="Alacarte">Alacarte</option>
                                <option value="Drinks">Drinks</option>
                                <option value="Tray">Tray</option>
                                
                              </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Sub-Cat</label>
                            <input type="text" name="subcat" class="form-control" value="" data-constraints="@Required">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Default Price</label>
                            <input type="text" id="price_def" name="price_def" class="form-control" value="">
                        </div>
                        {{-- Hide if not drinks --}}
                        <div id="Drinks_Size">
                        <div class="form-group mb-3">
                            <label for="">Small size Price</label>
                            <input type="text" name="price_small" class="form-control" value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Large size Price</label>
                            <input type="text" name="price_large" class="form-control" value="">
                        </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Image Dir</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" id="upimg" name="image" class="custom-file-input " data-constraints="@Required">
                                    <img class="img-food m-3" src="#upimg" alt="">
                                    <input type="hidden" name="old_img" value="">
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

<script>
    document.getElementById('Drinks_Size').style.display='none';
    function dis() {
    var defsize = document.getElementById('price_def');
    var cat = document.getElementById('category');
    var Sizes = document.getElementById('Drinks_Size');
    var sm = document.getElementsByName('price_small')[0];
    var lg = document.getElementsByName('price_large')[0];


    if(cat.value === "Drinks"){
            defsize.value="0";
         defsize.style.display='none';
         Sizes.style.display="inline-block";
  	
         }
    else{
        lg.value = "0";
        sm.value = "0";
        defsize.style.display='inline-block';
         Sizes.style.display="none";
    }
                }
</script>