<?php?>
@extends('Shared._header')
@section('title', 'Souvenir Create')
@section('content')
    <h2>Create</h2>
    <h4>Souvenir</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('souvenirs/create')}}">
                @csrf
                <div class="form-group">
                    <label  class="control-label">Name</label>
                    <input name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Description</label>
                    <input name="description" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Price</label>
                    <input name="price" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Image</label>
                    <input type="text" name="imagePath" class="img-responsive" id="imagePath"/>
                </div>
                <div class="form-group">
                    <label  class="control-label">Supplier Id</label>
                    <input name="supplier_id" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">Category Id</label>
                    <input name="category_id" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit"  name="insert" id="insert" value="insert" class="btn btn-default" />
                </div>
            </form>
        </div>
    </div>
    <div>
        <a href="{{url('souvenirs/')}}">Back to List</a>
    </div>
    <script>
        $(document).ready(function(){
            $('#insert').click(function(){
                var image_name = $('#imagePath').val();
                if(image_name == '')
                {
                    alert("Please select image");
                    return false;
                }
                else {
                    var extension = $('#imagePath').val().split('.').pop().toLowerCase();
                    if(jQuery.inArray(extension,['jpg','png','gif','jpeg'])== -1)
                    {
                        alert('Invalid image file');
                        $('#imagePath').val('');
                        return false;
                    }
                }
            });
        });
    </script>
@endsection
<script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name = $('#imagePath').val();
            if(image_name == '')
            {
                alert("Please select image");
                return false;
            }
            else {
                var extension = $('#imagePath').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension,['jpg','png','gif','jpeg'])== -1)
                {
                    alert('Invalid image file');
                    $('#imagePath').val('');
                    return false;
                }
            }
        });
    });
</script>

