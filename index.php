  <?php require_once('config/database.php'); ?>
  <?php
    $reponse=$dbd->query('select sum(nombre) as somme from dikhr');
    $result=$reponse->fetch();
  ?>
  <?php include('include/header.php'); ?>

  <main id="main" class="main" style="background-color: #FDF6E3;">
    <div class="pagetitle">
      <img src="icon/quran2.png" alt="">
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">استغفرالله</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="images/img1.jpg" class="img-thumbnail" alt="">
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $result['somme']; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">الحمد لله</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="images/img3.jpeg" class="img-thumbnail" alt="">
                    </div>
                    <div class="ps-3">
                      <h6>00</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">لا اله الا الله</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <img src="images/img4.jpeg" class="img-thumbnail" alt="">
                    </div>
                    <div class="ps-3">
                      <h6>00</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->


            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0 pt-4">

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Dhikr</th>
                        <th scope="col">Last day</th>
                        <th scope="col">Today</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="images/img1.jpg" alt=""></a></th>
                        <td><h5><a href="#" class="text-success fw-bold">استغفرالله</a></h5></td>
                        <td class="fw-bold">200</td>
                        <td class="fw-bold">100</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="images/img3.jpeg" alt=""></a></th>
                        <td><h5><a href="#" class="text-success fw-bold"> الحمد لله</a></h5></td>
                        <td class="fw-bold">300</td>
                        <td class="fw-bold">0</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="images/img4.jpeg" alt=""></a></th>
                        <td><h5><a href="#" class="text-success fw-bold"> لا اله الا الله</a></h5></td>
                        <td class="fw-bold">250</td>
                        <td class="fw-bold">100</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
  </main><!-- End #main -->

  <?php include('include/footer.php'); ?>
