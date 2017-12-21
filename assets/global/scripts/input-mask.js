 var FormInputMask = function () {
    
    var handleInputMasks = function () {
		$(".number").inputmask({
			 radixPoint: ',',
			'alias': 'decimal',
			digits: 2,
            rightAlign: true,
			'groupSeparator': '.',
			placeholder: '0',
			'autoGroup': true,
			allowMinus: false
        });
		$(".berat").inputmask({
			 radixPoint: ',',
			'alias': 'decimal',
			digits: 3,
            rightAlign: true,
			'groupSeparator': '.',
			placeholder: '0',
			'autoGroup': true,
			allowMinus: false
        });
		$(".integer").inputmask({
			 radixPoint: ',',
			'alias': 'decimal',
			digits: 0,
            rightAlign: true,
			'groupSeparator': '.',
			placeholder: '0',
			'autoGroup': true,
			allowMinus: false
        });
	}
	
	return {
        //main function to initiate the module
        init: function () {
            handleInputMasks();
        }
    };
 }();
 
 if (App.isAngularJsApp() === false) { 
    jQuery(document).ready(function() {
        FormInputMask.init(); // init metronic core componets
    });
}