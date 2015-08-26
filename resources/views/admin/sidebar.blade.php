<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class=""><a href="#">Overview <span class="sr-only">(current)</span></a></li>
    <li class=""><a href="#">Sales</a></li>
    <li class=""><a href="#">Analytics</a></li>
    <li class=""><a href="#">Export</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="{{ Active::routePattern('AdminOrder*') }}"><a href="{{ route('AdminOrderIndex') }}">Orders
    <span class="label label-danger">{{ \App\Models\Order::where('status_code_id', 1)->count() }}</span></a></li>
    <li class="{{ Active::routePattern('AdminCategory*') }}"><a href="{{ route('AdminCategoryIndex') }}">Categories</a></li>
    <li class="{{ Active::routePattern('AdminProduct*') }}"><a href="{{ route('AdminProductIndex') }}">Products</a></li>
    <li class=""><a href="">Customers</a></li>
    <li class=""><a href="">More navigation</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class=""><a href="">Nav item again</a></li>
    <li class=""><a href="">One more nav</a></li>
    <li class=""><a href="">Another nav item</a></li>
  </ul>
</div>
