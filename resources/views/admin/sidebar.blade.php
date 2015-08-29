<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class="{{ Active::route('AdminOverview') }}"><a href="{{ route('AdminOverview') }}">Overview <span class="sr-only">(current)</span></a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="{{ Active::routePattern('AdminOrder*') }}"><a href="{{ route('AdminOrderIndex') }}">Orders 
    @if($pendingOrderCount)<span class="label label-danger">{{ $pendingOrderCount }}</span>
    @endif
    @if($proccessingOrderCount)<span class="label label-primary">{{ $proccessingOrderCount }}</span>
    @endif
    </a></li>
    <li class="{{ Active::routePattern('AdminCategory*') }}"><a href="{{ route('AdminCategoryIndex') }}">Categories</a></li>
    <li class="{{ Active::routePattern('AdminProduct*') }}"><a href="{{ route('AdminProductIndex') }}">Products</a></li>
    <li class="{{ Active::routePattern('AdminCustomer*') }}"><a href="{{ route('AdminCustomerIndex') }}">Customers</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class=""><a href="">Administration</a></li>
    <li class=""><a href="">One more nav</a></li>
    <li class=""><a href="">Another nav item</a></li>
  </ul>
</div>
