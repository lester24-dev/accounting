<?php
include('../layout/admin_nav_header.php');
error_reporting(0);
?>

<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-16 grid-margin stretch-card">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <h4 class="card-title">Cash Flow Statement</h4>
                  <p class="card-description">
                  <a href="cash_flow_statement_pdf" class="btn btn-danger">PDF</a>
                 
                  </p>
                  <div class="table-responsive">
                    <table class="table" id="request" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Year</th>
                          <th>Created At</th>
                          <th>Client</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                          $stmt = $dbh->query("SELECT * FROM `cash-flow-statement`");
                          
                          // Loop through the items to find the one with the matching name
                          foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $itemKey => $fetch) {

                            $userRef = $dbh->query("SELECT * FROM users WHERE id = '".$fetch['customer_id']."'");
                            $row_depts = $userRef->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <tr>
                          <td><?php echo $fetch['title']; ?></td>
                          <td><?php echo $fetch['year']; ?></td>
                          <td><?php echo $fetch['timestamp']; ?></td>
                          <td><?php echo $row_depts['name']; ?></td>
                          <td><?php echo $fetch['status']; ?></td>
                          <td>
                            <?php 
                            if ($fetch['status'] == 'Pending') {
                              ?>
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#approvedModal<?php echo $fetch['transaction_id']; ?>">Approved</button>
                            <?php
                            }
                            ?>
                          <a href="cash-flow-statement-data?transaction_id=<?php echo $fetch['transaction_id']; ?>&customer_id=<?php echo $row_depts['id'] ?>" class="btn btn-info">View</a>
                          </td>
                        </tr>


                        <div class="modal fade" id="approvedModal<?php echo $fetch['transaction_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Transaction Info</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Are you sure you want to approved this transaction ?</p>
                                        <form action="../db/firebaseDB" method="GET" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" name="transaction_id" value="<?php echo $fetch['transaction_id']?>">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="update_status_cash">Approved</button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                     <?php   }?>
                        
                          
                    </tbody>
                    </table>

                        <script>
                            $(document).ready(function() {
                                $('#request').DataTable({
                                  ordering: false
                                 });
                            });
                        </script>
                </div>
              </div>
            </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>