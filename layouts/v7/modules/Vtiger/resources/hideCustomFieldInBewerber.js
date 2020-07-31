$(document).ready(function () {
  // on change of your SELECT ELEMENT
  $(document).on("change", 'select[data-fieldname="cf_1066"]', function (e) {
    // get the value of your target SELECT ELEMENT
    selectElement = $('select[data-fieldname="cf_1066"]').val();

    // uncomment this for to see SELECT ELEMENT value
    // alert("Select element value: " + selectElement);

    // put some condition here ...
    if (
      selectElement == "Andere Leadquelle" ||
      selectElement == "Other Source"
    ) {
      //-------
      // target all INPUT ELEMENTs to show
      inputElementsToShow = [
        $("input[id='Potentials_editView_fieldName_cf_1068']"),
        // $("input[id='SalesOrder_editView_fieldName_cf_884']"),
      ];

      // show all targetted INPUT ELEMENT
      $.each(inputElementsToShow, function (index, value) {
        // is input
        // if (value.is("input") || value.is("textarea")) {
        // show the element container
        value.closest("td").prev().show();
        value.closest("td").show();

        // enable the INPUT element
        /*value.prev().prop('disabled', false);
                             value.prop('disabled', false);*/
        // }
      });

      // show BLOCK
      $("div[data-block='Sample Block']").show();
    } else {
      // target all INPUT ELEMENTs to hide
      inputElementsToHide = [
        $("input[id='Potentials_editView_fieldName_cf_1068']"),
        // $("input[id='SalesOrder_editView_fieldName_cf_884']"),
      ];

      // hide all targetted INPUT ELEMENT
      $.each(inputElementsToHide, function (index, value) {
        // check if ELEMENT is an INPUT or TEXTAREA
        // if (value.is("input") || value.is("textarea")) {
        // hide the element container
        value.closest("td").prev().hide();
        value.closest("td").hide();

        // only disable the INPUT element
        /*value.prev().prop('disabled', true);
	    	 		value.prop('disabled', true);*/
        // }
      });

      // hide BLOCK
      $("div[data-block='Sample Block']").hide();
    }
  });
});
