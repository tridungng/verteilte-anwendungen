<html>
    <head>
        <title>Interner Bereich</title>
        <script src="/scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="/scripts/intern.js" type="text/javascript"></script>
        <link
    href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    rel="stylesheet"
  />
    </head>
    <body>
        <div class="container"> 
        <?php
            $username = $_GET['username'];
            $groupId = $_GET['GroupId'];

            if($username != null && $groupId != null){

            
        ?>
					<script type="text/javascript">
						setTimeout(function () {
              alert('Well done! You just successfully finished our Challenge 1!');
            }, 1000);
					</script>
					<a href="/index.html" class="backLink">Back</a>
					<h1 class="text-center" style="padding: 20px 0px 20px 0px">Customer database</h1>
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