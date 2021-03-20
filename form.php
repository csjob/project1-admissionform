<?php

$servername = "localhost";
$username = "root";
$password = "";
$databse = "admission";

//Create Connection
$conn = new mysqli($servername, $username, $password, $databse);


$choice = $_POST['course'];

switch($choice)
{
    case "bsc":

            if($conn === false){ 
                die("ERROR: Could not connect. " 
                . mysqli_connect_error()); 
            } 
                //taking values

                $Name = $_POST['Name'];
                $MotherName = $_POST['MotherName'];
                $EligibilityNo = $_POST['EligibilityNo'];
                $Gender = $_POST['Gender'];
                $MobileNo = $_POST['MobileNo'];
                $ParentNo = $_POST['ParentNo'];
                $Email = $_POST['Email'];
                $WhatsappNo = $_POST['WhatsappNo'];
                $Address = $_POST['Address'];
                $Sports = $_POST['Sports'];
                $SportsFile = $_FILES['SportsFile'];
                $Others = $_POST['Others'];
                $OthersFile = $_FILES['OthersFile'];
                $HscFile = $_FILES['HscFile'];
                $Board = $_POST['Board'];
                $SeatNo = $_POST['SeatNo'];
                $TScore = $_POST['TScore'];
                $MaxMark = $_POST['MaxMark'];
                $Percentage = $_POST['Percentage'];
                

                $SportsFileName = $_FILES['SportsFile']['name'];
                $sportsTemp = $_FILES['SportsFile']['tmp_name'];
                $SportsFileNewName = time().$SportsFileName;
                $SportsFileDestination = 'sports-upload/bsc-upload/'.$SportsFileNewName;
                move_uploaded_file($sportsTemp, $SportsFileDestination);

                $OthersFileName = $_FILES['OthersFile']['name'];
                $othersTemp = $_FILES['OthersFile']['tmp_name'];
                $OthersFileNewName = time().$OthersFileName;
                $OthersFileDestination = 'others-upload/bsc-upload/'.$OthersFileNewName;
                move_uploaded_file($othersTemp, $OthersFileDestination);

                $HscFileName = $_FILES['HscFile']['name'];
                $hscTemp = $_FILES['HscFile']['tmp_name'];
                $HscFileNewName = time().$HscFileName;
                $HscFileDestination = 'hsc-upload/bsc-upload/'.$HscFileNewName;
                move_uploaded_file($hscTemp, $HscFileDestination);

               


                $sql = "INSERT INTO `bsc_admission` (`Id`, `Name`, `MotherName`, `EligibilityNo`, 
                `Gender`, `MobileNo`, `ParentNo`, `Email`, `WhatsappNo`, `Address`, `Sports`, 
                `SportsFile`, `Others`, `OthersFile`, `HscFile`, `Board`, `SeatNo`, `TScore`, 
                `MaxMark`, `Percentage`) VALUES 
                (NULL, '$Name', '$MotherName', '$EligibilityNo', '$Gender', '$MobileNo', '$ParentNo',
                '$Email', '$WhatsappNo', '$Address', '$Sports', '$SportsFileDestination', '$Others', '$OthersFileDestination',
                '$HscFileDestination', '$Board', '$SeatNo', '$TScore', '$MaxMark', '$Percentage')";

                    if(mysqli_query($conn, $sql)){
                        echo "data succesfully stored to table BSC";
                    }
                    else{
                        echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn); 
                    }

                    break;


            case "bca":
                if($conn === false){ 
                    die("ERROR: Could not connect. " 
                    . mysqli_connect_error()); 
                } 
                    //taking values
    
                    $Name = $_POST['Name'];
                    $MotherName = $_POST['MotherName'];
                    $EligibilityNo = $_POST['EligibilityNo'];
                    $Gender = $_POST['Gender'];
                    $MobileNo = $_POST['MobileNo'];
                    $ParentNo = $_POST['ParentNo'];
                    $Email = $_POST['Email'];
                    $WhatsappNo = $_POST['WhatsappNo'];
                    $Address = $_POST['Address'];
                    $Sports = $_POST['Sports'];
                    $SportsFile = $_FILES['SportsFile'];
                    $Others = $_POST['Others'];
                    $OthersFile = $_FILES['OthersFile'];
                    $HscFile = $_FILES['HscFile'];
                    $Board = $_POST['Board'];
                    $SeatNo = $_POST['SeatNo'];
                    $TScore = $_POST['TScore'];
                    $MaxMark = $_POST['MaxMark'];
                    $Percentage = $_POST['Percentage'];
                    
    
                    $SportsFileName = $_FILES['SportsFile']['name'];
                    $sportsTemp = $_FILES['SportsFile']['tmp_name'];
                    $SportsFileNewName = time().$SportsFileName;
                    $SportsFileDestination = 'sports-upload/bca-upload/'.$SportsFileNewName;
                    move_uploaded_file($sportsTemp, $SportsFileDestination);
    
                    $OthersFileName = $_FILES['OthersFile']['name'];
                    $othersTemp = $_FILES['OthersFile']['tmp_name'];
                    $OthersFileNewName = time().$OthersFileName;
                    $OthersFileDestination = 'others-upload/bca-upload/'.$OthersFileNewName;
                    move_uploaded_file($othersTemp, $OthersFileDestination);
    
                    $HscFileName = $_FILES['HscFile']['name'];
                    $hscTemp = $_FILES['HscFile']['tmp_name'];
                    $HscFileNewName = time().$HscFileName;
                    $HscFileDestination = 'hsc-upload/bca-upload/'.$HscFileNewName;
                    move_uploaded_file($hscTemp, $HscFileDestination);
    
                   
    
    
                    $sql = "INSERT INTO `bca_admission` (`Id`, `Name`, `MotherName`, `EligibilityNo`, 
                    `Gender`, `MobileNo`, `ParentNo`, `Email`, `WhatsappNo`, `Address`, `Sports`, 
                    `SportsFile`, `Others`, `OthersFile`, `HscFile`, `Board`, `SeatNo`, `TScore`, 
                    `MaxMark`, `Percentage`) VALUES 
                    (NULL, '$Name', '$MotherName', '$EligibilityNo', '$Gender', '$MobileNo', '$ParentNo',
                    '$Email', '$WhatsappNo', '$Address', '$Sports', '$SportsFileDestination', '$Others', '$OthersFileDestination',
                    '$HscFileDestination', '$Board', '$SeatNo', '$TScore', '$MaxMark', '$Percentage')";
    
                        if(mysqli_query($conn, $sql)){
                            echo "data succesfully stored to table BCA";
                        }
                        else{
                            echo "ERROR: Hush! Sorry $sql. " 
                            . mysqli_error($conn); 
                        }
    
                        break;
    
    

            case "bba":
                if($conn === false){ 
                    die("ERROR: Could not connect. " 
                    . mysqli_connect_error()); 
                    echo "connection to data 2";
                } 
                break;
            case "bcom":
                if($conn === false){ 
                    die("ERROR: Could not connect. " 
                    . mysqli_connect_error()); 
                    echo "connection to data 2";
                } 
                break;



}

?>