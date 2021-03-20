<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Admission</title>
</head>

<body>

    <main class="admission-form">
        <div class="container">
            <div class="heading text-center p-5">
                <h1>Admission Form</h1>
            </div>
            <div class="main-box ">


                <form action="form.php" method="POST" enctype="multipart/form-data">


                    <div class="">

                        <div class="courses">
                            <h4>Courses <span class="text-danger">*</span></h4>
                            <div class="wrapper">
                                <div class="row radio_tabs">
                                    <label class="col-xl-3 col-md-6 radio_wrap " data-radio="radio_1">BSc Computer
                                        Science
                                        <input type="radio" class="input" name = "course" value="bsc">
                                        <span class="radio-mark">

                                        </span>
                                    </label>
                                    <label class="col-xl-3 col-md-6 radio_wrap " data-radio="radio_2"> BCA
                                        <input type="radio" class="input" name = "course" value="bca">
                                        <span class="radio-mark">

                                        </span>
                                    </label>
                                    <label class="col-xl-3 col-md-6 radio_wrap " data-radio="radio_3"> BBA
                                        <input type="radio" class="input" name = "course" value="bba">
                                        <span class="radio-mark">

                                        </span>
                                    </label>
                                    <label class="col-xl-3 col-md-6 radio_wrap " data-radio="radio_4"> BCom
                                        <input type="radio" class="input" name = "course" value="bcom">
                                        <span class="radio-mark">

                                        </span>
                                    </label>
                                </div>

                                <div class="content p-4">
                                    <div class="radio_content radio_1">
                                        <?php

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $databse = "admission";

                                        //Create Connection
                                        $conn = new mysqli($servername, $username, $password, $databse);

                                        $sql = "SELECT * FROM bsc_subject";
                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0){

                                            echo '<div class = "container text-primary text-center">';
                                            echo '<caption class="text-info"><b>BSC COMPUTER SCIENCE</b></caption>';
                                            echo '<table class="table table-condensed" > 
                                            <thead>
                                            <tr> 
                                                <td> <font size="4" face="Arial">Subject Code</font></td> 
                                                <td> <font size="4" face="Arial">Subject Name</font></td> 
                                            </tr> 
                                            </thead>';
                                       
                                        //output data of each row
                                        ?>
                                        <tbody>
                                            <?php
                                        while ($row = $result->fetch_assoc()) {
                                                $s_code = $row["s_code"];
                                                $s_name = $row["s_name"];
                                                                                        
                                                echo ' <tr> 
                                                          <td>'.$s_code.'</td> 
                                                          <td>'.$s_name.'</td> 
                                                        </tr> ';
                                            }
                                            ?>
                                        </tbody>
                                        <?php
                                            
                                            echo "</table>";
                                        } else{
                                            echo "0 Results";
                                        }
                                        echo "</div>";
                                            $conn->close();
                                       
                                        ?>

                                    </div>




                                    <div class="radio_content radio_2">
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $databse = "admission";
                                        
                                        //Create Connection
                                        $conn = new mysqli($servername, $username, $password, $databse);
                                        
                                        $sql = "SELECT * FROM bca_subject";
                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0){

                                            echo '<div class = "container text-primary text-center">';
                                            echo '<caption class="text-info"><b>BACHELORS IN COMPUTER APPLICATION</b></caption>';
                                            echo '<table class="table table-condensed" > 
                                            <thead>
                                            <tr> 
                                                <td> <font size="4" face="Arial">Subject Code</font></td> 
                                                <td> <font size="4" face="Arial">Subject Name</font></td> 
                                            </tr> 
                                            </thead>';
                                       
                                        //output data of each row
                                        ?>
                                        <tbody>
                                            <?php
                                        while ($row = $result->fetch_assoc()) {
                                                $s_code = $row["s_code"];
                                                $s_name = $row["s_name"];
                                                                                        
                                                echo ' <tr> 
                                                          <td>'.$s_code.'</td> 
                                                          <td>'.$s_name.'</td> 
                                                        </tr> ';
                                            }
                                            ?>
                                        </tbody>
                                        <?php
                                            
                                            echo "</table>";
                                        } else{
                                            echo "0 Results";
                                        }
                                        echo "</div>";
                                            $conn->close();
                                        
                                        ?>

                                    </div>


                                    <div class="radio_content radio_3">
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $databse = "admission";
                                        
                                        //Create Connection
                                        $conn = new mysqli($servername, $username, $password, $databse);
                                        
                                        $sql = "SELECT * FROM bsc_subject";
                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0){

                                            echo '<div class = "container text-primary text-center">';
                                            echo '<caption class="text-info"><b>Bachelors in Business Administration</b></caption>';
                                            echo '<table class="table table-condensed" > 
                                            <thead>
                                            <tr> 
                                                <td> <font size="4" face="Arial">Subject Code</font></td> 
                                                <td> <font size="4" face="Arial">Subject Name</font></td> 
                                            </tr> 
                                            </thead>';
                                       
                                        //output data of each row
                                        ?>
                                        <tbody>
                                            <?php
                                        while ($row = $result->fetch_assoc()) {
                                                $s_code = $row["s_code"];
                                                $s_name = $row["s_name"];
                                                                                        
                                                echo ' <tr> 
                                                          <td>'.$s_code.'</td> 
                                                          <td>'.$s_name.'</td> 
                                                        </tr> ';
                                            }
                                            ?>
                                        </tbody>
                                        <?php
                                            
                                            echo "</table>";
                                        } else{
                                            echo "0 Results";
                                        }
                                        echo "</div>";
                                            $conn->close();
                                       
                                        ?>

                                    </div>


                                    <div class="radio_content radio_4">
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $databse = "admission";
                                        
                                        //Create Connection
                                        $conn = new mysqli($servername, $username, $password, $databse);
                                        
                                        $sql = "SELECT * FROM bca_subject";
                                        $result = $conn->query($sql);

                                        if($result->num_rows > 0){

                                            echo '<div class = "container text-primary text-center">';
                                            echo '<caption class="text-info"><b>Bachelors in Commerce</b></caption>';
                                            echo '<table class="table table-condensed" > 
                                            <thead>
                                            <tr> 
                                                <td> <font size="4" face="Arial">Subject Code</font></td> 
                                                <td> <font size="4" face="Arial">Subject Name</font></td> 
                                            </tr> 
                                            </thead>';
                                       
                                        //output data of each row
                                        ?>
                                        <tbody>
                                            <?php
                                        while ($row = $result->fetch_assoc()) {
                                                $s_code = $row["s_code"];
                                                $s_name = $row["s_name"];
                                                                                        
                                                echo ' <tr> 
                                                          <td>'.$s_code.'</td> 
                                                          <td>'.$s_name.'</td> 
                                                        </tr> ';
                                            }
                                            ?>
                                        </tbody>
                                        <?php
                                            
                                            echo "</table>";
                                        } else{
                                            echo "0 Results";
                                        }
                                        echo "</div>";
                                            $conn->close();
                                       
                                        ?>

                                    </div>


                                </div>



                            </div>

                        </div>
                        <!-- course selection -->

                        <!-- For informations -->

                        <div class="basic-info container">
                            <h4>Personal Informations <span class="text-danger">*</span></h4>
                            <div class="user-details">
                                <div class="row pb-5">
                                    <div class=" col-xl-6 col-12 input-box">
                                        <span class="details">Name of Student</span>
                                        <input type="text" placeholder="Enter your name" name="Name" required
                                            autocomplete="off"> (Name as
                                        per 12th
                                        Marksheet*)
                                    </div>

                                    <div class="col-xl-6 col-12 input-box">
                                        <span class="details">Mother's Name</span>
                                        <input type="text" placeholder="Enter Mother's Name" name="MotherName" required
                                            autocomplete="off">
                                    </div>

                                    <div class="col-xl-6 col-12 input-box">
                                        <span class="details">Eligibility Number</span>
                                        <input type="text" placeholder="Eligibility Number" name="EligibilityNo"
                                            pattern="[1-9]{1}[0-9]{11}" required id="e_no" autocomplete="off">
                                    </div>

                                    <div class="col-xl-6 col-12 input-box-radio">
                                        <span class="details-radio">Gender</span><br>
                                        <input type="radio" name="Gender" value="Male" required>male
                                        <input type="radio" name="Gender" value="Female" required>Female
                                    </div>

                                    <div class="col-xl-6 col-12 input-box">
                                        <span class="details">Mobile Number</span>
                                        <input type="tel" placeholder="Mobile Number" name="MobileNo"
                                            pattern="[1-9]{1}[0-9]{9}" required autocomplete="off">
                                    </div>
                                    <div class="col-xl-6 col-12 input-box">
                                        <span class="details">Parent's Mobile Number</span>
                                        <input type="text" placeholder="Parent's Mobile Number" name="ParentNo"
                                            pattern="[1-9]{1}[0-9]{9}" required autocomplete="off">
                                    </div>

                                    <div class="col-xl-6 col-12 input-box">
                                        <span class="details">Email Id</span>
                                        <input type="email" placeholder="Email Id" name="Email" required
                                            autocomplete="off">
                                    </div>
                                    <div class="col-xl-6 col-12 input-box">
                                        <span class="details">WhatsApp Number</span>
                                        <input type="text" placeholder="WhatsApp Number" name="WhatsappNo"
                                            pattern="[1-9]{1}[0-9]{9}" required autocomplete="off">
                                    </div>

                                    <div class="col-xl-6 col-12 input-box">
                                        <span class="details">Address</span>
                                        <input type="text" placeholder="Address" name="Address" required
                                            autocomplete="off">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="sports container">
                            <h4>Extracurricular activities (If any)</h4>
                            <div class="user-details row">
                                <div class="input-box-radio col-xl-6 col-12">
                                    <span class="details-radio">Sports Certificate international / National / State
                                        Level</span><br>
                                    <input type="radio" name="Sports" value="Yes">Yes
                                    <input type="radio" name="Sports" value="No">No
                                    <br>
                                    <p>If yes then upload document,</p>
                                    <input type="file" name="SportsFile">
                                </div>

                                <div class="input-box-radio col-xl-6 col-12">
                                    <span class="details-radio">Participated in NCC / NSS / Scout</span><br>
                                    <input type="radio" name="Others" value="Yes">Yes
                                    <input type="radio" name="Others" value="No">No
                                    <br>
                                    <p>If yes then upload document,</p>
                                    <input type="file" name="OthersFile">
                                </div>
                            </div>
                        </div>

                        <div class="educational container pt-5">
                            <h4>Educational Qualification <span class="text-danger">*</span></h4>
                            <div class="user-details">
                                <div class="row pb-5">
                                <div class="input-box-radio col-xl-6 col-12">
                                    <span class="details-radio">Upload your 12th Marksheet <span class="text-danger">*</span></span><br>
                                    <input type="file" name="HscFile" required>
                                </div>
                                    <div class=" col-xl-6 col-12 input-box">
                                        <span class="details">Board</span>
                                        <input type="text" placeholder="Board" name="Board" required autocomplete="off">
                                    </div>
                                    <div class="col-xl-6 col-12 input-box">
                                <span class="details">Seat Number</span>
                                <input type="text" placeholder="Seat Number" name="SeatNo" required autocomplete="off">
                            </div>

                            <div class="col-xl-6 col-12 input-box">
                                <span class="details">Total Score</span>
                                <input type="text" placeholder="Total Score" name="TScore" required autocomplete="off">
                            </div>

                            <div class="col-xl-6 col-12 input-box">
                                <span class="details">Maximum Marks</span>
                                <input type="text" placeholder="Maximum Marks" name="MaxMark" required autocomplete="off">
                            </div>

                            <div class="col-xl-6 col-12 input-box">
                                <span class="details">Percentage</span>
                                <input type="text" placeholder="Percentage" name="Percentage" required autocomplete="off">
                            </div>

                                </div>
                            </div>
                        </div>

                        <div class="submit-btn">
                            <input type="submit" name="submit" class="submit-click-btn" value="submit">

                        </div>

                        

                    </div>
                </form>
            </div>


        </div>

    </main>


    <script>
        $(document).ready(function () {
            $(".content .radio_content").hide();
            $(".radio_wrap").click(function () {
                var current_radio = $(this).attr("data-radio");
                $(".content .radio_content").hide();
                $("." + current_radio).show();
            })
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>