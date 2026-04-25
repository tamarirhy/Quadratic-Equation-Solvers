
//Tamari Rhymes 10/28/2025
//Program #11: Java Quadratic Equation

//library allows for user input
import java.util.Scanner;

public class Prgrm11 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        //for loop to iterate through 5 times
        for (int i = 0; i < 4; i++) {
            System.out.println("Welcome to the Quadratic Equation Solver");

            double a,b,c;

            //ensures that if user iputs 0 for A, it wont count in the 5 turns
            do {
                System.out.print("Please enter your A value (cannot be zero) :");
                a = input.nextDouble();
                if (a == 0) {
                    System.out.println("A cannot be zero. Please enter another number.");
                }
            } while (a == 0);
            
            //request user input and declare data type
            System.out.print("Please enter your B value: ");
            b = input.nextDouble();

            System.out.print("Please enter your C value: ");
            c = input.nextDouble();

            //equation/calculate to determine the discriminant value
            double discrim = (b * b) - (4 * a * c);
            System.out.println("Discrminant = " + discrim);

            if (discrim >= 0) {
                //determine real roots
                double root1 = (-b + Math.sqrt(discrim)) / (2 * a);
                double root2 = (-b - Math.sqrt(discrim)) / (2 * a);
                System.out.println("Real root 1: " + root1);
                System.out.println("Real root 2: " + root2);

                    // compare real roots to see if they're the same
                if (root1 == root2) {
                    System.out.println("The roots are the same. \n");
                }
                else {
                     System.out.println("The roots are not the same. \n");
                }
            }
            else {
                 //determine complex roots
                double realPart = -b / (2 * a);
                double imagPart = Math.sqrt(-discrim) / (2 * a);
                System.out.println("Complex root 1: " + realPart + " + " + imagPart + "i");
                System.out.println("Complex root 2: " + realPart + " - " + imagPart + "i\n");
            }
        }
                   
            input.close();
     }
        
}


