<h1>Dashboard</h1>

<a href="index.php?controller=logout">Logout</a>

<h2>Cats</h2>
<section>
    <?php
        include_once("controllers/controller-cat.php");
        foreach($cats as $cat) {
            echo "<p>" . $cat->name . "</p>";
        }
    ?>
</section>
<h2>Dogs</h2>
<section>
    <?php
        include_once("controllers/controller-dog.php");
        foreach($dogs as $dog) {
            echo "<p>" . $dog->name . "</p>";
        }
    ?>
</section>