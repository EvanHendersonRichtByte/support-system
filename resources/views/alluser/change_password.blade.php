@extends('layout.user_master')

@section('body')
<div class="clearfix form-horizontal">
    <div class="row">
        <div class="col-md-12">
            <?php if (empty($is_skip_old_pass)) { ?>
                <div class="form-group">
                    <label class="control-label col-md-4" for="old_password">Old Password</label>
                    <div class="col-md-8">
                        <input type="password" maxlength="250" autocomplete="off" value="" class="form-control" id="old_password" name="old_password" placeholder="Old Password" data-bv-notempty="true" data-bv-notempty-message="%s is required">
                    </div>
                </div>
            <?php } ?>
            <div class="form-group">
                <label class="control-label col-md-4" for="password">New Password</label>
                <div class="col-md-8">
                    <input type="password" maxlength="250" autocomplete="off" class="form-control" id="password" name="password" placeholder="New Password" data-bv-notempty="true" data-bv-notempty-message="%s is required" data-bv-field="password">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-4" for="cpass">Confirm Password</label>
                <div class="col-md-8">
                    <input type="password" name="cpass" id="cpass" data-bv-field="cpassword" value="" maxlength="250" autocomplete="off" class="form-control" placeholder="Change Password" data-bv-identical="true" data-bv-identical-field="password" data-bv-field="password" data-bv-notempty="true" data-bv-identical-message="%s is not same" data-bv-notempty-message="%s is required">
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row btn-group-md popup-footer text-right">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i> Save
    </button>
    <button type="button" class="close-pop-up btn  btn-danger">
        <i class="fa fa-times"></i> Cancel</button>
</div>
@endsection