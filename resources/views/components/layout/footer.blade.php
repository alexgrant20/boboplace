<footer class="footer-section">
  <div class="container relative">
    <div class="d-flex align-items-center justify-content-between p-4">
      <div>
        <h3 class="d-flex align-items-center">
          <span class="me-1"><img src="/images/envelope-outline.svg" alt="" class="img-fluid">
          </span>
          <span>Subscribe to Newsletter</span>
        </h3>

        <form action="{{ route('newsletter.post') }}" class="row g-3" method="POST">
          @csrf
          <div class="col">
            <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your name">
          </div>
          <div class="col">
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email">
          </div>
          <div class="col">
            <button class="btn btn-primary rounded" type="submit">
              <span class="fa fa-paper-plane"></span>
            </button>
          </div>
        </form>
      </div>

      <ul class="list-unstyled custom-social">
        <li><a href="https://web.facebook.com/rickroll548" target="_blank"><span
              class="fa fa-brands fa-facebook-f fa-2x"></span></a></li>
        <li><a href="https://twitter.com/rickroll" target="_blank"><span
              class="fa fa-brands fa-twitter fa-2x"></span></a></li>
        <li><a href="https://www.instagram.com/rick_astley_memes/?hl=id" target="_blank"><span
              class="fa fa-brands fa-instagram fa-2x"></span></a></li>
      </ul>
    </div>

    <div class="border-top copyright">
      <div class="row pt-4">
        <div class="col-lg-6">
          <p class="mb-2 text-center text-lg-start">Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>. All Rights Reserved.
          </p>
        </div>
      </div>
    </div>

  </div>
</footer>
