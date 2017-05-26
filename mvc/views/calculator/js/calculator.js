
class CalculatorJS {


    constructor() {
    }
    GetAnswer(DisplayText,State=null) {

        let request = new XMLHttpRequest();
        DisplayText = DisplayText.replace(/[+]/g , "p");
        request.onreadystatechange = function () {
            if (request.readyState == XMLHttpRequest.DONE) {
                document.getElementById("disp").value = request.responseText;

            }
        }
        request.open("POST", "calculator/run?Calc"+State+"="+DisplayText, true);
        request.send();


    }

}

let Calc_obj = new CalculatorJS();