<x-app-layout>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Add-User</h4>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>
                                Add-User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('dashboard/protype') }}"><i
                                    class="bx bx-link-alt me-1"></i> View User</a>
                        </li>
                    </ul>
                    <div class="card mb-4">
                        <h5 class="card-header">User</h5>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <!-- Account -->

                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" action="/edit-user/{{$user->id}}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label for="firstName" class="form-label">Name</label>
                                        <input class="form-control" type="text" id="firstName" name="name" value="{{$user->name}}"
                                            autofocus />
                                            <label for="firstName" class="form-label">Email</label>
                                        <input class="form-control" type="text" id="firstName" name="email" value="{{$user->email}}"
                                            autofocus />
                                            <label for="firstName" class="form-label">Role</label>
                                        <input class="form-control" type="text" id="firstName" name="role" value="{{$user->role}}"
                                            autofocus />
                                            <label for="firstName" class="form-label">Password</label>
                                        <input class="form-control" type="text" id="firstName" name="password" value="{{$user->password}}"
                                            autofocus />
                                            
                                    </div>

                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Add Type</button>
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
                    <a href="https://themeselection.com" target="_blank"
                        class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                        target="_blank" class="footer-link me-4">Documentation</a>

                    <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                        class="footer-link me-4">Support</a>
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</x-app-layout>
