<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>COMP4711 Lab01</title>
    </head>
    <body>
        <?php
        // Import PHP Student class
        include('Student.php');

        // Initialize array of Student objects
        $students = array();

        // Add Student #1
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        // Add Student #2
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        // Add Student #3
        $third = new Student();
        $third->surname = "Tong";
        $third->first_name = "Li-Yan";
        $third->add_email('home', 'li@home.com');
        $third->add_email('school', 'li@bcit.ca');
        $third->add_grade(95);
        $third->add_grade(80);
        $third->add_grade(90);
        $students['b789'] = $third;

        // Sort Students by first name
        ksort($students);

        // Print Students on Page seperated by horizontal divider
        foreach ($students as $student) {
            echo $student->toString();
            echo "<hr>";
        }
        ?>
    </body>
</html>
