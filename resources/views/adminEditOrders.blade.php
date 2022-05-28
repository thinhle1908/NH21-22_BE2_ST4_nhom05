<x-app-layout>
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span> Edit-Order</h4>

      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>
                Eidit-Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/dashboard/add-orders"><i class="bx bx-link-alt me-1"></i>Add-Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/dashboard/orders"><i class="bx bx-link-alt me-1"></i>View Orders</a>
            </li>
          </ul>
          <div class="card mb-4">
            <h5 class="card-header">Edit Order</h5>
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
            @foreach($orderDetail as $row)
            <div class="card-body">
              <form id="formAccountSettings" enctype="multipart/form-data" action="{{ asset('dashboard/edit-orders/'.$row->id) }}" method="post" novalidate>
                {{csrf_field()}}
                <div class="row">
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Name</label>
                    <input class="form-control order_name" type="text" value="{{ $row->order_name}}" name="order_name" id="order_name" autofocus />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Address</label>
                    <input class="form-control order_address" type="text" value="{{ $row->order_address}}" name="order_address" id="order_address" autofocus />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Phone</label>
                    <input class="form-control order_phone" type="text" value="{{ $row->order_phone}}" name="order_phone" id="order_phone" autofocus />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Email</label>
                    <input class="form-control order_email" type="text" value="{{ $row->order_email}}" name="order_email" id="order_email" autofocus />
                  </div>
                  @php
                  if($row->order_notes=="Không có"){
                  $note = "";
                  }else
                  {
                  $note = $row->order_notes;
                  }
                  @endphp
                  <div class="mb-3 col-md-12">
                    <label for="w3review" class="form-label">Notes</label>
                    <br>
                    <textarea id="w3review" rows="6" cols="100%" style="width: 100%" name="order_notes">{{$note}}</textarea>
                  </div>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Repair Orders</button>
                  <button type="reset" class="btn btn-outline-secondary cancel_order">Cancel</button>
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