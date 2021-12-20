<html>
  <head>
    <title>Interner Bereich</title>
		<link
    href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    rel="stylesheet"
  />
    <script src="/scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="/scripts/intern.js" type="text/javascript"></script> 
    </head>
    <body>
      <div class="container"> 
      <?php
        $username = $_GET['username'];
        $groupId = $_GET['GroupId'];

        if($username != null && $groupId != null){

            
        ?>

        <a href="/index.html" class="backLink">Bacck</a>
        <table class="table table-bordered table-striped" id="userTable">
        <thead>
          <tr class="text-center bg-info text-light">
            <th width="5%">Index</th>
            <th width="20%">Name</th>
            <th width="30%">Email</th>
            <th width="20%">Credit Card</th>
            <th width="20%">CVV</th>
          </tr>
        </thead>
        <tbody></tbody>
      	</table>
          <?php 
            } else { ?>
            <div class="error">
              <p>unauthorized</P>
            </div>
                
          <?php
            }
          ?>
    </div>
  	</body>
</html>