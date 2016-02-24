(function () {
	'use strict';

	var inputLeft = document.getElementById('left');
	var inputCenter = document.getElementById('center');
	var inputRight = document.getElementById('right');
	var result = document.getElementById('result');

	var activeScreen = inputLeft;

	var hasOperator = document.getElementsByClassName('btn btn-primary');
	var buttons = document.getElementsByClassName('btn btn-default');
	var equals = document.getElementById('btnEquals');
	var deleteButton = document.getElementById('clear');




	function onNumberClick(event) {
		var buttonInput	= this.innerHTML;
		activeScreen.value += buttonInput;
	}


	function onOperatorClick(event) {
		var operatorInput = this.innerHTML;
		inputCenter.value = operatorInput;
		activeScreen = inputRight;
	}

	function onEqualsClick(event) {
		console.log(this);
		var left = parseInt(inputLeft.value);
		var right = parseInt(inputRight.value);
		var operator = inputCenter.value;

		if (operator == "+") {
			result.value = left + right;
		}

		if (operator == "-") {
			result.value = left - right;
		}

		if (operator === "×") {
			result.value = left * right;
		}
		if (operator === "÷") {
			result.value = left / right;
		}
	}

	function clear(event) {
		inputLeft.value ='';
		inputCenter.value ='';
		inputRight.value ='';
		result.value = '';
		activeScreen = inputLeft;
	}



//listeners


buttons = document.getElementsByClassName('btn btn-default');
console.log(buttons)

for (var i = 0; i < buttons.length; i++) {
	buttons[i].addEventListener('click', onNumberClick)
}


var operators = document.getElementsByClassName('btn btn-primary')

for (var i = 0; i < operators.length; i++) {
	operators[i].addEventListener('click', onOperatorClick)
}

// listener for function onequalsclick
equals.addEventListener('click',onEqualsClick);
deleteButton.addEventListener('click', clear);



})();
