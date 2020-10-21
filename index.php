<!-- /top navigation -->
<!-- <?php include "header.php"; ?> -->
<!-- page content -->
<div class="right_col" role="main">
  <div class="">


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">

          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">


                <table id="somId" class="display" style="width:100%">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for ($i = 0; $i < 100; $i++) {
                    ?>
                      <tr>
                        <td>Tiger Nixon <?php echo  $i++ ?></td>
                        <td>System Architect <?php echo $i++ ?></td>
                        <td>Edinburgh <?php echo $i++ ?></td>
                        <td>61 <?php echo  $i++ ?></td>
                        <td>2011/04/25 <?php echo $i++ ?></td>
                        <td>$320,800 <?php echo $i++ ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





  </div>
</div>
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#somId').DataTable();
  });
</script>

</html>