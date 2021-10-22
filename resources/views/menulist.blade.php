@extends('layouts.app')
  @section('content')

  <div class="container">
    <h3 class="mb-3">Ruben Menu Database 
    @if (Auth::user())
    <a class="btn btn-success float-right" href="/create">Add Product</a>
    @endif
     
    </h3>
{{-- {{ dd(Auth::user()) }} --}}
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Image Directory</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Menus as $list )
                <tr>
                    <td>{{ $list->id }}</td>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->category }}</td>
                    <td>{{ $list->sub_cat }}</td>
                    <td class="text-center"><img class="img-food"src="{{ asset($list->img_dir)}}" alt=""></td>
                    <td class="align-middle text-center">
                      @if (Auth::user())
                      <a class="btn btn-sm btn-primary mb-4" href="{{ url('menus/'.$list->id.'/edit') }}">EDIT</a>
                      <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">DELETE</button>
                      @endif
                    </td>
                  </tr>
         
                @endforeach
            </tbody>
          </table>
        </div>

         <!-- Modal -->

         <div class="modal fade" id="myModal" tabindex="0" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

          <div class="modal-dialog">
      
            <div class="modal-content">
      
              <div class="modal-header">
      
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      
                <h4 class="modal-title">Delete Product?</h4>
      
              </div>
      
              <div class="modal-body text-center">
      
                <p>Are your sure you want to DELETE product?</p>
      
              </div>
      
              <div class="modal-footer">
                <a  class="btn button-secondary mx-auto" data-dismiss="modal">CANCEL</a>
                <form action="{{ url('menus/'.$list->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="submit" class="btn button-primary mx-auto" value="DELETE">
                </form>
                
                
      
              </div>
      
            </div><!-- /.modal-content -->
      
          </div><!-- /.modal-dialog -->
      
        </div><!-- /.modal -->
      
      @endsection
<!-- Javascript-->




<script src="js/core.min.js"></script>



<script src="js/script.js"></script>



<script src="js/pointer-events.min.js"></script>



<script src="js/html5shiv.min.js"></script>

<script type="text/javascript">
@if ($errors->has('emailsubs'))
$('#subsmodal').modal('show');

setTimeout(function() {
    $('#subsmodal').modal('hide');
}, 5000); 

@elseif (count($errors) > 0)
$('#emailmodal').modal('show');

setTimeout(function() {
    $('#emailmodal').modal('hide');
}, 5000); 

@elseif(session()->has('subsmsg'))
$('#subsmodal').modal('show');

setTimeout(function() {
  $('#subsmodal').modal('hide');
}, 5000); 

@elseif(session()->has('message'))
$('#emailmodal').modal('show');

setTimeout(function() {
  $('#emailmodal').modal('hide');
}, 5000); 

@endif
  </script>