<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = ["mike", "dustin", "will", "lucas", "max", "eleven"]; // Lengkapi di sini
    $adults = ["hopper", "nancy", "joyce", "jonathan", "murray"];
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    for ($i = 0; $i < count($kids); $i++) {
        echo "<li> $kids[$i] </li>";
    }
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    for ($i = 0; $i < count($adults); $i++) {
        echo "<li> $adults[$i] </li>";
    }
    // Lanjutkan

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
    */

    // Data Assosiatif Array
    $data = array(
        array(
            "name" => "Will Byers",
            "age" => "12",
            "aliases" => "Will the Wise",
            "status" => "Alive",
        ),

        array(
            "name" => "Mike Wheeler",
            "age" => "12",
            "aliases" => "Dugeon Master",
            "status" => "Alive",
        ),

        array(
            "name" => "Jim Hooper",
            "age" => "43",
            "aliases" => "Chief Hopper",
            "status" => "Deceased",
        ),

        array(
            "name" => "Eleven",
            "age" => "12",
            "aliases" => "El",
            "status" => "Alive",
        )
    );

    print_r($data); // MENAMPILKAN ARRAY
    /*
            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )
                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )
                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )
                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )
                )
        */
    ?>
</body>

</html>