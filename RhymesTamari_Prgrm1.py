#Tamari Rhymes 08/28/25
#Program 1

#import cmath library to include complex function
import cmath 

#loop that run 4 times with different user inputs
for i in range(4):
    print(f"\nQuadratic Equation #{i+1}") #f string allows for variable insertion inside the string

    #ask for user input for A, B, C
    A = float(input("Please enter the number for A: "))
    B = float(input("Please enter the number for B: "))
    C = float(input("Please enter the number for C: "))

    #equation/calculate to determine the discriminant value
    discrim = B ** 2 - 4 * A * C

    #equation/calculate to determine the roots using the quadratic formula
    root1 = (-B + cmath.sqrt(discrim)) / (2 * A)
    root2 = (-B - cmath.sqrt(discrim)) / (2 * A)

    #print root values
    print(f"Root 1: {root1}")
    print(f"Root 2: {root2}")

    #use the equality operator to determine/check if the roots are the same
    if root1 == root2:
        print("The roots are the same.")
    else:
        print("The roots are NOT the same.")

    #discover if the roots are complex uing if-else
    if discrim < 0:
        print("The roots are complex.")
    else: 
        print("The roots are real.")  

