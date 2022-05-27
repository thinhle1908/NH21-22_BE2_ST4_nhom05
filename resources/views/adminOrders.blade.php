<x-app-layout>

  <!-- Content wrapper -->
  <div class="content-wrapper" class="table-brodered">
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-5 mb-4"><span class="text-muted fw-light">Dashboard /</span> Order</h4>

      <!-- Basic Bootstrap Table -->
      <div class="card">

        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Notes</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($order as $data)
            <tr>
              <th scope row="row">{{$data->id}}</th>
              <td>{{$data->order_name}}</td>
              <td>{{$data->order_address}}</td>
              <td>{{$data->order_phone}}</td>
              <td>{{$data->order_email}}</td>
              <td>{{$data->order_notes}}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{asset('dashboard/edit-voucher/'.$data->voucher_id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="{{asset('dashboard/delete-orders/'.$data->id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>

            </tr>
            @endforeach

          </tbody>
        </table>

      </div>
      <!--/ Basic Bootstrap Table -->
    </div>
    <hr>
    <div class="">{{$order->appends(request()->all())->links()}}</div>
  </div>

  <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</x-app-layout>