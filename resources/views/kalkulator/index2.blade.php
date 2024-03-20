<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .calculator input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 1.5em;
            text-align: right;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .row {
            display: flex;
        }

        .button {
            flex: 1;
            margin: 5px;
            padding: 15px;
            font-size: 1.2em;
            text-align: center;
            cursor: pointer;
            background-color: #e0e0e0;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #ccc;
        }

        .button.operator {
            background-color: #ff9800;
            color: #fff;
        }

        .button.clear {
            background-color: #e91e63;
            color: #fff;
        }

        .button.equal {
            background-color: #4caf50;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" readonly>
        <div class="row">
            <button class="button" onclick="appendToDisplay('7')">7</button>
            <button class="button" onclick="appendToDisplay('8')">8</button>
            <button class="button" onclick="appendToDisplay('9')">9</button>
            <button class="button operator" onclick="appendToDisplay('+')">+</button>
        </div>
        <div class="row">
            <button class="button" onclick="appendToDisplay('4')">4</button>
            <button class="button" onclick="appendToDisplay('5')">5</button>
            <button class="button" onclick="appendToDisplay('6')">6</button>
            <button class="button operator" onclick="appendToDisplay('-')">-</button>
        </div>
        <div class="row">
            <button class="button" onclick="appendToDisplay('1')">1</button>
            <button class="button" onclick="appendToDisplay('2')">2</button>
            <button class="button" onclick="appendToDisplay('3')">3</button>
            <button class="button operator" onclick="appendToDisplay('*')">*</button>
        </div>
        <div class="row">
            <button class="button" onclick="appendToDisplay('0')">0</button>
            <button class="button" onclick="appendToDisplay('.')">.</button>
            <button class="button clear" onclick="clearDisplay()">C</button>
            <button class="button equal" onclick="calculate()">=</button>
        </div>
    </div>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculate() {
            let expression = document.getElementById('display').value;
            let result = eval(expression);
            document.getElementById('display').value = result;
        }
    </script>
</body>
</html>
