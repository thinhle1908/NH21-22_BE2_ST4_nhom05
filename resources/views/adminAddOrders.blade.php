<x-app-layout>
           <!-- Content wrapper -->
           <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-notifications.html"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"
                        ><i class="bx bx-link-alt me-1"></i> Connections</a
                      >
                    </li>
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Add Order</h5>
          
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
                            <label for="firstName" class="form-label">Name</label>
                            <input
                              class="form-control order_name"
                              type="text"
                              value=""
                              name="order_name"
                              id ="order_name"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Address</label>
                            <input
                              class="form-control order_address"
                              type="text"
                              value=""
                              name="order_address"
                              id ="order_address"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Phone</label>
                            <input
                              class="form-control order_phone"
                              type="text"
                              value=""
                              name="order_phone"
                              id ="order_phone"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">Email</label>
                            <input
                              class="form-control order_email"
                              type="text"
                              value=""
                              name="order_email"
                              id ="order_email"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-12">
                                        <label for="w3review" class="form-label">Notes</label>
                                        <br>
                                        <textarea id="w3review" rows="6" cols="100%" style="width: 100%" name="order_notes"></textarea>
                                    </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Add Orders</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
</x-app-layout>