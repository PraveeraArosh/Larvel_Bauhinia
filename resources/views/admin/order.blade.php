<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style>
    .title_deg{
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 40px;
    }
    .table_deg{
        border: 2px solid skyblue;
        width: 85%;
        margin: auto;
        padding-top: 50px;
        text-align: center;
    }
    .th_deg{
        background-color: skyblue;
        color: black;
    }
    .img_size{
        width: 200px;
        height: 100px;
    }
  </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
       
        <div class="main-panel">
            <div class="content-wrapper">

            <h1 class="title_deg">All Orders</h1>

            <div style="padding-left:40px; padding:30px">
                <form action="{{url('search')}}" method="get">

                @csrf
                    <input type="text" name="search" placeholder="Search a product" style="color: black;">
                    <input type="submit" value="Search" class="btn btn-outline-primary">


                </form>


            </div>


            <table class="table_deg">
                <tr class="th_deg">
                    <th style="padding: 5px;">Name</th>
                    <th style="padding: 5px;">Email</th>
                    <th style="padding: 5px;">Address</th>
                    <th style="padding: 5px;">Phone</th>
                    <th style="padding: 5px;">Product title</th>
                    <th style="padding: 5px;">quantity</th>
                    <th style="padding: 5px;">Price</th>
                    <th style="padding: 5px;">Payment Status</th>
                    <th style="padding: 5px;">Delivery Status</th>
                    <th style="padding: 5px;">Delivered</th>
                    <th style="padding: 5px;">Print PDF</th>
                </tr>

                @foreach($order as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->Address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    
                    <td>

                        @if($order->delivery_status=='processing')
                        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product delivered ?')" class="btn btn-primary">Delivered</a>

                        @else
                        <p style="color: aquamarine;">Delivered</p>

                        @endif
                    </td>
                    <td>
                    <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>

                    </td>
                </tr>

                @endforeach

            </table>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>