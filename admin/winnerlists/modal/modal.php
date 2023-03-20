<!-- Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"> ADD PLAYER</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" method="POST" action="machines/function.php"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                          <div class="col-12">
                            <label for="User_Id" class="col-sm-12 control-label">Email</label>
                            <input type="Email" class="form-control" name="Email"  required  placeholder="Email">
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-save"></i> Submit</button> 
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Add -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"> EDIT PLAYER</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" method="POST" action="machines/function.php"  enctype="multipart/form-data">
                <div class="modal-body">
                     <div class="row">
                          <div class="col-12">
                            <label for="User_Id" class="col-sm-12 control-label">EMAIL</label>
                            <input type="text" class="form-control" name="Email" id="Prizename" required  placeholder="Prize Name">
                             <input type="text" class="form-control" name="Id" id="Id" hidden >

                          </div>
                          <div class="col-12">
                            <label for="Lastname" class="col-sm-12 control-label">WINNER</label>
                            <input type="tel" class="form-control" name="Winner"  id="Percentage"  required onchange="this.value = parseDouble(this.value);" placeholder="Percentage">
                          </div>
                         
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-save"></i>Update</button> 
                </div>
            </form>
        </div>
    </div>
</div>







<!-- Add -->
<div class="modal fade" id="reset">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Message</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" method="POST" action="machines/function.php"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                          <div class="col-12"><center>
                            <label for="User_Id" class="col-sm-12 control-label">Are you sure? you want to reset?</label>
                            </center>
                            
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-success btn-flat" name="reset"><i class="fa fa-save"></i> Reset</button> 
                </div>
            </form>
        </div>
    </div>
</div>

