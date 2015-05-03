<?php include 'partials/head.php'; ?>
<?php include 'partials/header.php'; ?>

 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

        <?php


        // $pdo = new PDO('mysql:host=localhost;dbname=hack24', 'root', '9ZfsGrdn6N');
        // $statement = $pdo->query("SELECT * FROM User_data");
        // $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        // foreach ($statement as $key => $value) {
        //     # code...
        // }

        $jobData = new JobData();

        // $users = $jobData->getUsers();

        // $companies = $jobData->getCompanies();
        // $cultures = $jobData->getCultures();

        // echo "<pre>".print_r($cultures,true)."</pre>";

        // $columns_to_add = array( 'satisfaction', 'prof_development', 'appr_pay', 'treatment', 'worklife', 'culture' );

        // foreach ($cultures as $culture) {
        //     $total = 0;
        //     $total += $culture['satisfaction'];
        //     $total += $culture['prof_development'];
        //     $total += $culture['appr_pay'];
        //     $total += $culture['treatment'];
        //     $total += $culture['worklife'];
        //     $total += $culture['culture'];
        //     echo "<pre>".print_r((($total / 42) * 100),true)."</pre>";
        //     echo "<pre>".print_r(getPercentage( $cultures, $columns_to_add ),true)."</pre>";
        // }

        // $departments = $jobData->getDepartments();
        // $managers = $jobData->getManagers();
        // $managerratings = $jobData->getManagerRatings();
        // $role = $jobData->getRole();

        // echo "<pre>".print_r($companies,true)."</pre>";
        // echo "<pre>".print_r($cultures,true)."</pre>";
        // echo "<pre>".print_r($departments,true)."</pre>";
        // echo "<pre>".print_r($managers,true)."</pre>";
        // echo "<pre>".print_r($managerratings,true)."</pre>";
        // echo "<pre>".print_r($role,true)."</pre>";

        ?>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
          <?php echo "<pre>".print_r(getCulturePercentages( 10 ),true)."</pre>"; ?>
          <?php echo "<pre>".print_r(getManagerPercentages( 8 ),true)."</pre>"; ?>
          </div>
        </div>
      </div>
    </div>

<?php include 'partials/footer.php'; ?>
