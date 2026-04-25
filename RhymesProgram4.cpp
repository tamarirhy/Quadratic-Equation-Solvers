//Tamari Rhymes 09/09/2025
//Program 4 Quadratic Eq. C++

#include <iostream>
#include <cmath> // imports sqrt
#include <complex> //import complex library to allow for sqrt of negative numbers
using namespace std;

int main() {
    double A, B, C;
    complex<double> discrim, root1, root2;

    //for loop to repeat 5 times and allow for different input
    for (int i = 0; i < 5; i++) { 
        cout << "Quadratic Equation Solver" << endl;
        cout << "Please enter your values for A, B, and C: "; //ask user for input values
        cin >> A >> B >> C; //allows user input

        if (A == 0) { // equality operator to check if the user input for A is 0
            cout << "A cannot be 0" << endl; 
            continue;
        }
        //equation/calculate to determine the discriminant value
        discrim = complex<double>(B * B - 4.0 * A * C);
        //equation/calculate to determine the roots using the quadratic formula
        root1 = (-B + sqrt(discrim))/(2.0 * A); 
        root2 = (-B - sqrt(discrim))/(2.0 * A);

        //print root values
        cout << "Root 1: " << root1 << endl;
        cout << "Root 2: " << root2 << endl;

        //use the equality operator to determine/check if the roots are the same
        if (root1 == root2) {
            cout << "The roots are the same." << endl;
        }
        else {
            cout << "The roots are NOT thee same." << endl;
        }

        //discover if the roots are complex or real
        if (discrim.imag() != 0) { // checks if there is an imaginary number or not
            cout << "The roots are complex." << endl;
        }
        else {
            cout << "The roots are real." << endl;
        }
    }
    
    return 0;

}