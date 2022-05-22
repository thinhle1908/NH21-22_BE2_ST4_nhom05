{{-- <x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>

</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        You're logged in!
      </div>
    </div>
  </div>
</div>


</x-app-layout> --}}

<x-app-layout>

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <table>
      <thead>
        <tr>
          <th>ID Receipt</th>
          <th>ID User</th>
          <th>Total Price Receipt</th>
          <th>Status</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope row ="row">1</th>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>5</td>
        </tr>
      </tbody>
    </table>
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