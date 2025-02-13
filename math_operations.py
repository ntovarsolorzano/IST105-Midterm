#!/usr/bin/env python3

import sys

def calculate(input1, input2, operation):
    """Performs mathematical operations based on the given inputs."""
    try:
        num1 = float(input1)
        num2 = float(input2)
    except ValueError:
        return "<b>Error:</b> Invalid input. Please enter numeric values."

    if operation == "add":
        result = num1 + num2
    elif operation == "sub":
        result = num1 - num2
    elif operation == "mul":
        result = num1 * num2
    elif operation == "div":
        if num2 == 0:
            return "<b>Error:</b> Division by zero is not allowed."
        result = num1 / num2
    else:
        return "<b>Error:</b> Invalid operation."
    
    if result > 100:
        result *= 2
    if result < 0:
        result += 50

    return f"<b>Result:</b> {result}"


if __name__ == "__main__":
    if len(sys.argv) != 4:
        print("<b>Error:</b> Invalid number of arguments.")
        sys.exit(1)

    input1 = sys.argv[1]
    input2 = sys.argv[2]
    operation = sys.argv[3]

    result_html = calculate(input1, input2, operation)
    print(result_html)
    