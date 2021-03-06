<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
    <script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8"> -->

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.js" charset="utf-8"></script>
  
    <style type="text/css">
    .bootstrap-tagsinput {
        width: 100%;
    }
    .label {
        line-height: 2 !important;
    }
    </style>
  </head>
  <body>



<form id="bootstrapTagsInputForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Cities</label>
        <div class="col-xs-8">
            <input type="text" name="cities" class="form-control"
                   value="Hanoi" data-role="tagsinput" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Countries</label>
        <div class="col-xs-8">
            <input type="text" name="countries" class="form-control"
                   value="Vietnam" data-role="tagsinput" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-3">
            <button type="submit" class="btn btn-default">Validate</button>
        </div>
    </div>
</form>

<script>
$(document).ready(function () {
    $('#bootstrapTagsInputForm')
        .find('[name="cities"]')
            // Revalidate the cities field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'cities');
            })
            .end()
        .find('[name="countries"]')
            // Revalidate the countries field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'countries');
            })
            .end()
        .formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                cities: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter at least one city you like the most.'
                        }
                    }
                },
                countries: {
                    validators: {
                        callback: {
                            message: 'Please enter 2-4 countries you like most.',
                            callback: function (value, validator, $field) {
                                // Get the entered elements
                                var options = validator.getFieldElements('countries').tagsinput('items');
                                return (options !== null && options.length >= 2 && options.length <= 4);
                            }
                        }
                    }
                }
            }
        });
});
</script>


  </body>
</html>
