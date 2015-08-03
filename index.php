<?php

include "include/session.php";
include 'include/header.php';

?>


      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://farm1.staticflickr.com/456/20069620119_a9b3336d47_b_d.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="https://farm1.staticflickr.com/289/19635250613_4385baf58c_b_d.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>

          
          <div class="item">
            <img src="https://farm1.staticflickr.com/379/19635245033_9601aedd10_b_d.jpg" alt="...">
            <div class="carousel-caption">
              ...
            </div>
          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div><!-- end page wrap) -->



<?php include 'include/footer.php'; ?>

