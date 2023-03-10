<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.css');
   <style type="text/css">
    .div_center
    {
        text-align:center;
        padding-top:40px;
    }
    .font_size
    {
        font-size:40px;
        padding-bottom:40px;
    }
    .text_color
    {
        color:black;
        padding-bottom:20px;
    }
    label 
    {
        display:inline-block;
        width:200px;
    }
    .div_design 
    {
        padding-bottom:15px;

    }
   </style>
 
   
  </head>
  <body>
    <div class="container-scroller">
    
      <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar');
      <!-- partial -->
       @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="true" aria-hidden="true">x</button>

                {{session()->get('message')}}
            </div>
            @endif

          <div class="div_center">
            <h1 class="font_size">Add Product</h1>

            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_design">
                    <label>Product title</label>
                    <input class="text_color" type="text" name="title" placeholder="Write your product title" required="">
                </div>
                <div class="div_design">
                    <label>Product Description</label>
                    <input class="text_color" type="text" name="description" placeholder="Write your product desc">
                </div>
               
                <div class="div_design">
                    <label>Product Category</label>
                    <select name="category">
                        <option value="" selected="">Add a catefory</option>
                        @foreach($category as $cat)
                        <option value="">{{$cat->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="div_design">
                    <label >Product Quantity</label>
                    <input class="text_color" type="number" name="quantity" placeholder="Write your quantity">
                </div>
                <div class="div_design">
                    <label >Product Price</label>
                    <input class="text_color" type="number" name="price" placeholder="Write product price">
                </div>
                <div class="div_design">
                    <label >Discount Price</label>
                    <input class="text_color" type="number" name="disc_price" placeholder="Write product discount price">
                </div>
                <div class="div_design">
                    <label>Product Image</label>
                    <input class="text_color" type="file" name="image" >
                </div>
                <div>
                    <input type="submit" name="button" value="Add Product" class="btn btn-primary">
                </div>
            </form>
          </div>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script');
  </body>
</html>