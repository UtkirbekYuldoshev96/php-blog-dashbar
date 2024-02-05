<!-- Footer -->
<footer id="page-footer" class="bg-body-light">
      <div class="content py-0">
            <div class="row fs-sm">
                  <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                              href="https://1.envato.market/ydb" target="_blank">pixelcarve</a>
                  </div>
                  <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">
                              Dashmix 5.2</a> &copy;
                        <span data-toggle="year-copy"></span>
                  </div>
            </div>
      </div>
</footer>
<!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS
  Core libraries and functionality
  webpack is putting everything together at assets/_js/main/app.js
-->
<script src="../assets/js/dashmix.app.min.js"></script>
<!-- Page JS Plugins -->

<script src="../assets/js/plugins/ckeditor/ckeditor.js"></script>
<!-- Page JS Helpers (CKEditor plugin) -->
<script>
      Dashmix.onLoad(function () {
            CKEDITOR.config.height = '450px';
            Dashmix.helpers(['js-ckeditor']);
      });
</script>
</body>

</html>