<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
<!-- datetimepicker -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script> -->

<!-- end links datetimepicker -->
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap-theme.css" media="screen" title="no title" charset="utf-8"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8"> -->

    <script src="javascript/jquery.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.js" charset="utf-8"></script>
    <script src="bootstrap/js/tooltip.js" charset="utf-8"></script>
    <script src="bootstrap/js/tab.js" charset="utf-8"></script>
    <script src="javascript/custom.js" charset="utf-8"></script>
    <style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#dateRangeForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>
  </head>
  <body>
    <div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-comment"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Step 1</h3>
                        <div class="col-xs-7">
                      	<div class="row">
                      				<form>

                      					<div class="col-sm-12">

                      						<div class="row">
                                    <h4 >My name is</h4>
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="First Name ... " class="form-control">
                      							</div>
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="Last Name ... " class="form-control">
                      							</div>
                      						</div>
                                  <div class="row">
                                    <h4>Currently I Live in</h4>
                                    <div class="col-sm-4 form-group">
                                    <input type="text" placeholder="City.." class="form-control">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                      <input type="text" placeholder="Country.." class="form-control">
                                    </div>
                                  </div>

                      						<div class="row">
                                    <h4 >I was born In</h4>
                                  	<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="DD/MM/YYYY" class="form-control">
                      							</div>
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="Country(choosen)" class="form-control">
                      							</div>
                      						</div>

                      						<div class="row">
                                    	<h4>I speak</h4>
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="Language" class="form-control">
                      							</div>
                      							<div class="col-sm-4 form-group">
                      								<input type="text" placeholder="Level" class="form-control">
                      							</div>
                      						</div>
                                  <div class="row">
                                    <div class="col-sm-4 form-group">
                                      <input type="text" placeholder="Language" class="form-control">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                      <input type="text" placeholder="Level" class="form-control">
                                    </div>
                                  </div>


                      					</div>
                      				</form>
                      				</div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-primary next-step">Save and Next</button></li>
                              </ul>
                      	</div>

                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Add Your Skills</h3>
                        <div class="container">
      <div class="row">
          <div class="col-xs-6">
      	<form class="regform">
    			<div class="form-group multiple-form-group">
  				<label>Multiple textareas</label>

  				<div class="form-group input-group">
  					<textarea name="multiple[]" class="form-control" rows="3"></textarea>
  						<span class="input-group-btn"><button type="button" class="btn btn-default btn-add">+
  						</button></span>
  				</div>
  			</div>
  		</form>
      <ul class="list-inline pull-right">
          <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
          <li><button type="button" class="btn btn-primary next-step">Save and Next</button></li>
      </ul>
      	</div>

  	</div>

  </div>

                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Preference</h3>
                        <div class="container">
      <div class="row">
          <div class="col-ls-6">
                        <form class="form-horizontal">
                    <fieldset>

                            
                  <!-- Multiple Checkboxes -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="checkboxes">I am interested in</label>
                      <div class="col-md-6">
                      <div class="checkbox">
                        <label for="checkboxes-1">
                          <input name="intership" id="checkboxes-1" value="1" type="checkbox">
                          Internship
                        </label>
                        <label for="checkboxes-2">
                          <input name="work" id="checkboxes-2" value="2" type="checkbox">
                          Work
                        </label>
                    	</div>
                      <div class="checkbox">
                        <label for="checkboxes-3">
                          <input name="parttime" id="checkboxes-3" value="3" type="checkbox">
                          Part Time
                        </label>
                        <label for="checkboxes-4">
                          <input name="full time" id="checkboxes-4" value="4" type="checkbox">
                          Full Time
                        </label>
                    	</div>

                      </div>
                    </div>
                        <!-- checkbox section 2 -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="checkboxes">Ready to move</label>
                          <div class="col-md-4">
                          <div class="checkbox">
                            <label for="checkboxes-0">
                              <input name="inside" id="checkboxes-5" value="1" type="checkbox">
                              Inside the Country
                            </label>
                            <label for="checkboxes-0">
                              <input name="internationaly" id="checkboxes-6" value="2" type="checkbox">
                              Internationaly
                            </label>
                            <label for="checkboxes-0">
                              <input name="Local" id="checkboxes-7" value="3" type="checkbox">
                              No
                            </label>
                          </div>


                          </div>
                        </div>

                        <!-- Section 3 -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="checkboxes">Ready to Start</label>
                          <div class="col-md-4">
                          <div class="checkbox">
                            <label for="checkboxes-9">
                              <input name="now" id="checkboxes-9" value="9" type="checkbox">
                              Now
                            </label>
                            <label> Or From </label>

                              <input type="date" name="name" value="" placeholder="DD/MM/YYYY">

                          </div>
<br>
<br>
                          <ul class="list-inline pull-right">
                              <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                              <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and Next</button></li>
                          </ul>
                          </div>

                        </div>

                    </fieldset>

                    </form>

                  </div>

                </div>
              </div>

                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

        </div>
    </section>
   </div>
</div>
  </body>

</html>
