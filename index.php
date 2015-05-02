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

        $pdo = new PDO('mysql:host=localhost;dbname=hack24', 'root', '9ZfsGrdn6N');
        $statement = $pdo->query("SELECT * FROM User_data");
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);

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
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>USER_ID</th>
                  <th>USERNAME</th>
                  <th>PASSWORD</th>
                  <th>EMAIL</th>
                  <th>SECURITY_Q</th>
                  <th>SECURITY_A</th>
                  <th>AGE</th>
                  <th>GENDER</th>
                  <th>LGBT</th>
                  <th>FAMILY_STATUS</th>
                  <th>ETHNICITY</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($row as $user): ?>
                <tr>
                    <td><?php echo $user['user_id'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['security_q'] ?></td>
                    <td><?php echo $user['security_a'] ?></td>
                    <td><?php echo $user['age'] ?></td>
                    <td><?php echo $user['lgbt'] ?></td>
                    <td><?php echo $user['family_status'] ?></td>
                    <td><?php echo $user['ethnicity'] ?></td>
                </tr>
              <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php include 'partials/footer.php'; ?>
