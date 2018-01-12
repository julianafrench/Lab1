<!--
 Created by PhpStorm.
 User: Juliana French
 Date: 2018-01-11
 Time: 2:43 PM
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();

        // add some students
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@brainiacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $third = new Student();
        $third->surname = "French";
        $third->first_name = "Juliana";
        $third->add_email('home', 'juliana@doesntspeakfrench.ca');
        $third->add_grade(95);
        $third->add_grade(60);
        $third->add_grade(85);
        $students['k789'] = $third;

        // sort by key
        ksort($students);

        // display students
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>

