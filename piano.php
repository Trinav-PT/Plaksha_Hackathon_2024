<?php include 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Database App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://assets.classicfm.com/2017/01/piano-v4r-1483624599-editorial-long-form-0.jpg');
            background-size: cover;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: relative;
            height: 200px;
            /* Set the height according to your image */

            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: relative;
        }

        /* header img {
            width: 110px; 
            height: auto;
            position: absolute;
            top: 50%;
            left: 10px; 
            transform: translateY(-50%);
        } */
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        section {
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: whitesmoke;
            font-weight: bold;
            font-size: larger;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4CAF50;
            color: rgb(10, 10, 10);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h1 {
            font-family: 'Pacifico', cursive, sans-serif;
        }

        h2 {
            color: rgb(170, 34, 34);
        }
    </style>
</head>

<body>
    <header>
        <!-- <img src="https://i.pinimg.com/originals/cd/57/06/cd57061dceb63dcd117b2c3f225bc5ae.jpg" alt="Piano Icon">  -->
        <h1>Find The Key to your Musical Heart</h1>
    </header>
    <nav>
        <a href="#">Find the Perfect Piece to Learn</a>
    </nav>
    <section>
        <div class="container">
            <h2>Search Pieces</h2>
            <form id="searchTrackForm" method="POST">
                <label for="searchTitle">Piece Title:</label>
                <input class="form-control" type="text" id="searchTitle" name="searchTitle">
                <label for="searchComposer">Composed By:</label>
                <input class="form-control" type="text" id="searchComposer" name="searchComposer">
                <label for="searchGenre">Genre:</label>
                <select class="form-select" name="searchGenre" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="Classical">Classical</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                </select>
                <label for="searchKey">Key:</label>
                <select class="form-select" id="searchKey" name="searchKey" aria-label="Default select example">

                    <!-- <option value="Any">Any</option> -->
                    <<option selected>Open this select meny</option>
                        <option value="Major">Any Major</option>
                        <option value="Minor">Any Minor</option>
                        <option value="C">C Major</option>
                        <option value="Cm">C Minor</option>
                        <option value="C#">C# Major</option>
                        <option value="C#m">C# Minor</option>
                        <option value="Db">Db Major</option>
                        <option value="Dbm">Db Minor</option>
                        <option value="D">D Major</option>
                        <option value="Dm">D Minor</option>
                        <option value="D#">D# Major</option>
                        <option value="D#m">D# Minor</option>
                        <option value="Eb">Eb Major</option>
                        <option value="Ebm">Eb Minor</option>
                        <option value="E">E Major</option>
                        <option value="Em">E Minor</option>
                        <option value="F">F Major</option>
                        <option value="Fm">F Minor</option>
                        <option value="F#">F# Major</option>
                        <option value="F#m">F# Minor</option>
                        <option value="Gb">Gb Major</option>
                        <option value="Gbm">Gb Minor</option>
                        <option value="G">G Major</option>
                        <option value="Gm">G Minor</option>
                        <option value="G#">G# Major</option>
                        <option value="G#m">G# Minor</option>
                        <option value="Ab">Ab Major</option>
                        <option value="Abm">Ab Minor</option>
                        <option value="A">A Major</option>
                        <option value="Am">A Minor</option>
                        <option value="A#">A# Major</option>
                        <option value="A#m">A# Minor</option>
                        <option value="Bb">Bb Major</option>
                        <option value="Bbm">Bb Minor</option>
                        <option value="B">B Major</option>
                        <option value="Bm">B Minor</option>
                        <!-- Add more options for other keys -->
                </select>


                <label for="searchDifficulty">Difficulty Rating:</label>
                <select class="form-control" id="searchDifficulty" name="searchDifficulty" aria-label="Default select example">
                    <option value="">Select Difficulty</option>
                    <option value="1">1 (Beginner)</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5 (Advanced)</option>
                </select>

                <button class="btn btn-danger form-control mt-4" type="submit">Search</button>
            </form>
            <?php
            /*
            if (isset($_POST['searchComposer'])) {
                $name = $_POST['searchComposer'];

                $query_composoer = "SELECT Composer FROM pianodb WHERE Composer LIKE '%$name%'";
                $query_composoer_run = mysqli_query($conn, $query_composoer);

                while ($row = mysqli_fetch_array($query_composoer_run)) {
            ?>
                    <form action="" method="POST">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Composer</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Key</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Difficulty</th>
                                    <th scope="col">youtube link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['Name'] ?></td>
                                    <td><?php echo $row['Composer'] ?></td>
                                    <td><?php echo $row['Genre'] ?></td>
                                    <td><?php echo $row['PKey'] ?></td>
                                    <td><?php echo $row['PublishDate'] ?></td>
                                    <td><?php echo $row['Difficulty'] ?></td>
                                    <td><?php echo $row['YTubeLink'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <input type="text" name="searchTitle" value="<?php echo $row['Name']; ?>"> -->
                    </form>
                <?php
                }
            }
            if (isset($_POST['searchTitle'])) {
                $name = $_POST['searchTitle'];
                // SELECT * FROM pianodb WHERE Name LIKE '%nocturne%';
                $query_title = "SELECT * FROM pianodb WHERE Name LIKE '%$name%'";
                $query_title_run = mysqli_query($conn, $query_title);


                while ($row = mysqli_fetch_array($query_title_run)) {
                ?>
                    <form action="" method="POST">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Composer</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Key</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Difficulty</th>
                                    <th scope="col">youtube link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['Name'] ?></td>
                                    <td><?php echo $row['Composer'] ?></td>
                                    <td><?php echo $row['Genre'] ?></td>
                                    <td><?php echo $row['PKey'] ?></td>
                                    <td><?php echo $row['PublishDate'] ?></td>
                                    <td><?php echo $row['Difficulty'] ?></td>
                                    <td><?php echo $row['YTubeLink'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <input type="text" name="searchTitle" value="<?php echo $row['Name']; ?>"> -->
                    </form>
            <?php
                }
            }
            */
            ?>

            <?php
            // Search by Composer
            if (isset($_POST['searchComposer']) && !empty($_POST['searchComposer'])) {
                // Ensure that composer name is not empty
                $composerName = $_POST['searchComposer'];
                $query = "SELECT * FROM pianodb WHERE Composer LIKE ?";
                if ($stmt = $conn->prepare($query)) {
                    $likeComposerName = "%" . $composerName . "%";
                    $stmt->bind_param("s", $likeComposerName);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        echo '<table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Composer</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Key</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Difficulty</th>
                                        <th scope="col">Youtube Link</th>
                                    </tr>
                                </thead>
                                <tbody>';
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['Name']}</td>
                                    <td>{$row['Composer']}</td>
                                    <td>{$row['Genre']}</td>
                                    <td>{$row['PKey']}</td>
                                    <td>{$row['PublishDate']}</td>
                                    <td>{$row['Difficulty']}</td>
                                    <td><a href='{$row['YTubeLink']}' target='_blank'>Link</a></td>
                                  </tr>";
                        }
                        echo '</tbody></table>';
                    } else {
                        echo 'No results found for the specified composer.';
                    }
                    $stmt->close();
                } else {
                    echo "Couldn't prepare statement.";
                }
            }

            // Ensure that if searchTitle is set, searchComposer is not set or empty
            if (isset($_POST['searchTitle']) && !empty($_POST['searchTitle']) && (empty($_POST['searchComposer']))) {
                $title = $_POST['searchTitle'];
                $query = "SELECT * FROM pianodb WHERE Name LIKE ?";
                if ($stmt = $conn->prepare($query)) {
                    $likeTitle = "%" . $title . "%";
                    $stmt->bind_param("s", $likeTitle);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows === 0) {
                        echo 'No results found for the specified title.';
                    } else {
                        while ($row = $result->fetch_assoc()) {
                            if (!isset($displayedResultsTable)) {
                                echo '<table class="table table-dark table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Composer</th>
                                                <th scope="col">Genre</th>
                                                <th scope="col">Key</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">Difficulty</th>
                                                <th scope="col">Youtube Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                $displayedResultsTable = true;
                            }
                            echo "<tr>
                                    <td>{$row['Name']}</td>
                                    <td>{$row['Composer']}</td>
                                    <td>{$row['Genre']}</td>
                                    <td>{$row['PKey']}</td>
                                    <td>{$row['PublishDate']}</td>
                                    <td>{$row['Difficulty']}</td>
                                    <td><a href='{$row['YTubeLink']}' target='_blank'>Link</a></td>
                                  </tr>";
                        }
                        if (isset($displayedResultsTable)) {
                            echo '</tbody></table>';
                        }
                    }
                    $stmt->close();
                } else {
                    echo "Couldn't prepare statement for title search.";
                }
            }

            // Search by Genre
            if (isset($_POST['searchGenre']) && !empty($_POST['searchGenre'])) {
                $genreName = $_POST['searchGenre'];
                $query = "SELECT * FROM pianodb WHERE Genre = ?";
                if ($stmt = $conn->prepare($query)) {
                    $stmt->bind_param("s", $genreName);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        echo '<table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Composer</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Key</th>
                            <th scope="col">Year</th>
                            <th scope="col">Difficulty</th>
                            <th scope="col">Youtube Link</th>
                        </tr>
                    </thead>
                    <tbody>';
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                        <td>{$row['Name']}</td>
                        <td>{$row['Composer']}</td>
                        <td>{$row['Genre']}</td>
                        <td>{$row['PKey']}</td>
                        <td>{$row['PublishDate']}</td>
                        <td>{$row['Difficulty']}</td>
                        <td><a href='{$row['YTubeLink']}' target='_blank'>Link</a></td>
                      </tr>";
                        }
                        echo '</tbody></table>';
                    } else {
                        echo 'No results found for the specified genre.';
                    }
                    $stmt->close();
                } else {
                    echo "Couldn't prepare statement for genre search.";
                }
            }

            // Search by Key
            if (isset($_POST['searchKey']) && !empty($_POST['searchKey'])) {
                $keyName = $_POST['searchKey'];

                // Correcting the query to match the exact column name as in your database
                $query = "SELECT * FROM pianodb WHERE PKey = ?"; // Ensure 'PKey' matches the column name exactly

                if ($stmt = $conn->prepare($query)) {
                    // Binding the parameter correctly
                    $stmt->bind_param("s", $keyName); // 's' for string since key names are usually strings like 'C Major', 'D Minor', etc.

                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        echo '<table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Composer</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Key</th>
                            <th scope="col">Year</th>
                            <th scope="col">Difficulty</th>
                            <th scope="col">Youtube Link</th>
                        </tr>
                    </thead>
                    <tbody>';

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                        <td>{$row['Name']}</td>
                        <td>{$row['Composer']}</td>
                        <td>{$row['Genre']}</td>
                        <td>{$row['PKey']}</td>
                        <td>{$row['PublishDate']}</td>
                        <td>{$row['Difficulty']}</td>
                        <td><a href='{$row['YTubeLink']}' target='_blank'>Link</a></td>
                      </tr>";
                        }
                        echo '</tbody></table>';
                    } else {
                        echo 'No results found for the specified key.';
                    }
                    $stmt->close();
                } else {
                    echo "Couldn't prepare statement for key search.";
                }
            }


            // Search by Difficulty Rating
            if (isset($_POST['searchDifficulty']) && $_POST['searchDifficulty'] != '') {
                $difficultyRating = $_POST['searchDifficulty'];
                $query = "SELECT * FROM pianodb WHERE Difficulty = ?";
                if ($stmt = $conn->prepare($query)) {
                    $stmt->bind_param("i", $difficultyRating); // Assuming Difficulty is stored as an integer
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        echo '<table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Composer</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Key</th>
                        <th scope="col">Year</th>
                        <th scope="col">Difficulty</th>
                        <th scope="col">Youtube Link</th>
                    </tr>
                </thead>
                <tbody>';
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                    <td>{$row['Name']}</td>
                    <td>{$row['Composer']}</td>
                    <td>{$row['Genre']}</td>
                    <td>{$row['PKey']}</td>
                    <td>{$row['PublishDate']}</td>
                    <td>{$row['Difficulty']}</td>
                    <td><a href='{$row['YTubeLink']}' target='_blank'>Link</a></td>
                  </tr>";
                        }
                        echo '</tbody></table>';
                    } else {
                        echo 'No results found for the specified difficulty rating.';
                    }
                    $stmt->close();
                } else {
                    echo "Couldn't prepare statement for difficulty rating search.";
                }
            }

            ?>

            <div id="searchResults"></div>
        </div>
    </section>
    <footer>
        <p>&copy; Team Snack Bytes</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>