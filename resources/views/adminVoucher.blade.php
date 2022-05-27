<x-app-layout>
  
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-5 mb-4"><span class="text-muted fw-light">Dashboard /</span> Voucher</h4>

      <!-- Basic Bootstrap Table -->
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item">
        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>
          View Voucher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/dashboard/add-voucher"><i class="bx bx-link-alt me-1"></i>Add-Voucher</a>
      </li>
    </ul>
      <div class="card">

        <table class="table">
          <thead>
            <tr>
              <th>ID Voucher</th>
              <th>Voucher Code</th>
              <th>Status</th>
              <th>Voucher Name</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach($voucher as $id=>$data)
            <tr>
              <th scope row="row">{{$data ->voucher_id}}</th>
              <td>{{$data ->voucher_code}}</td>
              <td>{{$data ->voucher_value}}</td>
              <td>{{$data ->voucher_name}}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{asset('dashboard/edit-voucher/'.$data->voucher_id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="{{asset('dashboard/delete-voucher/'.$data->voucher_id)}}"><i class="bx bx-trash me-1"></i> Delete</a>
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
    <div class="">{{$voucher->appends(request()->all())->links()}}</div>
  </div>
  <!-- / Content -->

  <!-- Footer -->
  <!-- / Footer -->

  <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</x-app-layout>