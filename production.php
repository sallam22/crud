 




                    
        

<?php include "pfunction.php" ;?>
<?php createRows(); ?>
<?php include "include/header.php" ?>










<div style="background-color: darkcyan;"  class="page-wrapper bg-dark p-t-100 p-b-50">
        <div  class="wrapper wrapper--w900">
            <div  class="card card-6">
                <div  class="card-heading">
                    <h2   style="background-color: darkcyan;" class="title">Daily production </h2>
                </div>
                <div  class="card-body">
                    <form  method="POST" >

                            







                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="order_customer_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Item</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="order_item" >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">NumberofItem</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6"  type="text" name="order_value" placeholder="">
                                     
                                </div>
                            </div>
                        </div>
                        



                                <div class="form-row">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input  class="input--style-6" type="date" name="order_date" placeholder="">
                                     
                                </div>
                            </div>
                                </div>
                        


                          


                                 

                        




                        
                            
                        <br>
                          <input style="background-color:green ;" class="btn btn-primary" type="submit" name="submit" 
                          value="CREATE">



                    </form>



                    
        
                </div>
            </div>
        </div>
    </div>
    <?php include "include/footer.php"?>