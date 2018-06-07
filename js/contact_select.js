$(document).ready(function() {
  $('#contactForm')
      .find('[name="partyNo"]')
          
          .change(function(e) {
              /* Revalidate the color when it is changed */
              $('#contactForm').formValidation('revalidateField', 'partyNo');
          })
          .end()
      .find('[name="sail"]')
          .selectpicker()
          .change(function(e) {
              /* Revalidate the language when it is changed */
              $('#contactForm').formValidation('revalidateField', 'sail');
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
            partyNo: {
                  validators: {
                    notEmpty: {
                      message: 'Please select your party size.'
                  }
                      }
                  }
              },
              sail: {
                  validators: {
                      notEmpty: {
                          message: 'Will you join us for the sail?'
                      }
                  }
              }
          }
      );
});