<x-app-layout>
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Dashboard /</span> Add-Order Items</h4>

      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:void(0);"><i class="fa fa-plus-square"></i>
                Add-OrdersItems</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/dashboard/orders-items"><i class="bx bx-link-alt me-1"></i>View Orders Items</a>
            </li>
          </ul>
          <div class="card mb-4">
            <h5 class="card-header">Add Order Items</h5>
            @if ($errors->any())
            <ul>
              @foreach ($errors->all() as $error)
              <li>
                {{ $error }}
              </li>
              @endforeach
            </ul>
            @endif
            @if(isset($succes))
            {{$succes}}
            @endif
            <!-- Account -->

            <hr class="my-0" />
            @foreach($orderitems as $data)
            <div class="card-body">
              <form id="formAccountSettings" enctype="multipart/form-data" action="{{ asset('dashboard/edit-ordersitems/'.$data->id) }}" method="post" novalidate>
                {{csrf_field()}}
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="country">Order</label>
                    <select id="country" class="select1 form-select" name="order_id">
                      @foreach ($order as $row)
                      @if($data->order_id == $row->id)
                      <option selected value="{{ $row->id }}">{{ $row->id }}</option>
                      @else
                      <option value="{{ $row->id }}">{{ $row->id }}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="country">Product</label>
                    <select id="country" class="select1 form-select product_id_order" onchange="productChanged(this)" name="product_id">
                      @foreach ($product as $row)
                      @if($data->product_id == $row->id)
                      <option selected class="pri{{$row->id}}" data-pri="{{$row->price}}" value="{{ $row->id }}">{{ $row->id }}</option>
                      @else
                      <option class="pri{{$row->id}}" data-pri="{{$row->price}}" value="{{ $row->id }}">{{ $row->id }}</option>
                      @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Quantity</label>
                    @php
                    $pr = $data->price;
                    @endphp
                    <input class="form-control qty" type="text" value="{{$data->qty}}" name="qty" id="qty" autofocus />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Price</label>
                    <input class="form-control price_item" type="text" value="{{ substr($pr,1) }}" name="price_item" id="price_item" autofocus />
                  </div>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Edit Orders-Items</button>
                  <button type="reset" class="btn btn-outline-secondary cancel_orders_items">Cancel</button>
                </div>
              </form>
            </div>
            @endforeach
            <!-- /Account -->
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</x-app-layout>