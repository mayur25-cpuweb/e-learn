
<!-- Footer -->
<footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 ">

    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
      <!-- Github -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->


    <!-- Section: Form -->
    <section class="footer">
      <form action="" method="post">
        <!--Grid row-->
        <div class="row d-flex ">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form5Example2" class="form-control" name="newsemail"/>
              <label class="form-label" for="form5Example2" name="newsemail">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4" name="newsbtn">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
      <?php
      if (isset($_POST['newsbtn'])) {

      $newsemail=$_POST['newsemail'];
      if (empty($newsemail)) {
         echo"<span class='badge rounded-pill bg-danger text-md-center'>Enter EMAIL</span><br>";
      }else if (!filter_var($newsemail, FILTER_VALIDATE_EMAIL)) {
        echo"<span class='badge rounded-pill bg-danger text-md-center'>INVALID EMAIL FORMAT</span><br>";
    }else{
            $insertsqlcourse = "INSERT INTO newsletter(newsemail)
            VALUES ('{$newsemail}')";//where id=".$_GET["id"] ."";
  
            if (mysqli_query($conn, $insertsqlcourse)) {
             
              echo"<span class='badge rounded-pill bg-success'>THANK YOU FOR SUBSCRIBING!</span>";
                
            } else {
              echo"<span class='badge rounded-pill bg-danger text-md-center'>ERROR WHILE SUBSCRIBING</span><br>";
            }
          }
        }
      mysqli_close($conn);
      ?>
    </section>
    <!-- Section: Form -->


    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
        distinctio earum repellat quaerat voluptatibus placeat nam,
        commodi optio pariatur est quia magnam eum harum corrupti dicta,
        aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->


    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row justify-content-center">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Career POint University</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">About</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Career</a>
            </li>
            <li>
              <a href="#!" class="text-dark">News</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Connect</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Blog</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Contact Us</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Media</a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Legals</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Terms and Conditions</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Honor Code</a>
            </li>
           
          </ul>
        </div>
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-dark" href="http://www.cpur.in/">@Career Point University</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
<!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
     -->
  </body>
 
</html>