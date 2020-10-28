

  </div>
  <script src="{{ asset('public/assets/lib/jquery/jquery.min.js ' ) }}" type="text/javascript"></script>
  <script src="{{ asset('public/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js ' ) }}" type="text/javascript"></script>
  <script src="{{ asset('public/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js ' ) }}" type="text/javascript"></script>
  <script src="{{ asset('public/assets/js/app.js ' ) }}" type="text/javascript"></script>

  @yield('script')

  <script type="text/javascript">
    $(document).ready(function() {
      //-initialize the javascript
      App.init();
    });
  </script>
</body>

</html>