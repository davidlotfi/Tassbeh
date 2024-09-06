  <?php require_once('config/database.php'); ?>
  <?php include('include/header.php'); ?>

  <main id="main" class="main" style="background-color: #FDF6E3;">
    <div class="pagetitle">

      <h1 class="text-success"><img src="icon/moon.png" alt=""> الا بذكر الله تطمئن القلوب</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
                  <div class="card">
                    <div class="card-body">
                      <!-- Vertical Form -->
                      <form class="row pt-4" action="tassbih.php" method="post">
                        <div class="col-5">
                          <select class="form-select" name="dikhr">
                            <option selected>اختيار الذكر---</option>
                            <option value="استغفر الله">استغفر الله</option>
                            <option value=" الحمد لله">الحمد لله</option>
                            <option value="لَا إِلَهَ إِلَّا اللَّهُ وَحْدَه">لَا إِلَهَ إِلَّا اللَّهُ وَحْدَهُ</option>
                            <option value="لَا إِلَهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيكَ لَهُ لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ">لَا إِلَهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيكَ لَهُ لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلِّ شَيْءٍ قَدِيرٌ</option>
                          </select>
                        </div>
                        <div class="col-5">
                          <input type="number" name="number"  class="form-control" id="inputAddress" placeholder="100" required>
                        </div>
                        <div class="col-2">
                          <button type="submit" name="commit" class="btn btn-primary">Tassbih</button>
                        </div>
                      </form><!-- Vertical Form -->
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                        <!-- Table Variants -->
                        <table class="table pt-3">
                          <thead>
                            <tr>
                              <th scope="col">Dikhr</th>
                              <th scope="col">number</th>
                              <th scope="col">checke</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if (isset($_POST['commit'])) {
                                  $count= $_POST['number'];
                                  $dikhr= $_POST['dikhr'];
                               for ($i=1; $i <= $count ; $i++) { ?>
                            <tr class="table-warning">
                              <th scope="row"><?php echo $dikhr;?></th>
                              <td><input type="checkbox" class="form-check-input" name="" id=""></td>
                              <td><?php echo $i;?></td>
                            </tr>
                            <?php }} ?>
                          </tbody>
                        </table>
                        <!-- End Table Variants -->
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <!-- Vertical Form -->
                      <form class="row pt-4" action="tassbih.php" method="post">
                      <div class="col-2"><button type="submit" name="insert" class="btn btn-success">save</button></div>
                        <div class="col-5"><?php if(isset($_POST['commit'])) {echo $dikhr;}?></div>
                        <div class="col-2"><input type="text" class="form-control" name="nbr" value="<?php if(isset($_POST['commit'])) {echo $i-1;}?>"></div>
                      </form><!-- Vertical Form -->
                      <?php if(isset($_POST['insert'])) {
                        $nbr = $_POST['nbr'];
                        $req=$dbd->prepare('INSERT INTO dikhr(nombre) VALUES(?)');
                        $req->execute(array($nbr));
                        ;}?>
                    </div>
                  </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
  </main><!-- End #main -->

  <?php include('include/footer.php'); ?>
