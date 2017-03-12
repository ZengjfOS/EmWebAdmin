<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row">
    <h1>Network Settings:</h1>
    <div class="col-md-8 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
          <br />
          <p>
            DHCP: <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> 
            Static: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
          </p>
          <div>
            <form class="form-horizontal form-label-left" novalidate>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">IP:</label>
                <div class="col-md-3 col-sm-9 col-xs-9 ">
                  <input type="text" class="form-control" style="text-align:center; font-size:16px" data-inputmask="'mask': '(9{1,3}.){3}9{1,3}'" data-validate-length-range="7,15" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Mask:</label>
                <div class="col-md-3 col-sm-9 col-xs-9 ">
                  <input type="text" class="form-control" style="text-align:center; font-size:16px" data-inputmask="'mask': '(9{1,3}.){3}9{1,3}'"  data-validate-length-range="7,15" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3"> Boardcast:</label>
                <div class="col-md-3 col-sm-9 col-xs-9 ">
                  <input type="text" class="form-control" style="text-align:center; font-size:16px" data-inputmask="'mask': '(9{1,3}.){3}9{1,3}'"  data-validate-length-range="7,15" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3"> Gateway:</label>
                <div class="col-md-3 col-sm-9 col-xs-9 ">
                  <input type="text" class="form-control" style="text-align:center; font-size:16px" data-inputmask="'mask': '(9{1,3}.){3}9{1,3}'"  data-validate-length-range="7,15" required="required">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-3 col-xs-3"></label>
                <button type="button" class="btn btn-primary">Set Static Network Settings </button>
              </div>
            </form>
          </div>
          <br>
          <br>
          <hr>
          <h4>Test Network Status:</h4>
          <form class="form-horizontal form-label-left">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-3"> Ping IP:</label>
              <div class="col-md-5 col-sm-9 col-xs-9 ">
                <input type="text" class="form-control" style="text-align:center; font-size:16px" data-inputmask="'mask': '(9{1,3}.){3}9{1,3}'">
              </div>
              <button type="button" class="col-md-2 col-sm-3 col-xs-3 btn btn-primary">Ping </button>
            </div>
          </form>
        </div>
      </div>
      <div>
      </div>
    </div>
  </div>
</div>
<!-- /page content --> 
