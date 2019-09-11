$('#step3_select2').prepend('<option selected="selected" disabled>לחץ</option>');
$('select[name="step1_select1"]').prepend('<option selected="selected" disabled>לחץ</option>');
//$('select[name="step3_select1"]').prepend('<option selected="selected" disabled>בחר בית משפט</option>');
var submitCallback = function(data, form) { // function for submit execution
	// data - inputs values data object
	// form - form DOM element
	//console.log(data);
	//console.log(form);
	return true; // true - execute reload. For execute sending without ajax change to return "submit"
};


/* global variables */

var stepControl = null; // object with current step DOM element and attached data
var allSteps = []; // all steps DOM elements and attached data
var pagesSp = $(".step-page"); // single step page blocks
var btnPrev = $("#step_prev");
var btnNext = $("#step_next");
var btnSubmit = $("#sp_btn_submit");

var forms_settings = null; // current form settings
var resultSp = []; // input value results

/* forms settings */

/* if(form id)
 * form setting: step(obj:class name): name(string:class name)
 *								validation_rules(obj): input_name(regular expression for validation)
 *								radio_btn_comb(string:initial combination of radio buttons. It is combination of checked values from up to down in code. It uses for hidding parts of HTML. Value must to contain only one symbol. In hidding participate radio buttons that have class 'lead_radio')
 *								hidding_rules(obj): radio_buttons_combination(array:string of numbers to show. Each HTML tag that have attribute 'data-step-row' and its value not match one of number in current array will be hidden.)
 *								clone_form(boolean: if true - it run functionality of adding many of the same form datas. Button for saving entered data and adding new empty form to enter new data must have class'pls_btn'. It show entered data in tag with class 'info-box'. It clone initial HTML of form that have class 'form_box' for adding new form.)
 *								broken_step(boolean: this step not have the label in the upper part of the form with step number. Its step number label is the same as the label of the previous step)
 *				form_name(form id) */

// first form
if($("#first_form").length) {
	forms_settings = {
		steps: {
			step_1: {
				name: "step_1",
				btn_next: "המשך לפרטי הנתבע",
				part_name: "תובע",
				person_title: "אנא מלאו את פרטי התובע הנוסף",
				validation_rules: {
					"client_passport[]": /^[0-9]{9}$/,
					"client_first_name[]": /^[\s|\u0590-\u05FF]+$/,
					"client_last_name[]": /^[\s|\u0590-\u05FF]+$/,
					"client_city[]": /^[\s|\u0590-\u05FF]+$/,
					"client_street[]": /^[\s|\u0590-\u05FF]+$/,
					"client_numb_house[]": /^[0-9]+$/,
					"client_numb_flour[]": /^[0-9]+$/,
					"client_index[]": /^[0-9]{5}$|^[0-9]{7}$/,
					"client_phone[]": /^[0-9]{9,10}$/,
					"client_fax[]": /^[0-9]{9}$/,
					"client_second_phone[]": /^[0-9]{9,10}$/,
					"client_email[]": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				},
				clone_form: true
			},
			step_2: {
				name: "step_2",
				btn_next: "המשך לתיאור האירוע והנזק",
				part_name: "נתבע",
				validation_rules: {
					"passport[]": /^[0-9]{9}$/,
					"first_name[]": /^[\s|\u0590-\u05FF]+$/,
					"last_name[]": /^[\s|\u0590-\u05FF]+$/,
					"city[]": /^[\s|\u0590-\u05FF]+$/,
					"street[]": /^[\s|\u0590-\u05FF]+$/,
					"numb_house[]": /^[0-9]+$/,
					"numb_flour[]": /^[0-9]+$/,
					"index[]": /^[0-9]{5}$|^[0-9]{7}$/,
					"phone[]": /^[0-9]{9,10}$/,
					"fax[]": /^[0-9]{9}$/,
					"second_phone[]": /^[0-9]{9,10}$/,
					"email[]": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				},
				broken_step: true,
				clone_form: true,
				radio_btn_comb: "0",
				hidding_rules: {
					"0": ["3"],
					"1": ["5"],
					"2": ["6"]
				}
			},
			step_3: {
				name: "step_3",
				btn_next: "המשך להגשת תביעה",
				validation_rules: {
				}
			},
			step_4: {
				name: "step_4",
				validation_rules: {
				}
			}
		},
		price_count: {
			/* formulas for summ calculation 
			 * "input attribute data-tax-summ identifier number": 
			 * "attribute data-tax identifier number + attribute data-tax identifier number"
			 * or other calculation formula (+, -, *, /) */
			 "1": "2+3",
			 "2": "2+3",
			 "3": function(key) {
			 	var target = $("[data-tax-summ='" + key + "']")[0];
			 	function calc() {
			 		var operand1 = +$("[data-tax='6']").val();
			 		operand1 = operand1 / 100;
			 		operand1 = +operand1.toFixed(2);
			 		if(operand1 < 50) operand1 = 50;
			 		$(target).text(operand1);
			 	}
			 	calc();
			 	var element1 = $("[data-tax='6']")[0];
			 	element1.addEventListener("change", calc);
			 },
			 "4": function(key) {
			 	var target = $("[data-tax-summ='" + key + "']")[0];
			 	function calc() {
			 		var operand1 = +$("[data-tax='6']").val();
			 		var operand2 = +$("[data-tax='1']").find("option:selected").attr("data-select-price");
			 		operand1 = operand1 / 100;
			 		operand1 = +operand1.toFixed(2);
			 		if(operand1 < 50) operand1 = 50;
			 		$(target).text(operand1 + operand2);
			 	}
			 	calc();
			 	var element1 = $("[data-tax='6']")[0];
			 	element1.addEventListener("change", calc);
			 	var element2 = $("[data-tax='1']")[0];
			 	element2.addEventListener("change", calc);
			 }
			},
			price_get: {
				"1": "1",
				"2": "2",
				"3": "3"
			},
			form_name: "first_form"
		};
	}

// second form
if($("#spam_form").length) {
	forms_settings = {
		steps: {
			step_1: {
				name: "step_1",
				btn_next: "המשך לפרטי הנתבע",
				part_name: "תובע",
				person_title: "אנא מלאו את פרטי התובע הנוסף",
				validation_rules: {
					"client_passport[]": /^[0-9]{9}$/,
					"client_first_name[]": /^[\s|\u0590-\u05FF]+$/,
					"client_last_name[]": /^[\s|\u0590-\u05FF]+$/,
					"client_city[]": /^[\s|\u0590-\u05FF]+$/,
					"client_street[]": /^[\s|\u0590-\u05FF]+$/,
					"client_numb_house[]": /^[0-9]+$/,
					"client_numb_flour[]": /^[0-9]+$/,
					"client_index[]": /^[0-9]{5}$|^[0-9]{7}$/,
					"client_phone[]": /^[0-9]{9,10}$/,
					"client_fax[]": /^[0-9]{9}$/,
					"client_second_phone[]": /^[0-9]{9,10}$/,
					"client_email[]": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				},
				clone_form: true
			},
			step_2: {
				name: "step_2",
				btn_next: "המשך לתיאור האירוע והנזק",
				part_name: "נתבע",
				person_title: "אנא מלאו את פרטי הנתבע הנוסף",
				validation_rules: {
					"passport[]": /^[0-9]{9}$/,
					"first_name[]": /^[\s|\u0590-\u05FF]+$/,
					"last_name[]": /^[\s|\u0590-\u05FF]+$/,
					"city[]": /^[\s|\u0590-\u05FF]+$/,
					"street[]": /^[\s|\u0590-\u05FF]+$/,
					"numb_house[]": /^[0-9]+$/,
					"numb_flour[]": /^[0-9]+$/,
					"index[]": /^[0-9]{5}$|^[0-9]{7}$/,
					"phone[]": /^[0-9]{9,10}$/,
					"fax[]": /^[0-9]{9}$/,
					"second_phone[]": /^[0-9]{9,10}$/,
					"email[]": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				},
				broken_step: true,
				clone_form: true,
				radio_btn_comb: "00",
				hidding_rules: {
					"00": ["1", "3", "4"],
					"01": ["1", "5"],
					"02": ["1", "6"],
					"10": ["2", "3", "4"],
					"11": ["2", "5"],
					"12": ["2", "6"]
				}
			},
			step_3: {
				name: "step_3",
				btn_next: "המשך להגשת תביעה",
				validation_rules: {
				},
				radio_btn_comb: "111",
				hidding_rules: {
					"111": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "14", "16", "17", "18", "20","21"],
					"110": ["1", "2", "3", "4", "5", "6", "7", "8", "9", "14", "16", "17", "18", "20","21"],
					"101": ["1", "2", "3", "4", "5", "6","19" /*"15", "16", "17", "18", "20", "19"*/],
					"100": ["1", "2", "3", "4", "5", "6","19"/*, "15", "16", "17", "18", "20","19"*/],
					"010": ["1", "2", "3", "4", "6", "7", "8", "9", "15", "16", "17", "18", "20","21"],
					"011": ["1", "2", "3", "4", "6", "7", "8", "9", "10", "11", "15", "16", "17", "18", "20","21"],
					"001": ["1", "2", "3", "4", "6", "15", "16", "17", "18", "20","21"],
					"000": ["1", "2", "3", "4", "6", "15", "16", "17", "18", "20","21"]
				}
			},
			step_4: {
				name: "step_4",
				validation_rules: {
				}
			}
		},
		price_count: {
			/* formulas for summ calculation 
			 * "input attribute data-tax-summ identifier number": 
			 * "attribute data-tax identifier number + attribute data-tax identifier number"
			 * or other calculation formula (+, -, *, /) */
			 "1": function(key) {
			 	var target = $("[data-tax-summ='" + key + "']")[0];
			 	function calc() {
			 		var operand1 = +$("[data-tax='6']").val();
			 		var operand2 = +$("[data-tax='7']").find("option:selected").attr("data-select-price");
			 		operand1 = operand1 / 100;
			 		operand1 = +operand1.toFixed(2);
			 		if(operand1 < 50) operand1 = 50;
			 		$(target).text(operand1 + operand2);
			 	}
			 	calc();
			 	var element1 = $("[data-tax='6']")[0];
			 	element1.addEventListener("change", calc);
			 	var element2 = $("[data-tax='7']")[0];
			 	element2.addEventListener("change", calc);
			 },
			 "2": function(key) {
			 	var target = $("[data-tax-summ='" + key + "']")[0];
			 	function calc() {
			 		var operand1 = +$("[data-tax='3']").val();
			 		console.log(operand1);
			 		var operand2 = +$("[data-tax='4']").attr("data-tax-price");
			 		console.log(operand2);
					//var operand3 = +$("[data-tax='9']").val();
					//console.log(operand3);
					var operand4 = operand1;
					console.log(operand4);
					$(target).val(operand2 * operand4);
				}
				calc();
				var element1 = $("[data-tax='3']")[0];
				element1.addEventListener("change", calc);
				//var element2 = $("[data-tax='9']")[0];
				//element2.addEventListener("change", calc);
			},
			"3": function(key) {
				var target = $("[data-tax-summ='" + key + "']")[0];
				function calc() {
					var operand1 = +$("[data-tax='3']").val();
					var operand2 = +$("[data-tax='4']").attr("data-tax-price");
					//var operand3 = +$("[data-tax='9']").val();
					var operand4 = operand1;
					var operand5 = +$("[data-tax='5']").val();
					$(target).val(operand2 * operand4 + operand5);
				}
				calc();
				var element1 = $("[data-tax='3']")[0];
				element1.addEventListener("change", calc);
				//var element2 = $("[data-tax='9']")[0];
				//element2.addEventListener("change", calc);
				var element3 = $("[data-tax='5']")[0];
				element3.addEventListener("change", calc);
			},
			"4": function(key) {
				var target = $("[data-tax-summ='" + key + "']")[0];
				function calc() {
					var operand1 = +$("[data-tax='6']").val();
					operand1 = operand1 / 100;
					operand1 = +operand1.toFixed(2);
					if(operand1 < 50) operand1 = 50;
					$(target).text(operand1);
				}
				calc();
				var element1 = $("[data-tax='6']")[0];
				element1.addEventListener("change", calc);
			}
		},
		price_get: {
			"1": "1"
		},
		form_name: "spam_form"
	};
}


// third form
if($("#sp_third_form").length) {
	forms_settings = {
		steps: {
			step_1: {
				name: "step_1",
				btn_next: "המשך להגשת כתב הגנה",
				validation_rules: {
					"step1_input1": /^[0-9\-]+$/
				}
			},
			step_2: {
				name: "step_2",
				btn_next: "המשך לפרטי התובע",
				part_name: "נתבע",
				validation_rules: {
					"passport[]": /^[0-9]{9}$/,
					"first_name[]": /^[\s|\u0590-\u05FF]+$/,
					"last_name[]": /^[\s|\u0590-\u05FF]+$/,
					"city[]": /^[\s|\u0590-\u05FF]+$/,
					"street[]": /^[\s|\u0590-\u05FF]+$/,
					"numb_house[]": /^[0-9]+$/,
					"numb_flour[]": /^[0-9]+$/,
					"index[]": /^[0-9]{5}$|^[0-9]{7}$/,
					"phone[]": /^[0-9]{9,10}$/,
					"fax[]": /^[0-9]{9}$/,
					"second_phone[]": /^[0-9]{9,10}$/,
					"email[]": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				},
				clone_form: true,
				radio_btn_comb: "0",
				hidding_rules: {
					"0": ["1", "2"],
					"1": ["3"],
					"2": ["4"]
				}
			},
			step_3: {
				name: "step_3",
				btn_next: "המשך להגשת כתב הגנה",
				part_name: "תובע",
				person_title: "אנא מלאו את פרטי התובע הנוסף",
				broken_step: true,
				validation_rules: {
					"client_passport[]": /^[0-9]{9}$/,
					"client_first_name[]": /^[\s|\u0590-\u05FF]+$/,
					"client_last_name[]": /^[\s|\u0590-\u05FF]+$/,
					"client_city[]": /^[\s|\u0590-\u05FF]+$/,
					"client_street[]": /^[\s|\u0590-\u05FF]+$/,
					"client_numb_house[]": /^[0-9]+$/,
					"client_numb_flour[]": /^[0-9]+$/,
					"client_index[]": /^[0-9]{5}$|^[0-9]{7}$/,
					"client_phone[]": /^[0-9]{9,10}$/,
					"client_fax[]": /^[0-9]{9}$/,
					"client_second_phone[]": /^[0-9]{9,10}$/,
					"client_email[]": /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
				},
				clone_form: true
			},
			step_4: {
				name: "step_4",
				btn_next: "המשך להגשת כתב הגנה",
				validation_rules: {
				}
			},
			step_5: {
				name: "step_5",
				validation_rules: {
				}
			}
		},
		price_count: {
			"2": function(key) {
				var target = $("[data-tax-summ='" + key + "']")[0];
				function calc() {
					var operand1 = +$("[data-tax='3']").val();
					operand1 = operand1 / 100;
					operand1 = +operand1.toFixed(2);
					if(operand1 < 50) operand1 = 50;
					$(target).text(operand1);
				}
				calc();
				var element1 = $("[data-tax='3']")[0];
				element1.addEventListener("change", calc);
			},
			"1": function(key) {
				var target = $("[data-tax-summ='" + key + "']")[0];
				function calc() {
					var operand1 = +$("[data-tax='3']").val();
					var operand2 = +$("[data-tax='1']").text();
					operand1 = operand1 / 100;
					operand1 = +operand1.toFixed(2);
					if(operand1 < 50) operand1 = 50;
					$(target).text(operand1 + operand2);
				}
				calc();
				var element1 = $("[data-tax='3']")[0];
				element1.addEventListener("change", calc);
				var element1 = $("[data-pr='1']")[0];
				element1.addEventListener("change", calc);
			}
		},
		price_get: {
			"1": "1"
		},
		form_name: "sp_third_form"
	};
}

/* end forms settings */
/* end global variables */

/* functions */

function try_permis(n) { // make data validation and add data to result
	var step_valid = true;
	var item_num = n || stepControl.person_number;
	var res = null;
	var string_res = "";
	var inputs = null;
	var el = this;
	if(forms_settings.steps[el.selector].clone_form) {
		if(!el.data_res) {
			el.data_res = [];
		}
		if(!el.data_res[item_num]) {
			el.data_res[item_num] = {};
			el.data_res[item_num].person_num = item_num;
		}
		res = el.data_res[item_num];
		inputs = $(el).find("[data-person-num='" + item_num + "'] input, [data-person-num='" + item_num + "'] textarea");
	} else {
		if(!el.data_res) el.data_res = {};
		res = el.data_res;
		inputs = $(el).find("input, textarea, select");
	}
	$(inputs).each(function(i, input) {
		var name = $(input).attr("name");
		var label_name = $(input).attr("data-name");
		var value = $(input).val();
		if($(input).prop("disabled")) {
			res[name] = "";
			$(input).closest(".input-parent").removeClass("empty").removeClass("invalid");
		} else {
			if($(input).attr("type") == "file") {
				value = $(this).closest(".input-parent")[0].files_qty;
			}
			if((($(input).attr("type") != "checkbox" && $(input).attr("type") != "file") && $(input).prop("required") && !value) || (($(input).attr("type") == "checkbox") && $(input).prop("required") && !$(input).prop("checked")) || (($(input).attr("type") == "file") && $(input).prop("required") && !value)) {
				step_valid = false;
				$(input).closest(".input-parent").addClass("empty");
				return;
			} else {
				$(input).closest(".input-parent").removeClass("empty");
			}
			if(value) {
				if((forms_settings.steps[el.selector].validation_rules && forms_settings.steps[el.selector].validation_rules[name] && !forms_settings.steps[el.selector].validation_rules[name].test(value)) || ($(input).attr("data-max-number") && (+value > +$(input).attr("data-max-number")))) {
					step_valid = false;
					$(input).closest(".input-parent").addClass("invalid");
					return;
				} else {
					res[name] = value;
					if($(input).attr("type") != "radio" && $(input).attr("type") != "checkbox") {
						string_res += ('<p>' + '<span>' + label_name + '</span>' + " : " + value + '</p>');
					}
					$(input).closest(".input-parent").removeClass("invalid");
				}
			}
		}
	});
	if(!step_valid) el.permission = false;
	else {
		el.permission = true;
		if(Array.isArray(el.data_res)) {
			el.data_res[item_num].string_res = string_res;
		}
	}
}
function organizeBoxes(step, back) { // organize form boxes of person
	var person_num = null;
	step = step || stepControl;
	var active = step.active;
	var edit = step.edit;
	var suspended = step.suspended;
	var saved = null;
	$(step).find(".form_box").attr("data-person-status", "saved");
	if(active) {
		$(active).attr("data-person-status", "active").removeClass("hidden");
		person_num = $(active).attr("data-person-num");
	}
	if(edit) {
		$(edit).attr("data-person-status", "edit").removeClass("hidden");
		person_num = $(edit).attr("data-person-num");
	}
	if(suspended) {
		$(suspended).attr("data-person-status", "suspended").addClass("hidden");
	}
	saved = $(step).find(".form_box[data-person-status='saved']");
	$(saved).addClass("hidden");
	if(!$("." + step.selector + " .form_box").length) {
		person_num = addNewBox(step);
		step.active = $(step).find(".form_box[data-person-num='" + person_num + "']")[0];
		if(back) {
			stepControl = step;
			$("." + stepControl.selector).addClass("block").next().removeClass("block");
			if(forms_settings.steps[stepControl.selector].btn_next) {
				$("#step_next .text").text(forms_settings.steps[stepControl.selector].btn_next);
			}
			if(stepControl.number < 1) $("#step_prev").addClass("hidden-btn");
			$("html, body").animate({
				scrollTop: 100
			}, 200);
		}
	}
	step.person_number = person_num;
}
function runSummCounter(id, f) {
	this.target = $("[data-tax-summ='" + id + "']")[0];
	this.putSumm = null;
	this.summ = 0;
	this.tasks = [];
	this.sources = {};
	this.calculate = function() {
		var summ = 0;
		for(var i = 0; i < this.tasks.length; i++) {
			this.tasks[i].operation();
			summ = this.tasks[i].price;
		}
		this.summ = summ;
		this.putSumm();
	};
	var putText = function() {
		$(this.target).text(this.summ);
	};
	var putValue = function() {
		$(this.target).val(this.summ);
		this.target.dispatchEvent(new Event('change', {
			bubbles: true
		}));
	};
	var calculate = this.calculate.bind(this);
	var getValue = function() {
		var num = +$("[data-tax='" + this.id + "']").val();
		if(isNaN(num)) this.price = 0;
		else this.price = num;
		calculate();
	};
	var getOptionValue = function() {
		var num = +$("[data-tax='" + this.id + "']").find("option:selected").attr("data-select-price");
		if(isNaN(num)) this.price = 0;
		else this.price = num;
		calculate();
	};
	var plus = function() {
		this.price = this.oper1.price + this.oper2.price;
	};
	var minus = function() {
		this.price = this.oper1.price - this.oper2.price;
	};
	var multi = function() {
		this.price = this.oper1.price * this.oper2.price;
	};
	var division = function() {
		this.price = this.oper1.price / this.oper2.price;
	};
	if(this.target.tagName == "INPUT") {
		this.putSumm = putValue;
	} else {
		this.putSumm = putText;
	}
	this.parcing = function() {
		var second_priority = [];
		var num = "";
		var link1 = null;
		var link2 = null;
		var operation = null;
		for(var i = 0; i <= f.length; i++) {
			var symbol = f[i];
			if(!isNaN(+symbol)) {
				num += symbol;
			} else {
				if(num !== "") {
					this.sources[num] = {
						id: num
					};
					var source = this.sources[num];
					var element = $("[data-tax='" + num + "']")[0];
					var price = $(element).attr("data-tax-price");
					if(!price) {
						if(element.tagName == "INPUT") {
							price = +element.value || 0;
							source.getPrice = getValue;
							element.addEventListener("change", source.getPrice.bind(source));
						} else if(element.tagName == "SELECT") {
							price = +$(element).find("option:selected").attr("data-select-price") || 0;
							source.getPrice = getOptionValue;
							element.addEventListener("change", source.getPrice.bind(source));
						} else {
							price = +$(element).text() || 0;
						}
					}
					source.price = +price;
					!link1 ? link1 = this.sources[num] : link2 = this.sources[num];
					num = "";
				}
				if(operation) {
					var task = {
						oper1: link1,
						oper2: link2,
						price: 0,
						operation: operation
					};
					this.tasks.push(task);
					link1 = this.tasks[this.tasks.length - 1];
					link2 = null;
					operation = null;
				}
				if(symbol == "+") {
					second_priority.push(link1);
					second_priority.push(plus);
					link1 = null;
				}
				if(symbol == "-") {
					second_priority.push(link1);
					second_priority.push(minus);
					link1 = null;
				}
				if(symbol == "*") {
					operation = multi;
				}
				if(symbol == "/") {
					operation = division;
				}
			}
			if(i === length - 1) {
				if(second_priority.length) second_priority.push(link1);
				link1 = null;
			}
		}
		for(var i = 0; i < second_priority.length; i++) {
			var symbol = second_priority[i];
			if(typeof symbol !== "function") {
				!link1 ? link1 = symbol : link2 = symbol;
			} else {
				operation = symbol;
			}
			if(link1 && link2 && operation) {
				var task = {
					oper1: link1,
					oper2: link2,
					price: 0,
					operation: operation
				};
				this.tasks.push(task);
				link1 = this.tasks[this.tasks.length - 1];
				link2 = null;
				operation = null;
			}
		}
	};
	this.parcing();
}


function runGetSumm(id, sr) {
	var target = $("[data-pr-summ='" + id + "']")[0];
	var source = $("[data-pr='" + sr + "']")[0];
	var val = null;
	function changeValue(e) {
		if(source.tagName == "SELECT") {
			val = +$(source).find("option:selected").attr("data-select-price") || 0;
		} else {
			val = +$(source).val() || 0;
		}
		$(target).text(val);
	}
	$("[data-pr='" + sr + "']").on("change", changeValue);
}
function addNewBox(step) { // add new form box
	step = step || stepControl;
	var cloned_html = $(forms_settings.steps[step.selector].clone_form).clone(true);
	var person_num = step.data_res.length;
	var box_qty = $(step).find(".form_box").length;
	var new_from = $(cloned_html).insertBefore("." + step.selector + " .sp-plus-line:last-child").attr("data-person-num", person_num);
	if(box_qty) {
		$(new_from).find(".edit_and_trash").removeClass("hidden");
		$(new_from).find(".edit_and_trash .delete_user").attr("data-for-person", person_num);
	}
	function changeId(str) {
		var new_str = str.replace(/(._)[0-9](.*)/, "$1" + person_num + "$2");
		return new_str;
	}
	var check_buttons = $(new_from).find("input[type='checkbox']");
	if(check_buttons.length) {
		$(check_buttons).each(function(i, el) {
			var id = $(el).attr("id");
			var new_id = changeId(id);
			$(el).prop({
				"id": new_id,
				"name": new_id
			});
			$(new_from).find("label[for='" + id + "']").attr("for", new_id);
		});
	}
	var radio_buttons = $(new_from).find("input[type='radio']");
	if(radio_buttons.length) {
		$(radio_buttons).each(function(i, el) {
			var id = $(el).attr("id");
			var new_id = changeId(id);
			var new_name = new_id.slice(0, new_id.lastIndexOf("_"));
			$(el).prop({
				"id": new_id,
				"name": new_name
			});
			$(new_from).find("label[for='" + id + "']").attr("for", new_id);
		});
	}
	return person_num;
}
var not4 = $("input[name='first_name[]']");
var not5 = $("input[name='last_name[]']");
var not6 = $('[name="step3_input1[]"]');
var not7 = $('[name="step3_input2_1[]"]');
not5.prop("disabled", false);
not4.prop("disabled", false);
not6.prop("disabled", false);
not7.prop("disabled", false);

function radioChange(step) { // control radio button changes for hidding some rows
	$("." + step).find("input[type='radio'].lead_radio").on("change", function(e) {
		var name = $(this).attr("name");
		var value = $(this).val();
		var num = +name[name.length - 1];
		var str_new = "";
		var not = $("input[name='step3_input8']");
		var not1 = $("input[name='step3_check2']");
		var not2 = $("input[name='step3_check3']");
		var not3 = $("input[name='step3_check1']");
		var not4 = $("input[name='first_name[]']");
		var not5 = $("input[name='last_name[]']");
		var not6 = $("input[name='step3_input1[]']");
		var not7 = $("input[name='step3_input2_1[]']");
		var not8 = $("input[name='step2_input1[]']");
		var not9 = $("input[name='step2_input2[]']");
      

		for(var i = 0; i < forms_settings.steps[step].radio_btn_comb.length; i++) {
			if((i + 1) === num) {
				str_new += value;
				continue;
			}
			str_new += forms_settings.steps[step].radio_btn_comb[i];
		}
		forms_settings.steps[step].radio_btn_comb = str_new;
		$("." + step + " [data-step-row]").each(function(i, el) {
			var n_row = $(el).attr("data-step-row");
			if(forms_settings.steps[step].hidding_rules[forms_settings.steps[step].radio_btn_comb].indexOf(n_row) >= 0) {
				$(el).removeClass("hidden");	
				console.log("removeHidden");			
				$(el).find("input").prop("disabled", false);
				not.prop("disabled", false);
				not1.prop("disabled", false);
				not2.prop("disabled", false);
				not3.prop("disabled", false);
				not4.prop("disabled", false);
				not5.prop("disabled", false);
				not6.prop("disabled", false);
				not7.prop("disabled", false);
				not8.prop("disabled", false);
				not9.prop("disabled", false);
			} else {
				console.log("addHidden");
				$(el).addClass("hidden");
				not.prop("disabled", false);
				not1.prop("disabled", false);
				not2.prop("disabled", false);
				not3.prop("disabled", false);
				not4.prop("disabled", false);
				not5.prop("disabled", false);
				not6.prop("disabled", false);
				not7.prop("disabled", false);
				not8.prop("disabled", false);
				not9.prop("disabled", false);
				$(el).find("input").prop("disabled", true);
			}
		});
	});
}

function deleteUser(e, n) { // delete a person from list of person results
	if(e) e.preventDefault();
	var person_num = n || +$(this).attr("data-for-person");
	var step_selector = $(this).closest(".users").attr("data-step-number") || stepControl.selector;
	var step = null;
	$(allSteps).each(function(i, el) {
		if(el.selector == step_selector) step = el;
	});
	var step_number_this = +step_selector[step_selector.length - 1];
	var step_number_active = +stepControl.selector[stepControl.selector.length - 1];
	var form_box = $("." + step_selector + " .form_box[data-person-num='" + person_num + "']");
	var status = $(form_box).attr("data-person-status");
	if(status == "active") {
		step.active = null;
	}
	if(status == "edit") {
		step.edit = null;
	}
	if(status != "active") {
		var person_qty = --$("." + step_selector + " .users[data-step-number='" + step_selector + "']").length;
		console.log(person_qty);
	}
	$(".users[data-person-num='" + person_num + "'][data-step-number='" + step_selector + "']").remove();
	$(form_box).remove();
	if(status != "active") {
		console.log($(".info-box"));
		$(".info-box").each(function(i, el) {
			var users = $(el).find(".users[data-step-number='" + step_selector + "']");
			console.log(users);
			var count = 1;
			for(var i = person_qty; i > 0; i--) {
				console.log(count);
				console.log(i);
				$(users[i - 1]).find(".person-number").text(forms_settings.steps[step_selector].part_name + ' ' + count);
				count++;
			}
		});
	}
	delete step.data_res[person_num];
	if(e) organizeBoxes(step, step_number_this < step_number_active);
	return true;
}
function editUser(e, n) { // edit a person from list of person results
	if(e) e.preventDefault();
	var person_num = n || +$(this).attr("data-for-person");
	var step_selector_this = $(this).closest(".users").attr("data-step-number");
	var step_number_this = +step_selector_this[step_selector_this.length - 1];
	var step_number_active = +stepControl.selector[stepControl.selector.length - 1];
	if(step_number_this !== step_number_active) {
		if(step_number_this > step_number_active) {
			if(stepControl.edit) {
				if(!saveUser()) return false;
				organizeBoxes();
			}
			if(stepControl.suspended) {
				stepControl.active = stepControl.suspended;
				stepControl.suspended = null;
				organizeBoxes();
			}
			if(stepControl.active) {
				if(!runPlus()) return false;
				organizeBoxes();
			}
		}
		$(allSteps).each(function(i, el) {
			if(el.selector == step_selector_this) stepControl = el;
		});
		$("." + stepControl.selector).addClass("block").next().removeClass("block");
		$("." + stepControl.selector).prev().removeClass("block");
		if(forms_settings.steps[stepControl.selector].btn_next) {
			$("#step_next .text").text(forms_settings.steps[stepControl.selector].btn_next);
		}
		if(stepControl.number < 1) $("#step_prev").addClass("hidden-btn");
	}
	if(person_num == $(stepControl.edit).attr("data-person-num")) return;
	if(stepControl.edit) {
		if(!saveUser()) return false;
		organizeBoxes();
	}
	if(stepControl.active) {
		stepControl.suspended = stepControl.active;
		stepControl.active = null;
	}
	stepControl.edit = $("." + stepControl.selector + " .form_box[data-person-num='" + person_num + "']")[0];
//	$(stepControl.edit).find(".save_btn").removeClass("hidden");
//if real click organize all
if(e) organizeBoxes();
return true;
}
function saveUser(e, n) { // save a person to list of person results
	if(e) e.preventDefault();
	var temp_n = null;
	if(this) {
		temp_n = +$(this).attr("data-for-person");
	}
	var person_num = n || temp_n || +$(stepControl.edit).attr("data-person-num");
	$("html, body").animate({
		scrollTop: 100
	}, 200);
	if(stepControl.try_permis) stepControl.try_permis(n);
	if(stepControl.permission) {
		$(".users[data-person-num='" + person_num + "'][data-step-number='" + stepControl.selector + "'] .users_info").replaceWith("<div class='users_info'>" + stepControl.data_res[person_num].string_res + "</div>");
		stepControl.edit = null;
		if(e) {
			if(stepControl.suspended) {
				stepControl.active = stepControl.suspended;
				stepControl.suspended = null;
			}
			organizeBoxes();
		}
		return true;
	} else {
		return false;
	}
}

function runPlus(e, n) { // add a person to list of person results
	if(e) e.preventDefault();
	if(stepControl.edit) {
		if(!saveUser()) return false;
	}
	if(stepControl.suspended) {
		stepControl.active = stepControl.suspended;
		stepControl.suspended = null;
		organizeBoxes();
	}
	var person_num = stepControl.person_number;
	if(stepControl.active) {
		if(stepControl.try_permis) stepControl.try_permis(person_num);
		if(stepControl.permission) {
			var person_qty = ++$("." + stepControl.selector + " .users[data-step-number='" + stepControl.selector + "']").length;
			var trashEdit = '<div class="edit_and_trash"><div class="edit_user" data-for-person="' + person_num + '"></div> <div class="delete_user" data-for-person="' + person_num + '"></div></div>';
			var new_block = $('<div class="users" data-person-num="' + person_num + '" data-step-number="' + stepControl.selector + '"><div class="person-number">' + forms_settings.steps[stepControl.selector].part_name + ' ' + person_qty + '</div><div class="users_info">' + stepControl.data_res[person_num].string_res + '</div>' + trashEdit + '</div>').prependTo(".info-box");
			$(".info-box").removeClass("hidden").siblings("[data-for='infobox']").removeClass("hidden");
			if(forms_settings.steps[stepControl.selector].person_title) {
				$("." + stepControl.selector + " .title-block[data-for='infobox'] .middle-line p").text(forms_settings.steps[stepControl.selector].person_title);
			}
			$(new_block).find(".edit_user").click(editUser);
			$(new_block).find(".delete_user").click(deleteUser);
			$(stepControl).find(".form_box[data-person-num='" + person_num + "'] .edit_and_trash").remove();
			stepControl.active = null;
		} else {
			return false;
		}
	}
	if(e) {
		person_num = addNewBox();
		stepControl.active = $(stepControl).find(".form_box[data-person-num='" + person_num + "']")[0];
	}
	organizeBoxes();
	$("html, body").animate({
		scrollTop: 100
	}, 200);
	return true;
}

/* end functions */

/* power control functions */

forms_settings.tmp_index = 1;
$(pagesSp).each(function(i, el) { // create data step object
	el.number = i;
	el.selector = "step_" + ++i;
	if(forms_settings.steps[el.selector]) {
		if(!forms_settings.steps[el.selector].broken_step) {
			el.indicator = ".step-indicator-" + forms_settings.tmp_index;
			forms_settings.tmp_index++;
		}
	} else {
		el.indicator = ".step-indicator-" + forms_settings.tmp_index;
		forms_settings.tmp_index++;
	}
	if(forms_settings.steps[el.selector].clone_form) {
		el.person_number = 1;
		el.active = $(el).find(".form_box[data-person-status='active']");
	}
	el.permission = true;
	el.try_permis = try_permis;
	allSteps.push(el);
	if(i === 1) {
		stepControl = el;
	}
});
$(btnPrev).click(function(e) {
	var indicator = null;
	e.preventDefault();
	stepControl = allSteps[stepControl.number - 1];
	$("." + stepControl.selector).addClass("block").next().removeClass("block");
	if(stepControl.indicator) {
		indicator = stepControl.indicator;
	} else {
		indicator = allSteps[stepControl.number - 1].indicator;
	}
	if(forms_settings.steps[stepControl.selector].btn_next) {
		$("#step_next .text").text(forms_settings.steps[stepControl.selector].btn_next);
	}
	$(indicator).addClass("active").removeClass("past").next().removeClass("active");
	if(stepControl.number < 1) $(this).addClass("hidden-btn");
	$("#step_next").removeClass("hidden");
	$("#sp_btn_submit").addClass("hidden-btn");
	$("html, body").animate({
		scrollTop: 100
	}, 200);
});
$(btnNext).click(function(e) {
	e.preventDefault();
	if(forms_settings.steps[stepControl.selector].clone_form) {
		if(runPlus()) {
			stepControl.permission = true;
		} else {
			stepControl.permission = false;
		}
	} else {
		if(stepControl.try_permis) stepControl.try_permis();
	}
	if(stepControl.permission) {
		stepControl = allSteps[stepControl.number + 1];
		$("." + stepControl.selector).addClass("block").prev().removeClass("block");
		if(stepControl.indicator) {
			$(stepControl.indicator).addClass("active").prev().removeClass("active").addClass("past");
		}
		if(forms_settings.steps[stepControl.selector].btn_next) {
			$("#step_next .text").text(forms_settings.steps[stepControl.selector].btn_next);
		}
		if((stepControl.number + 1) === allSteps.length) {
			$(this).addClass("hidden");
			$("#sp_btn_submit").removeClass("hidden-btn");
		}
		$("#step_prev").removeClass("hidden-btn");
	}
	$("html, body").animate({
		scrollTop: 100
	}, 200);
});
$(btnSubmit).click(function(e) {
	if(stepControl.try_permis) stepControl.try_permis();
	var permission = true;
	var data = [];
	for(var i = 0; i < allSteps.length; i++) {
		if(!allSteps[i].permission) permission = false;
		data.push(allSteps[i].data_res);
	}
	if(permission) {
//		var call = submitCallback(data, document.forms.sp_form);
//		if(call) {
//			if(call == "submit") document.location.reload();
//			else return true;
//		}

$('#p_prldr').show();
var price_sum = +$("#sum_for_pay").text();
$('input[name="pay_sum"]').val(price_sum);
var thisForm = $('.forms-block');
var formData = new FormData(thisForm[0]);
formData.append('company_name', $('input[name=step3_input2]')[0]); 
console.log(formData);
$.ajax({
	url: thisForm.attr('action'),
	data: formData,
	dataType: 'json',
	cache: false,
	processData: false,
	contentType: false,
	method: 'POST',
	mimeType: "multipart/form-data",	
	success: function(data) {
		console.log(data);
		$('#p_prldr').hide();
		if(data.success == true && data.redirect != '') {
			console.log(data.message);
			setTimeout(location.replace(data.redirect), 2000);
		} else {
			/*alert(data.message);*/
		}
	}
});
}
});


/* calendar plugin */
$("[data-date-picker]").datepicker({
	minDate: '-100Y',
	maxDate: '+100Y',
	dateFormat: "dd.mm.yy",
	changeYear: true,
	isRTL: true,
	closeText: "סגור",
	prevText: "&#x3C;הקודם",
	nextText: "הבא&#x3E;",
	currentText: "היום",
	monthNames: ["ינואר", "פברואר", "מרץ", "אפריל", "מאי", "יוני",
	"יולי", "אוגוסט", "ספטמבר", "אוקטובר", "נובמבר", "דצמבר"],
	monthNamesShort: ["ינו", "פבר", "מרץ", "אפר", "מאי", "יוני",
	"יולי", "אוג", "ספט", "אוק", "נוב", "דצמ"],
	dayNames: ["ראשון", "שני", "שלישי", "רביעי", "חמישי", "שישי", "שבת"],
	dayNamesShort: ["א'", "ב'", "ג'", "ד'", "ה'", "ו'", "ש'"],
	dayNamesMin: ["א'", "ב'", "ג'", "ד'", "ה'", "ו'", "ש'"]
});
$("[data-date-picker]").on("input", function(e) { // dates inputs validation
	if(/^[0-9\.]{11}$/.test(this.value)) {
		if(this.old_value) {
			this.value = this.old_value;
		} else {
			this.value = "";
		}
		return;
	}
	if(this.value.length > this.lng) {
		if(this.value.length == 2) this.value += ".";
		if(this.value.length == 5) this.value += ".";
	}
	this.lng = this.value.length;
	this.old_value = this.value;
});
$("[data-date-picker]").on("change", function(e) {
	var value = this.value;
	var value2 = null;
	if(/^[0-9\.]{11}$/.test(value)) {
		if(this.old_value) {
			this.value = this.old_value;
		} else {
			this.value = "";
		}
		return;
	}
	var point1 = value.indexOf(".");
	var point2 = value.indexOf(".", point1 + 1);
	var yy = null;
	var mm = null;
	var dd = null;
	if(point1 != -1) {
		mm = +value.substring(point1 + 1);
		dd = +value.substring(0, point1);
	}
	if(point2 != -1) {
		yy = +value.substring(point2 + 1);
		mm = +value.substring(point1 + 1, point2);
	}
	mm--;
	if(yy && mm && dd) {
		value2 = new Date(yy, mm, dd);
	} else {
		value2 = "Invalid Date";
	}
	if(value2 != "Invalid Date") {
		$(this).datepicker("setDate", value);
	} else {
		this.value = "";
	}
	this.old_value = this.value;
});
/* end calendar plugin */

/* add input number control */
$("<div class='up'>").insertAfter("input[type='number']").click(function(e) {
	var input = $(this).parent().find("input");
	var value = +input.val();
	input.val(++value);
	input[0].dispatchEvent(new Event('change', {
		bubbles: true
	}));
});
$("<div class='down'>").insertAfter("input[type='number']").click(function(e) {
	var input = $(this).parent().find("input");
	var value = +input.val();
	if(value) {
		input.val(--value);
	}
	input[0].dispatchEvent(new Event('change', {
		bubbles: true
	}));
});
$("input[type='number']").on("input", function(e) { // type number control
	if(this.value && !/[0-9]/g.test(this.value)) {
		if(this.old_value) {
			this.value = this.old_value;
		} else {
			this.value = "";
		}
		return;
	}
	this.old_value = this.value;
});
$("input[type='number']").on("change", function(e) {
	if(this.value && !/[0-9]/g.test(this.value)) {
		if(this.old_value) {
			this.value = this.old_value;
		} else {
			this.value = "";
		}
		return;
	}
	this.old_value = this.value;
});
/* end add input number control */

/* file input control */
$("input[type='file']").change(function(e) {
	console.log("change");
	var id = $(this).prop("id");
	var value = $(this).val();
	var name = this.name;
	var input = this;
	var input_parent = $(input).closest(".input-parent")[0];
	if(!input_parent.source_name) input_parent.source_name = name;
	if(!input_parent.files_sequence) input_parent.files_sequence = 0;
	if(!input_parent.cloned_template) input_parent.cloned_template = $(input).clone(true);
	var little_row = false;
	if($(input).closest(".little-row").length) little_row = true;
	value = value.substring(value.lastIndexOf("\\") + 1);
	console.log(value);
	if(value == -1) value = value.substring(value.lastIndexOf("\/") + 1);
	var file_html_label = null;
	if(value && value != -1) {
		if(little_row) {
			file_html_label = '<div class="full-row bottom-line file-block" data-file-inputName="' + name + '"><div class="vertical-center adapt-wrap-flex adapt-center-flex file-result"><div class="file-icon">"<span class="file-name">' + value + '</span>"</div><div class="btn-del-value">✖</div></div></div>';
		} else {
			file_html_label = '<div class="vertical-center adapt-wrap-flex adapt-center-flex bottom-line file-result  file-block" data-file-inputName="' + name + '"><div class="little-row"><div class="vertical-center adapt-center-flex"><div class="file-icon">"<span class="file-name">' + value + '</span>"</div></div></div><div class="big-row input-parent"><div class="vertical-center adapt-center-flex"><div class="btn-del-value">✖</div></div></div></div>';
		}
		input_parent.files_sequence++;
		name = input_parent.source_name + "_" + input_parent.files_sequence;
		var new_input = $(input_parent.cloned_template).clone(true);
		var required_toggle_num = $(input).attr("data-checkbox-targ");
		/*if(required_toggle_num) {
			var required = $("input[data-checkbox='" + required_toggle_num + "']").prop("checked");
			$(new_input).prop("required", required);
		}*/
		$(new_input).attr("name", name);
		$(new_input).attr("id", name);
		$(input).siblings("label").attr("for", name);
		$(input).after(new_input);
		console.log(file_html_label);
		$(input).closest(".file-block").before(file_html_label);
		$(input).addClass("hidden").prop("required", false).after();
	}
	input_parent.files_qty = $(input_parent).find("input[type='file']").length;
	if(input_parent.files_qty > 1) {
		$(input).siblings("label").text("העלה קובץ");
	} else {
		$(input).siblings("label").text("העלה קובץ");
	}
	checkOne(this);
});
$(document).on("click", ".btn-del-value", function(e) {
	var name = $(this).closest(".file-block").attr("data-file-inputName");
	var input = $("input[name='" + name + "']")[0];
	var input_parent = $(input).closest(".input-parent")[0];
	$(this).closest(".file-block").remove();
	input.files_qty = $(input_parent).find("input[type='file']").length - 1;
	if(input.files_qty > 1) {
		$(input).siblings("label").text("העלה קובץ");
	} else {
		$(input).siblings("label").text("העלה קובץ");
	}
	var empty_input = $(input).closest(".input-parent").find("input:not(.hidden)")[0];
	$(input).remove();
	checkOne(empty_input);
});
/* end file input control */

/* add input validation control */
function checkInput(key, key2) {
	$("input[name='" + key2 + "']").on("input", function(e) {
		var value = $(this).val();
		if((forms_settings.steps[key].validation_rules[key2] && !forms_settings.steps[key].validation_rules[key2].test(value) && value) || ($(this).attr("data-max-number") && (+value > +$(this).attr("data-max-number")))) {
			$(this).closest(".input-parent").addClass("invalid");
		} else {
			$(this).closest(".input-parent").removeClass("invalid");
		}
	});
}
function checkOne(el) {
	console.log(el);
	var input = this || el;
	var value = input.value;
	if($(input).attr("type") == "checkbox") value = $(input).prop("checked");
	if($(input).attr("type") == "file") {
		value = $(input).closest(".input-parent")[0].files_qty;
		console.log(value);
	}
	if(!value) {
		$(input).closest(".input-parent").addClass("empty");
	} else {
		$(input).closest(".input-parent").removeClass("empty");
	}
}
$(".step-page input[required], .step-page select[required]").on("input change", checkOne);
$("input[data-checkbox]").on("change", function(e) {
	var id = $(this).attr("data-checkbox");
	var checked = $(this).prop("checked");
	if(checked) {
		var input_target = $("input[data-checkbox-targ='" + id + "']");
		$(input_target).prop("required", false).val("");
		$(input_target).each(function(i, el) {
			if($(el).attr("type") == "file") {
				var name = el.name;
				if($(el).hasClass("hidden")) {
					$(el).remove();
					$("[data-file-inputName='" + name + "']").remove();
				}
			}
		});
	} else {
		$("input[data-checkbox-targ='" + id + "']").prop("required", true);
	}
});
/* add input validation control */

/* checkbox link */
/*$("[data-href-url]").click(function(e) {
	var url = $(this).attr("data-href-url");
	window.open(url, "_blank");
});*/
/* end checkbox link */

/* info box control */
$(".info-box-arrow .down-arrow").click(function(e) {
	$(this).toggleClass("open");
	$(this).closest(".info-box-arrow").next(".info-box").toggleClass("open");
});
/* end info box control */

(function() { /* setup control radio button changes for hidding some rows and control for person addition */
	for(var key in forms_settings.steps) {
		if(forms_settings.steps[key].radio_btn_comb) {
			radioChange(forms_settings.steps[key].name);
		}
		if(forms_settings.steps[key].validation_rules) {
			(function(key) {
				for(var key2 in forms_settings.steps[key].validation_rules) {
					checkInput(key, key2);
				}
			})(key);
		}
		(function(key) {
			$("." + forms_settings.steps[key].name + " input[data-max-number]").each(function(i, el) {
				checkInput(key, el.name);
			});
		})(key);
		if(forms_settings.steps[key].clone_form) {
			$("." + forms_settings.steps[key].name + " .pls_btn").click(runPlus);
			$("." + forms_settings.steps[key].name + " .save_btn").click(saveUser);
			$("." + forms_settings.steps[key].name + " .delete_user").click(deleteUser);
			var form_box = $("." + forms_settings.steps[key].name + " .form_box").clone(true);
			forms_settings.steps[key].clone_form = form_box;
		}
	}
	var summ_targets = $("[data-tax-summ]");
	if(forms_settings.price_count && summ_targets.length) {
		$(summ_targets).each(function(i, el) {
			var summ_identifier = $(el).attr("data-tax-summ");
			var formula = forms_settings.price_count[summ_identifier];
			if(typeof formula != "string") {
				formula(summ_identifier);
			} else {
				var calculator = new runSummCounter(summ_identifier, formula);
				calculator.calculate();
			}
		});
	}
	if(forms_settings.price_get) {
		for(var key in forms_settings.price_get) {
			runGetSumm(key, forms_settings.price_get[key]);
		}
	}
})();

/* end power control functions */