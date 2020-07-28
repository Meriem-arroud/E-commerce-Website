<?php 
require_once 'header/headeradmin.php';
require_once 'dbconnexion.php';
session_start();
?>
<style type="text/css">
  .icon{

    width:70px;
    height:70px;
  }
</style>
<div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                        <a href="adminadd.php"> <img src="img/add.png" class="icon"></a>
                            <h6>Add a product</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <a href="modifyanddelete.php"><img src="img/reset.png" class="icon"></a></br>
                            <h6>Reset product</h6>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                          <a href="modifyanddelete.php"><img src="img/delete.png" class="icon"></a></br>
                            <h6>Delete product</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="title-section mb-5 col-12" style="margin-left:150px; margin-top:30px;">
        <h2 class="text-uppercase">Procurement statistics</h2>
        </div>

<div class="section-top-border" style="margin-left:40px; margin-right:40px; margin-bottom:3em;">
        <div class="progress-table-wrap">
          <div class="progress-table">
            <div class="table-head">
              <div class="serial">#</div>
              <div class="country">Countries</div>
              <div class="visit">Visits</div>
              <div class="percentage">Percentages</div>
            </div>
            <div class="table-row">
              <div class="serial">01</div>
              <div class="country"> <img src="img/f9.png" alt="flag"></div>
              <div class="visit">7032</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-1" role="progressbar" style="width: 90%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="table-row">
              <div class="serial">02</div>
              <div class="country"> <img src="img/f2.jpg" alt="flag"></div>
              <div class="visit">4002</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-2" role="progressbar" style="width: 30%"
                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="table-row">
              <div class="serial">03</div>
              <div class="country"> <img src="img/f3.jpg" alt="flag"></div>
              <div class="visit">5022</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-3" role="progressbar" style="width: 55%"
                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="table-row">
              <div class="serial">04</div>
              <div class="country"> <img src="img/f4.jpg" alt="flag"></div>
              <div class="visit">5032</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-4" role="progressbar" style="width: 60%"
                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="table-row">
              <div class="serial">05</div>
              <div class="country"> <img src="img/f5.jpg" alt="flag"></div>
              <div class="visit">3099</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-5" role="progressbar" style="width: 40%"
                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="table-row">
              <div class="serial">06</div>
              <div class="country"> <img src="img/f6.jpg" alt="flag"></div>
              <div class="visit">6032</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-6" role="progressbar" style="width: 70%"
                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="table-row">
              <div class="serial">07</div>
              <div class="country"> <img src="img/f7.jpg" alt="flag"></div>
              <div class="visit">2342</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-7" role="progressbar" style="width: 30%"
                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="table-row">
              <div class="serial">08</div>
              <div class="country"> <img src="img/f8.jpg" alt="flag"></div>
              <div class="visit">5402</div>
              <div class="percentage">
                <div class="progress">
                  <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
require_once 'footer.php';
?>

