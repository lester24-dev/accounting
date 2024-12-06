<?php
include('../layout/nav_header.php');
error_reporting(0);
$transacRef = $realtimeDatabase->getReference('transaction');
$data1 = $transacRef->orderByChild('vat_reg_tin')->equalTo($_GET['vat_reg_tin'])->getSnapshot();
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-16 grid-margin stretch-card">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <?php 
                        foreach ($data1->getValue() as $key => $item) {
                    ?>
                    <h4 class="card-title"> Name: <?php echo $item['title'] ?></h4>
                    <p class="card-description"> Address: <?php echo $item['address'] ?> </p>
                    <p class="card-description"> Vat Reg Tin: <?php echo $item['vat_reg_tin'] ?> </p>
                    <p class="card-description"> Email Address: <?php echo $item['email'] ?> </p>
                    <p class="card-description"> Contact Number: <?php echo $item['contact'] ?> </p>
                    <p class="card-description"> Year: <?php echo $item['year'] ?> </p>
                    <?php }?>
                    
                    <div class="table-responsive">
                        <table class="table" id="request" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Payors Name</th>
                                    <th>Tin</th>
                                    <th>1st Quarter</th>
                                    <th>2nd Quarter</th>
                                    <th>3rd Quarter</th>
                                    <th>4th Quarter</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                             <tbody>
                                    <?php 
                                    
                                 $itemsRef = $realtimeDatabase->getReference('data')->orderByChild('vat_reg_tin')->equalTo($_GET['vat_reg_tin'])->getSnapshot();
                            foreach ($itemsRef->getValue() as $key => $value) {
                                        ?>
                                        
                                <td><?php echo $value['payors_name']; ?></td>
                                <td><?php echo $value['tin']; ?></td>
                                <td><?php echo '&#8369;', $value['first']; ?></td>
                                <td><?php echo '&#8369;', $value['second']; ?></td>
                                <td><?php echo '&#8369;', $value['third']; ?></td>
                                <td><?php echo '&#8369;', $value['fourth']; ?></td>
                                <td>
                                    <?php
                                     $characters = array(',', '.', ' ');
                                     $cleaned_number_first = str_replace($characters, '', $value['first']);
                                     $cleaned_number_second = str_replace($characters, '', $value['second']);
                                     $cleaned_number_third = str_replace($characters, '', $value['third']);
                                     $cleaned_number_fourth = str_replace($characters, '', $value['fourth']);
                                     $sum =  $cleaned_number_first + $cleaned_number_second + $cleaned_number_third + $cleaned_number_fourth;
                                     $total =  $sum / 100;
                                     echo '&#8369;'.number_format($total, 2, '.', ','); 
                                    ?>
                                </td>
                        <?php

                                    $characters = array(',', '.', ' ');
                                    $cleaned_number_first = str_replace($characters, '', $value['first']);
                                    $cleaned_number_second = str_replace($characters, '', $value['second']);
                                    $cleaned_number_third = str_replace($characters, '', $value['third']);
                                    $cleaned_number_fourth = str_replace($characters, '', $value['fourth']);
                                    $sum =  $cleaned_number_first + $cleaned_number_second + $cleaned_number_third + $cleaned_number_fourth;
                                    $total =  $sum / 100;
                                    $tftotal = 0; $first = 0; $second = 0; $third = 0; $fourth = 0;
                                    $tftotal += $total;
                                    $first += $cleaned_number_first / 100;
                                    $second += $cleaned_number_second / 100;
                                    $third += $cleaned_number_third / 100;
                                    $fourth += $cleaned_number_fourth / 100;
                            }
                            ?>
                           </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td><?php echo '&#8369;'.number_format($first, 2, '.', ','); ?></td>
                                    <td><?php echo '&#8369;'.number_format($second, 2, '.', ','); ?></td>
                                    <td><?php echo '&#8369;'.number_format($third, 2, '.', ','); ?></td>
                                    <td><?php echo '&#8369;'.number_format($fourth, 2, '.', ','); ?></td>
                                    <td><?php echo '&#8369;'.number_format($tftotal, 2, '.', ','); ?></td>
                                </tr>
                            </tfoot>

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
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>