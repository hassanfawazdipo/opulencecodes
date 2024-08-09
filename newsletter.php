<?php
include('connection.php');
                        if (isset($_POST['Subscribe'])) {
                            $email = $_POST['email'];

                            $query = "INSERT INTO news_letter(email)VALUES('$email')";
                            $result = mysqli_query($conn, $query);
                            header('location: index.php');
                        }
                        ?>