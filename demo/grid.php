<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        article {
            border: 1px solid black;
            border-radius: 0.5em;
            padding: 1em;
            margin: 0.5em;
        }

        table {
            border: 1px solid black;
        }
        thead{
            display:none;
        }
        tbody {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
        td {
            display: block;
        }
        .id::before {
            content: "ID: ";
            font-weight: bold;
        }
        .pet::before {
            content: "Pet: ";
            font-weight: bold;
        }
        .age::before {
            content: "Age: ";
            font-weight: bold;
        }
        .description::before {
            content: "Description: ";
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>

    <!-- <article><section>ID</section>
<section>Name</section>
<section>Age</section>
<section>Description</section>
</article> -->
<article>
<section class="id">1</section>
<section class="pet">Cat</section>
<section class="age">12-18 years</section>
<section class="description">Cats, small carnivorous mammals known as Felis catus, are agile and independent companions. With diverse breeds and sleek bodies, they're skilled groomers and climbers, forming strong bonds with humans. Expressive through vocalizations and body language, c</section>
</article><article>
<section class="id">2</section>
<section class="pet">Dog</section>
<section class="age">10-13 years</section>
<section class="description">Dogs, or Canis lupus familiaris, are loyal and diverse companions. With various breeds, they range in size, coat, and temperament. Known for their social nature, dogs form strong bonds with humans, providing loyalty and companionship. As omnivores, they th</section>
</article><article>
<section>3</section>
<section>Parrot</section>
<section>20-30 years</section>
<section>Colorful bird known for its ability to mimic human speech.</section>
</article><article>
<section>4</section>
<section>Turtle</section>
<section>20-50 years</section>
<section>Reptile with a protective shell, often kept as a pet in terrariums</section>
</article><article>
<section>5</section>
<section>Hamster</section>
<section>2-3 years</section>
<section>Small rodent commonly kept as a pocket pet.</section>
</article><article>
<section>6</section>
<section>Snake</section>
<section>Varies by species (e.g., 15-30 years)</section>
<section>Reptile with a long, flexible body, often kept as a pet in terrariums.</section>
</article>
    </div>

    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
                        <td>1</td>
                        <td>Cat</td>
                        <td>12-18 years</td>
                        <td>Cats, small carnivorous mammals known as Felis catus, are agile and independent companions. With diverse breeds and sleek bodies, they're skilled groomers and climbers, forming strong bonds with humans. Expressive through vocalizations and body language, c</td>
                    </tr><tr>
                        <td>2</td>
                        <td>Dog</td>
                        <td>10-13 years</td>
                        <td>Dogs, or Canis lupus familiaris, are loyal and diverse companions. With various breeds, they range in size, coat, and temperament. Known for their social nature, dogs form strong bonds with humans, providing loyalty and companionship. As omnivores, they th</td>
                    </tr><tr>
                        <td>3</td>
                        <td>Parrot</td>
                        <td>20-30 years</td>
                        <td>Colorful bird known for its ability to mimic human speech.</td>
                    </tr><tr>
                        <td>4</td>
                        <td>Turtle</td>
                        <td>20-50 years</td>
                        <td>Reptile with a protective shell, often kept as a pet in terrariums</td>
                    </tr><tr>
                        <td>5</td>
                        <td>Hamster</td>
                        <td>2-3 years</td>
                        <td>Small rodent commonly kept as a pocket pet.</td>
                    </tr><tr>
                        <td>6</td>
                        <td>Snake</td>
                        <td>Varies by species (e.g., 15-30 years)</td>
                        <td>Reptile with a long, flexible body, often kept as a pet in terrariums.</td>
                    </tr>    </tbody>
</table>
</body>
</html>