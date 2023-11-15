# Inheritance Exercise

## Exercise 1

php Inheritance: Exercise-1 with Solution
Write a php program to create a class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.

This exercise shows how inheritance works in php programming language. Inheritance allows you to create new classes based on existing classes, inheriting their attributes and behaviors. In this case, the 'Cat' class is a more specific implementation of the 'Animal' class, adding quarrel behavior.

### Sample Solution:

// Animal.php

```php
class Animal {
    public function makeSound() {
        echo "The animal makes a sound.";
    }
}
```

// Cat.php

```php
class Cat extends Animal {
    public function makeSound() {
        echo "The cat quarrels.";
    }
}
```

**Use the classes**

```php
$animal = new Animal();
$cat = new Cat();
$animal->makeSound();
$cat->makeSound();
```

### Sample Output:

```
The animal makes a sound.
The cat quarrels.
```

**Explanation:**

The above exercise demonstrates php programming inheritance. In this program, we create a base class called 'Animal' with a method named makeSound(). Then, you will create a subclass of 'Animal' called 'Cat' which inherits from 'Animal'. The 'Cat' class will override the makeSound() method and change it to make a quarrel sound.

## Exercise 2

php Inheritance: Exercise-2 with Solution
Write a php program to create a class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car".

This program creates a class called 'Vehicle' with a method called drive() and a subclass called Car that overrides the drive() method to print "Repairing a car".

### Sample Solution:

// Vehicle.php
// Parent class Vehicle

```php
class Vehicle {
    public function drive() {
        echo "Repairing a vehicle";
    }
}
```

// Car.php
// Child class Car

```php
class Car extends Vehicle {
    public function drive() {
        echo "Repairing a car";
    }
}
```

**Use the classes**

```php
$vehicle = new Vehicle();
$car = new Car();
$vehicle->drive(); // Output: Repairing a vehicle
$car->drive(); // Output: Repairing a car
```

### Sample Output:

```
Repairing a vehicle
Repairing a car
```

**Explanation:**

In this program, we first define a parent class called Vehicle with a method called drive() which simply prints " Repairing a vehicle" to the console.

Then, we create a subclass called Car that extends Vehicle and overrides the drive() method to print " Repairing a car" instead.

In the main() method, we create an instance of both the Vehicle and Car classes, and call the drive() method on each object. The output of the first call to drive() will be "Repairing a vehicle", while the output of the second call to drive() will be "Repairing a car", as defined in the Car class.

## Exercise 3

php Inheritance: Exercise-3 with Solution
Write a php program to create a class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.

### Sample Solution:

```php
// Shape.php
// Parent class Shape
class Shape {
    public function getArea() {
        return 0.0;
    }
}
```

// Rectangle.php
// Child class Rectangle

```php
class Rectangle extends Shape {
    private double length;
    private double width;

    public __construc(double length, double width) {
        this.length = length;
        this.width = width;
    }

    public double getArea() {
        return length * width;
    }
}
```

**Use the classes**

```php
Rectangle rectangle = new Rectangle(3.0, 10.0);
double area = rectangle.getArea();
echo "The area of the rectangle is: " + area;
```

### Sample Output:

```
The area of the rectangle is: 30.0
```

**Explanation:**

In the above exercise, the Shape class has a single method called getArea() that returns a double value. The Rectangle class is a subclass of Shape and overrides the getArea() method to calculate the area of a rectangle using the formula length x width. The Rectangle class constructor sets length and width values.

Finally in the main() method we create an instance of the Rectangle class and call its getArea() method to get the rectangle's area.

## Exercise 4

php Inheritance: Exercise-4 with Solution
Write a php program to create a class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().

### Sample Solution:

// Employee.php
// Parent class Employee

```php
class Employee {
    private int salary;

    public Employee(int salary) {
        this.salary = salary;
    }

    public function work() {
        echo "working as an employee!";
    }

    public int getSalary() {
        return salary;
    }
}
```

// HRManager.php
// Child class HRManager

```php
class HRManager extends Employee {
    public __construc(int salary) {
        super(salary);
    }

    public function work() {
        echo "\nManaging employees";
    }

    public function addEmployee() {
        echo "\nAdding new employee!";
    }
}
```

**Use the classes**

```php
Employee emp = new Employee(40000);
HRManager mgr = new HRManager(70000);

emp.work();
echo "Employee salary: " + emp.getSalary();

mgr.work();
echo "Manager salary: " + mgr.getSalary();
mgr.addEmployee();
```

### Sample Output:

```
working as an employee!
Employee salary: 40000

Managing employees
Manager salary: 70000

Adding new employee!
```

**Explanation:**

In the above exercise, the Employee class has a work() method that prints a message and a getSalary() method that returns the employee's salary. The HRManager subclass extends the Employee class and overrides the work() method to display a different message. It adds a method addEmployee() that prints a message indicating that a new employee is being added. The Main class creates an instance of Employee and HRManager, calls the work() and getSalary() methods, and also calls the addEmployee() method on the HRManager object.

## Exercise 5

php Inheritance: Exercise-5 with Solution
Write a php program to create a class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.

### Sample Solution:

// BankAccount.php
// Parent class BankAccount

```php
class BankAccount {
    private String accountNumber;
    private double balance;

    public __construc(String accountNumber, double balance) {
        this.accountNumber = accountNumber;
        this.balance = balance;
    }

    public function deposit(double amount) {
        balance += amount;
    }

    public function withdraw(double amount) {
        if (balance >= amount) {
            balance -= amount;
        } else {
            echo "Insufficient balance";
        }
    }

    public double getBalance() {
        return balance;
    }
}
```

// SavingsAccount.php
// Child class SavingsAccount

```php
class SavingsAccount extends BankAccount {
    public __construc(String accountNumber, double balance) {
        super(accountNumber, balance);
    }

    public function withdraw(double amount) {
        if (getBalance() - amount < 100) {
            echo "Minimum balance of $100 required!";
        } else {
            super.withdraw(amount);
        }
    }
}
```

**Use the classes**

```php
echo "Create a Bank Account object (A/c No. BA1234) with initial balance of $500:";
//Create a BankAccount object (A/c No. "BA1234") with initial balance of $500
BankAccount BA1234 = new BankAccount("BA1234", 500);

// Deposit $1000 into account BA1234
echo "Deposit $1000 into account BA1234:";
BA1234.deposit(1000);
echo "New balance after depositing $1000: $" + BA1234.getBalance();

// Withdraw $600 from account BA1234
echo "Withdraw $600 from account BA1234:";
BA1234.withdraw(600);
echo "New balance after withdrawing $600: $" + BA1234.getBalance();

// Create a SavingsAccount object (A/c No. "SA1234") with initial balance of $450
echo "\nCreate a SavingsAccount object (A/c No. SA1234) with initial balance of $450:";
SavingsAccount SA1234 = new SavingsAccount("SA1234",450);

// Withdraw $300 from SA1234
SA1234.withdraw(300);
echo "Balance after trying to withdraw $300: $" + SA1234.getBalance();


// Create a SavingsAccount object (A/c No. "SA1000") with initial balance of $300
echo "\nCreate a SavingsAccount object (A/c No. SA1000) with initial balance of $300:";
SavingsAccount SA1000 = new SavingsAccount("SA1000",300);

// Withdraw $250 from SA1000 (balance falls below $100)
echo "Try to withdraw $250 from SA1000!";
SA1000.withdraw(250);
echo "Balance after trying to withdraw $250: $" + SA1000.getBalance();
```

### Sample Output:

```
Create a Bank Account object (A/c No. BA1234) with initial balance of $500:
Deposit $1000 into account BA1234:
New balance after depositing $1000: $1500.0
Withdraw $600 from account BA1234:
New balance after withdrawing $600: $900.0

Create a SavingsAccount object (A/c No. SA1234) with initial balance of $450:
Balance after trying to withdraw $300: $150.0

Create a SavingsAccount object (A/c No. SA1000) with initial balance of $300:
Try to withdraw $250 from SA1000!
Minimum balance of $100 required!
Balance after trying to withdraw $250: $300.0
```

**Explanation:**

The BankAccount class has a constructor that takes account number and balance as arguments. It also has methods to deposit and withdraw money, and to check the account balance.

The SavingsAccount class is a subclass of BankAccount and overrides the withdraw() method. It checks if the account balance falls below one hundred before allowing a withdrawal. The method prints an error message if the balance is below one hundred. If the balance is greater than or equal to one hundred, the method calls the withdraw() method of the superclass to withdraw.

In Main() method -

The main method begins by creating an instance of the BankAccount class with an account number of "BA1234" and an initial balance of $500. It then deposits $1000 into the account and displays the new balance. It then withdraws $600 from the account and displays the new balance.

Next, the method creates an instance of the SavingsAccount class with an account number of "SA1234" and an initial balance of $450. It then attempts to withdraw $300 from the account and displays the new balance. Since the balance remains above the minimum $150 balance required for the account, the withdrawal is successful.

Finally, the method creates another instance of the SavingsAccount class with an account number of "SA1000" and an initial balance of $300. It then attempts to withdraw $250 from the account, which would bring the balance below the minimum balance required for the account. The method displays the new balance after the attempted withdrawal, which should still be $300 since the withdrawal was unsuccessful.

## Exercise 6

php Inheritance: Exercise-6 with Solution
Write a php program to create a class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.

### Sample Solution:

// Animal.php
// Parent class Animal

```php
class Animal {
    public function move() {
        echo "Animal moves";
    }
}
```

// Cheetah.php
// Child class Cheetah

```php
class Cheetah extends Animal {
    public function move() {
        echo "This cheetah is running!";
    }
}
```

**Use the classes**

```php
Animal animal = new Animal();
animal.move();
Cheetah cheetah = new Cheetah();
cheetah.move();
```

### Sample Output:

```
Animal moves
This cheetah is running!
```

**Explanation:**

In the above exercise, the Animal class has a single method called move(). This method simply prints a message to the console saying the animal is moving. The Cheetah class extends the Animal class and overrides the move() method to print a message that Cheetah is running.

In the Main class, we create an instance of the "Animal" class and call its move() method. This prints the "This animal is moving" message to the console. We also create an instance of the "Cheetah" class and call its move() method. This prints the "This cheetah is running" message to the console.

## Exercise 7

php Inheritance: Exercise-7 with Solution
Write a php program to create a class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.

### Sample Solution:

```php
// Person.php
// Parent class Person

class Person {
    private String firstName;
    private String lastName;

    public __construc(String firstName, String lastName) {
        this.firstName = firstName;
        this.lastName = lastName;
    }

    public String getFirstName() {
        return firstName;
    }

    public String getLastName() {
        return lastName;
    }
}
```

// Employee.php
// Child class Employee

```php
class Employee extends Person {
    private int employeeId;
    private String jobTitle;

    public __construc(String firstName, String lastName, int employeeId, String jobTitle) {
        super(firstName, lastName);
        this.employeeId = employeeId;
        this.jobTitle = jobTitle;
    }

    public int getEmployeeId() {
        return employeeId;
    }

    public String getLastName() {
        return super.getLastName() + ", " + jobTitle;
    }
}
```

**Use the classes**

```php
Employee employee1 = new Employee("Kortney", "Rosalee", 4451, "HR Manager");
echo employee1.getFirstName() + " " + employee1.getLastName() + " (" + employee1.getEmployeeId() + ")";
Employee employee2 = new Employee("Junior", "Philipa", 4452, "Software Manager");
echo employee2.getFirstName() + " " + employee2.getLastName() + " (" + employee2.getEmployeeId() + ")";
```

### Sample Output:

```
Kortney Rosalee, HR Manager (4451)
Junior Philipa, Software Manager (4452)
```

**Explanation:**

The Person class has two private instance variables, firstName and lastName, and two public methods, getFirstName() and getLastName(), that return the values of these variables.

The Employee class is a subclass of Person, and adds two private instance variables, employeeId and jobTitle, as well as a public method called getEmployeeId(). It also overrides the getLastName() method from the Person class to include the employee's jobTitle.

In the above Main class, we create two instances of the Employee class, namely "employee1" and "employee2".

"employee1" is initialized with the values "Kortney" for the first name, "Rosalee" for the last name, 4451 for the employee ID, and "HR Manager" for the job title. Employee1's getFirstName(), getLastName(), and getEmployeeId() methods of "employee1" are called. Their return values are concatenated into a string, which is printed to the console.

Similarly, Employee2's getFirstName(), getLastName(), and getEmployeeId() methods of employee2 are called. Their return values are concatenated into a string, which is printed to the console.

## Exercise 8

php Inheritance: Exercise-8 with Solution
Write a php program to create a class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.

### Sample Solution:

// Shape.php
// Parent class Shape

```php
class Shape {
    public double getPerimeter() {
        return 0.0;
    }

    public double getArea() {
        return 0.0;
    }
}
```

// Circle.php
// Child class Circle

```php
class Circle extends Shape {
    private double radius;

    public __construc(double radius) {
        this.radius = radius;
    }

    public double getPerimeter() {
        return 2 * Math.PI * radius;
    }

    public double getArea() {
        return Math.PI * radius * radius;
    }
}
```

**Use the classes**

```php
double r = 8.0;
Circle c1 = new Circle(r);
echo "Radius of the circle="+r;
echo "Perimeter: " + c1.getPerimeter();
echo "Area: " + c1.getArea();
r = 3.2;
Circle c2 = new Circle(r);
echo "\nRadius of the circle="+r;
echo "Perimeter: " + c2.getPerimeter();
echo "Area: " + c2.getArea();
```

### Sample Output:

```
Radius of the circle=8.0
Perimeter: 50.26548245743669
Area: 201.06192982974676

Radius of the circle=3.2
Perimeter: 20.106192982974676
Area: 32.169908772759484
**Explanation:**
```

In the above exercise, the Shape class is a base class that provides generic methods for calculating the perimeter and area of a shape. The Circle class is a subclass that extends Shape and overrides the getPerimeter() and getArea() methods to implement circle formulas.

The Circle class has a private radius field that takes a radius argument to initialize the field. The getPerimeter() method uses the formula 2πr to calculate the circumference of the circle. The getArea() method uses the formula πr^2 to calculate the circle area.

In the Main class -

The given code creates two Circle objects, c1 and c2, and calculates their perimeter and area using the getPerimeter() and getArea() methods. The radius of each circle is first set using a double variable r. The output displays the radius, perimeter, and area of each circle.

## Exercise 9

php Inheritance: Exercise-9 with Solution
Write a php program to create a vehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

### Sample Solution:

// Vehicle.php
// Parent class Vehicle

```php
public abstract class Vehicle {
    private String make;
    private String model;
    private int year;
    private String fuelType;
    private double fuelEfficiency;

    public __construc(String make, String model, int year, String fuelType, double fuelEfficiency) {
        this.make = make;
        this.model = model;
        this.year = year;
        this.fuelType = fuelType;
        this.fuelEfficiency = fuelEfficiency;
    }

    public String getMake() {
        return make;
    }

    public String getModel() {
        return model;
    }

    public int getYear() {
        return year;
    }

    public String getFuelType() {
        return fuelType;
    }

    public double getFuelEfficiency() {
        return fuelEfficiency;
    }

    public abstract double calculateFuelEfficiency();

    public abstract double calculateDistanceTraveled();

    public abstract double getMaxSpeed();
}
```

**Explanation:**

This is an abstract class that serves as the parent class for the other vehicle classes. It contains five private instance variables (make, model, year, fuelType, and fuelEfficiency) and six public methods (a constructor, five getters for the instance variables, and three abstract methods). The abstract methods are meant to be overridden by child classes with specific implementations.

// Truck.php
// Child class Truck

```php
class Truck extends Vehicle {
    private double cargoCapacity;

    public __construc(String make, String model, int year, String fuelType, double fuelEfficiency, double cargoCapacity) {
        super(make, model, year, fuelType, fuelEfficiency);
		//Truck("Ford", "F-150", 2020, "GASOLINE", 8.112);
       this.cargoCapacity = cargoCapacity;
    }

    public double getCargoCapacity() {
        return cargoCapacity;
    }

    public double calculateFuelEfficiency() {
        // implementation for fuel efficiency calculation for trucks
        return getFuelEfficiency()*(1.0 / (1.0 + (getCargoCapacity() / 1000.0)));
    }

    public double calculateDistanceTraveled() {
        // implementation for distance traveled calculation for trucks
        return calculateFuelEfficiency() * getFuelEfficiency();
    }

    public double getMaxSpeed() {
        // implementation for maximum speed calculation for trucks
        return 80.0;
    }
}
```

**Explanation:**

The above class is a child class of Vehicle and extends the Vehicle class. It has an additional instance variable, cargoCapacity. The class has a constructor that accepts all the necessary parameters including cargo capacity. The class overrides the three abstract methods of the parent class and provides specific implementations of the methods.

// Car.php
// Child class Car

```php
class Car extends Vehicle {
    private int numSeats;

    public __construc(String make, String model, int year, String fuelType, double fuelEfficiency, int numSeats) {
        super(make, model, year, fuelType, fuelEfficiency);
        this.numSeats = numSeats;
    }
    public int getNumSeats() {
        return numSeats;
    }
    public double calculateFuelEfficiency() {
        // implementation for fuel efficiency calculation for cars
        return getFuelEfficiency() * (1.0 / (1.0 + (getNumSeats() / 5.0)));
    }
    public double calculateDistanceTraveled() {
        // implementation for distance traveled calculation for cars
        return calculateFuelEfficiency() * getFuelEfficiency();
    }

    public double getMaxSpeed() {
        // implementation for maximum speed calculation for cars
        return 120.0;
    }
}
```

**Explanation:**

The above class is another child class of Vehicle and extends the Vehicle class. It has an additional instance variable, numSeats. The class has a constructor that accepts all the necessary parameters including the number of seats. The class overrides the three abstract methods of the parent class and provides specific implementations of the methods.

// Motorcycle.php
// Child class Motorcycle

```php
class Motorcycle extends Vehicle {
    private double engineDisplacement;

    public __construc(String make, String model, int year, String fuelType, double fuelEfficiency) {
        super(make, model, year, fuelType, fuelEfficiency);
      //  this.engineDisplacement = engineDisplacement;
    }

    public double getEngineDisplacement() {
        return engineDisplacement;
    }

    public double calculateFuelEfficiency() {
        // implementation for fuel efficiency calculation for motorcycles
        return getFuelEfficiency() * (1.0 / (1.0 + (getEngineDisplacement() / 1000.0)));
    }

      public double calculateDistanceTraveled() {
        // implementation for distance traveled calculation for cars
        return calculateFuelEfficiency() * getFuelEfficiency();
    }

    public double getMaxSpeed() {
        // implementation for maximum speed calculation for cars
        return 80.0;
    }
}
```

**Explanation:**

This is also a child class of Vehicle and extends the Vehicle class. It has an additional instance variable, engineDisplacement. The class has a constructor that accepts all the necessary parameters. The class overrides the three abstract methods of the parent class and provides specific implementations of the methods.

**Use the classes**

```php
// Create instances of each vehicle type
Truck truck = new Truck("Tatra", "Tatra 810 4x4", 2020, "GASOLINE", 8.112, 4.5);
Car car = new Car("Volkswagen", "Virtus", 2019, "HYBRID", 6.123, 8);
Motorcycle motorcycle = new Motorcycle("Massimo Motor", "Warrior200", 2018, "GASOLINE", 2.1);

// Print the vehicle details and calculations
echo "Truck Model: " + truck.getModel();
echo "Fuel Efficiency: " + truck.calculateFuelEfficiency() + " mpg";
echo "Distance Traveled: " + truck.calculateDistanceTraveled() + " miles";
echo "Max Speed: " + truck.getMaxSpeed() + " mph\n";

echo "Car Model: " + car.getModel();
echo "Fuel Efficiency: " + car.calculateFuelEfficiency() + " mpg";
echo "Distance Traveled: " + car.calculateDistanceTraveled() + " miles";
echo "Max Speed: " + car.getMaxSpeed() + " mph\n";

echo "Motorcycle Model: " + motorcycle.getModel();
echo "Fuel Efficiency: " + motorcycle.calculateFuelEfficiency() + " mpg";
echo "Distance Traveled: " + motorcycle.calculateDistanceTraveled() + " miles";
echo "Max Speed: " + motorcycle.getMaxSpeed() + " mph";
```

**Explanation:**

The above class is the main class that contains the main method. It creates instances of each vehicle type, sets their values, and then prints their respective details and calculations such as fuel efficiency, distance traveled, and max speed.

### Sample Output:

```
Truck Model: Tatra 810 4x4
Fuel Efficiency: 8.075659532105526 mpg
Distance Traveled: 65.50975012444003 miles
Max Speed: 80.0 mph

Car Model: Virtus
Fuel Efficiency: 2.355 mpg
Distance Traveled: 14.419665 miles
Max Speed: 120.0 mph

Motorcycle Model: Warrior200
Fuel Efficiency: 2.1 mpg
Distance Traveled: 4.41 miles
Max Speed: 80.0 mph
```

## Exercise 10

Write a php program that creates a class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.

### Sample Solution:

//Employee.php

```php
class Employee {
private String name;
private String address;
private double salary;
private String jobTitle;

    public __construc(String name, String address, double salary, String jobTitle) {
        this.name = name;
        this.address = address;
        this.salary = salary;
        this.jobTitle = jobTitle;
    }

    public String getName() {
        return name;
    }

    public String getAddress() {
        return address;
    }

    public double getSalary() {
        return salary;
    }

    public String getJobTitle() {
        return jobTitle;
    }

    public double calculateBonus() {
        // Default implementation for bonus calculation
        return 0.0;
    }

    public String generatePerformanceReport() {
        // Default implementation for performance report
        return "No performance report available.";
    }

}
```

**Explanation:**

Employee class: This class represents a generic employee with private instance variables 'name', 'address', 'salary', and 'jobTitle'. It also provides getter methods to access these private variables.
getName(): Returns the employee's name.
getAddress(): Returns the employee's address.
getSalary(): Returns the employee's salary.
getJobTitle(): Returns the employee's job title.
calculateBonus(): This method is used to calculate the bonus for an employee. In the base class, it provides a default implementation that returns 0.0. Subclasses can override this method to provide custom bonus calculation logic.
generatePerformanceReport(): This method generates a performance report for an employee. Similar to the bonus calculation, it provides a default implementation that returns "No performance report available." Subclasses can override this method to provide custom performance report generation logic.
This class is designed to be extended by subclasses like "Manager", "Developer", and "Programmer", which can provide their own implementations of bonus calculation and performance report generation as per their specific roles and responsibilities.

//Manager.php

```php
class Manager extends Employee {
private int numberOfSubordinates;

    public __construc(String name, String address, double salary, String jobTitle, int numberOfSubordinates) {
        super(name, address, salary, jobTitle);
        this.numberOfSubordinates = numberOfSubordinates;
    }

    public int getNumberOfSubordinates() {
        return numberOfSubordinates;
    }

    public double calculateBonus() {
        // Custom implementation for bonus calculation for managers
        return getSalary() * 0.15;
    }

    public String generatePerformanceReport() {
        // Custom implementation for performance report for managers
        return "Performance report for Manager " + getName() + ": Excellent";
    }

    public function manageProject() {
        // Custom method for managing projects
        echo "Manager " + getName() + " is managing a project.";
    }

}
```

**Explanation:**

extends Employee: This line indicates that the "Manager" class inherits from the "Employee" class. It means that a Manager is a specialized type of Employee and inherits all the attributes and methods of the Employee class.
private int numberOfSubordinates: This instance variable represents the number of subordinates managed by the manager. It is specific to the "Manager" class and not present in the base "Employee" class.
public Manager(String name, String address, double salary, String jobTitle, int numberOfSubordinates): This is the constructor for the "Manager" class. It takes parameters for 'name', 'address', 'salary', 'jobTitle', and numberOfSubordinates, which are used to initialize the attributes inherited from the "Employee" class as well as the numberOfSubordinates specific to managers. The super(...) keyword is used to call the constructor of the superclass (Employee) to initialize its attributes.
public int getNumberOfSubordinates(): This method allows you to retrieve the number of subordinates managed by the manager.
@Override public double calculateBonus(): This method is marked with the @Override annotation, indicating that it is an overridden method from the superclass (Employee). The "calculateBonus()" method provides a custom implementation for bonus calculation for managers. In this case, it calculates the bonus as 15% of the manager's salary.
@Override public String generatePerformanceReport(): Similar to the "calculateBonus()" method, this method is also marked as an override and provides a custom implementation for generating a performance report for managers. It returns a specific performance report message for managers, including the manager's name and an "Excellent" rating.
public function manageProject(): This is a custom method specific to the "Manager" class. It simulates the action of a manager managing a project by printing a message to the console.

//Developer.php

```php
class Developer extends Employee {
private String programmingLanguage;

    public __construc(String name, String address, double salary, String jobTitle, String programmingLanguage) {
        super(name, address, salary, jobTitle);
        this.programmingLanguage = programmingLanguage;
    }

    public String getProgrammingLanguage() {
        return programmingLanguage;
    }

    public double calculateBonus() {
        // Custom implementation for bonus calculation for developers
        return getSalary() * 0.10;
    }

    public String generatePerformanceReport() {
        // Custom implementation for performance report for developers
        return "Performance report for Developer " + getName() + ": Good";
    }

    public function writeCode() {
        // Custom method for writing code
        echo "Developer " + getName() + " is writing code in " + programmingLanguage;
    }

}
```

**Explanation:**

extends Employee: Similar to the "Manager" class, this line indicates that the Developer class inherits from the "Employee" class. It means that a 'Developer' is a specialized type of 'Employee' and inherits all the attributes and methods of the Employee class.
private String programmingLanguage: This instance variable represents the programming language that the developer specializes in. It is specific to the "Developer" class and not present in the base "Employee" class.
public Developer(String name, String address, double salary, String jobTitle, String programmingLanguage): This is the constructor for the "Developer" class. It takes parameters for 'name', 'address', 'salary', 'jobTitle', and programmingLanguage, which are used to initialize the attributes inherited from the "Employee" class as well as the programmingLanguage specific to developers. The super(...) keyword is used to call the constructor of the superclass (Employee) to initialize its attributes.
public String getProgrammingLanguage(): This method allows you to retrieve the programming language specialization of the developer.
@Override public double calculateBonus(): This method is marked with the @Override annotation, indicating that it is an overridden method from the superclass (Employee). The "calculateBonus()" method provides a custom implementation for bonus calculation for developers. In this case, it calculates the bonus as 10% of the developer's salary.
@Override public String generatePerformanceReport(): Similar to the "calculateBonus()" method, this method is also marked as an override and provides a custom implementation for generating a performance report for developers. It returns a specific performance report message for developers, including the developer's name and a "Good" rating.
public function writeCode(): This is a custom method specific to the "Developer" class. It simulates the action of a developer writing code in their specialized programming language by printing a message to the console.

//Programmer.php

```php
class Programmer extends Developer {
    public __construc(String name, String address, double salary, String programmingLanguage) {
        super(name, address, salary, "Programmer", programmingLanguage);
    }

    public double calculateBonus() {
        // Custom implementation for bonus calculation for programmers
        return getSalary() * 0.12;
    }

    public String generatePerformanceReport() {
        // Custom implementation for performance report for programmers
        return "Performance report for Programmer " + getName() + ": Excellent";
    }

    public function debugCode() {
        // Custom method for debugging code
        echo "Programmer " + getName() + " is debugging code in " + getProgrammingLanguage();
    }

}
```

**Explanation:**

extends Developer: This line indicates that the "Programmer" class inherits from the "Developer" class. It means that a 'Programmer' is a specialized type of 'Developer' and inherits all the attributes and methods of the Developer class.
public Programmer(String name, String address, double salary, String programmingLanguage): This is the constructor for the "Programmer" class. It takes parameters for 'name', 'address', 'salary', and 'programmingLanguage'. It passes these parameters to the constructor of the superclass (Developer) using the super(...) keyword to initialize the attributes inherited from the "Developer" class. The 'jobTitle' parameter is set to "Programmer" to indicate the specific job title for programmers.
@Override public double calculateBonus(): This method is marked with the @Override annotation, indicating that it is an overridden method from the superclass (Developer). The "calculateBonus()" method provides a custom implementation for bonus calculation for programmers. In this case, it calculates the bonus as 12% of the programmer's salary.
@Override public String generatePerformanceReport(): Similar to the "calculateBonus()" method, this method is also marked as an override and provides a custom implementation for generating a performance report for programmers. It returns a specific performance report message for programmers, including the programmer's name and an "Excellent" rating.
public function debugCode(): This is a custom method specific to the "Programmer" class. It simulates the action of a programmer debugging code in their specialized programming language by printing a message to the console.
//Main.php

```php
Manager manager = new Manager("Avril Aroldo", "1 ABC St", 80000.0, "Manager", 5);
Developer developer = new Developer("Iver Dipali", "2 PQR St", 72000.0, "Developer", "php");
Programmer programmer = new Programmer("Yaron Gabriel", "3 ABC St", 76000.0, "Python");

echo "Manager's Bonus: $" + manager.calculateBonus();
echo "Developer's Bonus: $" + developer.calculateBonus();
echo "Programmer's Bonus: $" + programmer.calculateBonus();

echo manager.generatePerformanceReport();
echo developer.generatePerformanceReport();
echo programmer.generatePerformanceReport();

manager.manageProject();
developer.writeCode();
programmer.debugCode();
```

**Explanation:**

Creating Employee Objects:
Three employee objects are created: 'manager', 'developer', and 'programmer', each with their specific attributes such as name, address, salary, and job title.
manager is an instance of the "Manager" class.
developer is an instance of the "Developer" class.
programmer is an instance of the "Programmer" class.
Calculating Bonuses:
The program calls the "calculateBonus()" method for each employee type (manager, developer, and programmer) to calculate their respective bonuses.
The bonuses are displayed on the console.
Generating Performance Reports:
The program calls the "generatePerformanceReport()" method for each employee type (manager, developer, and programmer) to generate performance reports.
The performance reports are displayed on the console.
Specific Actions:
For each employee type, specific actions are performed:
manager uses the "manageProject()" method to simulate managing a project.
developer uses the "writeCode()" method to simulate writing code in a specific programming language.
programmer uses the "debugCode()" method to simulate debugging code in a specific programming language.
These actions are displayed on the console.

### Sample Output:

```
Manager's Bonus: $12000.0
Developer's Bonus: $7200.0
Programmer's Bonus: $9120.0
Performance report for Manager Avril Aroldo: Excellent
Performance report for Developer Iver Dipali: Good
Performance report for Programmer Yaron Gabriel: Excellent
Manager Avril Aroldo is managing a project.
Developer Iver Dipali is writing code in php
Programmer Yaron Gabriel is debugging code in Python
```
