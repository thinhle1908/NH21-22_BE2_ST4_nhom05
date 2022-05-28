<x-app-layout>

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Dashboard /</span> Add-Voucher</h4>

      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:void(0);"><i class="fa fa-plus-square"></i>
                Add-Voucher</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://127.0.0.1:8000/dashboard/voucher"><i class="bx bx-link-alt me-1"></i>View Voucher</a>
            </li>
          </ul>
          <div class="card mb-4">

            <h5 class="card-header">Add Voucher</h5>
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
            <div class="card-body">
              <form id="formAccountSettings" enctype="multipart/form-data" action="{{ asset('dashboard/add-voucher') }}" method="post" novalidate>
                {{csrf_field()}}
                <div class="row">
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Voucher Code</label>
                    <input class="form-control voucher_code" type="text" value="" name="voucher_code" id="voucher_code" autofocus />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Voucher Value</label>
                    <input class="form-control voucher_value" type="text" value="" name="voucher_value" id="voucher_value" autofocus />
                  </div>
                  <div class="mb-3 col-md-12">
                    <label for="firstName" class="form-label">Voucher Name</label>
                    <input class="form-control voucher_name" type="text" value="" name="voucher_name" id="voucher_name" autofocus />
                  </div>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Add Voucher</button>
                  <button type="reset" class="btn btn-outline-secondary cancel_voucher">Cancel</button>
                </div>
              </form>
            </div>
            <!-- /Account -->
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with ❤️ by
          <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
        </div>
        <div>
          <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
          <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

          <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

          <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
        </div>
      </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</x-app-layout>