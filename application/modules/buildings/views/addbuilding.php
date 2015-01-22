<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Real Estate</title>

</head>
<body>


<div class="content">
             <form class="form-horizontal group-border-dashed" method="POST"  action ="<?php echo base_url().'buildings/addbuilding'?>" style="border-radius: 0px;">

              <div class="form-group">
                <label class="col-sm-3 control-label">Estate</label>
                <div class="col-sm-6">
                  <select name="estateid" class="form-control" required>
                        <?php echo $estate_types?>
                  </select>									
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                  <input name="buildingname" type="text" class="form-control" placeholder="Enter Building Name" required>
                </div>
              </div>
    
              <div class="form-group">
                <label class="col-sm-3 control-label">Description</label>
                <div class="col-sm-6">
                  <textarea name="buildingdescription" class="form-control" placeholder="Enter Building Description" required></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 control-label">House Type</label>
                <div class="col-sm-6">
                  <select name="housetype" class="form-control" required>
                    <?php echo $house_types?>
                  </select>									
                </div>
              </div>

              <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Complete Registration</button>
                <button type="reset" class="btn btn-default">Reset</button>
              </div>
              </div>

            </form>
          </div>


</body>
</html>