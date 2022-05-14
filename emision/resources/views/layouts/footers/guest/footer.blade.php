  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="https://emision.co/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Compañía
          </a>
          <a href="https://emision.co/distribuidores/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Distribuidores
          </a>
          <a href="https://emision.co/facturacion-electronica/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Factura Electrónica
          </a>
          <a href="https://emision.co/soporte/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Servicio al Cliente
          </a>
          <a href="https://emision.co/blog/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Blog
          </a>
          <a href="https://www.facturador.emision.co/sessions/login" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Facturador
          </a>
      </div>
        @if (!auth()->user() || \Request::is('static-sign-up')) 
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="https://emision.co/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
              </a>
              <a href="https://www.instagram.com/e_misioncolombia/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
              </a>
              <a href="https://github.com/creativetimofficial" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github" aria-hidden="true"></span>
              </a>
          </div>
        @endif
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft by 
              <a style="color: #252f40;" href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
              &
              <a style="color: #252f40;" href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">UPDIVISION</a>.
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
