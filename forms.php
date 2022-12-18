<?php
$conn = new mysqli('localhost', 'totufbhh_UniBaSS', 'BarangayHolySpirit@00', 'totufbhh_wp1');

if (mysqli_connect_error())
{
	die ("Connection failed: ".mysqli_connect_error());
} else {
    echo "Connected to Database";
}




$UserID = $_GET['ID'];

$sql = "SELECT user_login FROM xhzqu0h8_users WHERE ID = '".$UserID."'";
$result = $conn->query($sql);
$conn->close();

$row = $result->fetch_assoc();
echo $row['user_login'];
/**
$current_user = wp_get_current_user();
$current_user_id = $current_user->ID;
echo $current_user_id;
**/
    ?>


<!DOCTYPE html>
<html lang="en">
<head></head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="Styles.css">
    
<meta charset="utf-8">
<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
        border-radius: 10px;
    }
    .red{ background: #D5D9D4; }
    .green{ background:#D5D9D4; }
    .blue{ background: #0000ff; }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
 

</script>   

  
</head>
<body onload="get_current_user_id()">
<script>
/**function get_current_user_id() {
    if ( ! function_exists( 'wp_get_current_user' ) ) {
        return 0;
    }
    $user = wp_get_current_user();
    return ( isset( $user->ID ) ? (int) $user->ID : 0 );
}  **/
</script>

    <div class ="container">
    <center><div>
        <select class =options>
            <option>Please select an option</option>
            <option value="a">Barangay Clearance Form</option>
            <option value="b">Barangay Identification Card</option>
            <option value="c">Certificate of Good Moral Character</option>
            <option value="d">Certificate of Indigency (Employed)</option>
            <option value="e">Certificate of Residency</option>
            <option value="f">Certificate of Residency for Deceased</option>
            <option value="g">Certification - No Objection (Wake)</option>
            <option value="h">Certification For Solo Parent</option>
            <option value="i">Certification on Foreign Nationals Registration</option>
            <option value="j">Deceased Form</option>
        </select>
    </div></center>
    <div class="a box">
        <h1>GET IN TOUCH</h1>
        <p>Have any questions or suggestions? Drop us a message</p>
        <form>
            <div class="row">
                <div class="column">
                    <label for="name">Last Name</label>
                    <input type="text" id="name" placeholder="Enter your last name">
                </div>
                <div class="column">
                    <label for="email">First Name</label>
                    <input type="email" id="email" placeholder="Enter your first name">
                </div>
                <div class="column">
                    <label for="email">Middle Name</label>
                    <input type="email" id="email" placeholder="Enter your middle name">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="Birthday">Birthday:</label>
                    <input type="date" id="birthday" name="Birthday">
                </div>
                <div class="column">
                    <label for="cars">Choose your gender:</label>
                    <select name="cars" id="cars">
                      <option value="volvo">Male</option>
                      <option value="saab">Female</option>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="email">First Name</label>
                    <input type="email" id="email" placeholder="Enter your first name">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">Describe your issue</label>
                    <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                </div>
            </div>
            <center>
            <button>Submit</button><center>
        </form></div>
        <div class="b box">
        <h1>GET IN TOUCH</h1>
        <p>Have any questions or suggestions? Drop us a message</p>
        <form>
            <div class="row">
                <div class="column">
                    <label for="name">Last Name</label>
                    <input type="text" id="name" placeholder="Enter your last name">
                </div>
                <div class="column">
                    <label for="email">First Name</label>
                    <input type="email" id="email" placeholder="Enter your first name">
                </div>
                <div class="column">
                    <label for="email">Middle Name</label>
                    <input type="email" id="email" placeholder="Enter your middle name">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="Your subject here">
                </div>
                <div class="column">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" placeholder="Your phone number here">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">Describe your issue</label>
                    <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                </div>
            </div> <center>
            <button>Submit</button><center>
        </form></div>
        <div class="c box">
            <h1>GET IN TOUCH</h1>
            <p>Have any questions or suggestions? Drop us a message</p>
            <form>
                <div class="row">
                    <div class="column">
                        <label for="name">Last Name</label>
                        <input type="text" id="name" placeholder="Enter your last name">
                    </div>
                    <div class="column">
                        <label for="email">First Name</label>
                        <input type="email" id="email" placeholder="Enter your first name">
                    </div>
                    <div class="column">
                        <label for="email">Middle Name</label>
                        <input type="email" id="email" placeholder="Enter your middle name">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" placeholder="Your subject here">
                    </div>
                    <div class="column">
                        <label for="contact">Contact Number</label>
                        <input type="tel" id="contact" placeholder="Your phone number here">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">Describe your issue</label>
                        <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                    </div>
                </div> <center>
                <button>Submit</button><center>
            </form></div>
            <div class="d box">
            <h1>GET IN TOUCH</h1>
            <p>Have any questions or suggestions? Drop us a message</p>
            <form>
                <div class="row">
                    <div class="column">
                        <label for="name">Last Name</label>
                        <input type="text" id="name" placeholder="Enter your last name">
                    </div>
                    <div class="column">
                        <label for="email">First Name</label>
                        <input type="email" id="email" placeholder="Enter your first name">
                    </div>
                    <div class="column">
                        <label for="email">Middle Name</label>
                        <input type="email" id="email" placeholder="Enter your middle name">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" placeholder="Your subject here">
                    </div>
                    <div class="column">
                        <label for="contact">Contact Number</label>
                        <input type="tel" id="contact" placeholder="Your phone number here">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <label for="issue">Describe your issue</label>
                        <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                    </div>
                </div> <center>
                <button>Submit</button><center>
            </form></div>
            <div class="e box">
                <h1>GET IN TOUCH</h1>
                <p>Have any questions or suggestions? Drop us a message</p>
                <form>
                    <div class="row">
                        <div class="column">
                            <label for="name">Last Name</label>
                            <input type="text" id="name" placeholder="Enter your last name">
                        </div>
                        <div class="column">
                            <label for="email">First Name</label>
                            <input type="email" id="email" placeholder="Enter your first name">
                        </div>
                        <div class="column">
                            <label for="email">Middle Name</label>
                            <input type="email" id="email" placeholder="Enter your middle name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" placeholder="Your subject here">
                        </div>
                        <div class="column">
                            <label for="contact">Contact Number</label>
                            <input type="tel" id="contact" placeholder="Your phone number here">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="issue">Describe your issue</label>
                            <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                        </div>
                    </div> <center>
                    <button>Submit</button><center>
                </form></div>
                <div class="f box">
                <h1>GET IN TOUCH</h1>
                <p>Have any questions or suggestions? Drop us a message</p>
                <form>
                    <div class="row">
                        <div class="column">
                            <label for="name">Last Name</label>
                            <input type="text" id="name" placeholder="Enter your last name">
                        </div>
                        <div class="column">
                            <label for="email">First Name</label>
                            <input type="email" id="email" placeholder="Enter your first name">
                        </div>
                        <div class="column">
                            <label for="email">Middle Name</label>
                            <input type="email" id="email" placeholder="Enter your middle name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" placeholder="Your subject here">
                        </div>
                        <div class="column">
                            <label for="contact">Contact Number</label>
                            <input type="tel" id="contact" placeholder="Your phone number here">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <label for="issue">Describe your issue</label>
                            <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                        </div>
                    </div> <center>
                    <button>Submit</button><center>
                </form></div>
                <div class="g box">
                    <h1>GET IN TOUCH</h1>
                    <p>Have any questions or suggestions? Drop us a message</p>
                    <form>
                        <div class="row">
                            <div class="column">
                                <label for="name">Last Name</label>
                                <input type="text" id="name" placeholder="Enter your last name">
                            </div>
                            <div class="column">
                                <label for="email">First Name</label>
                                <input type="email" id="email" placeholder="Enter your first name">
                            </div>
                            <div class="column">
                                <label for="email">Middle Name</label>
                                <input type="email" id="email" placeholder="Enter your middle name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" placeholder="Your subject here">
                            </div>
                            <div class="column">
                                <label for="contact">Contact Number</label>
                                <input type="tel" id="contact" placeholder="Your phone number here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="issue">Describe your issue</label>
                                <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                            </div>
                        </div> <center>
                        <button>Submit</button><center>
                    </form></div>
                    <div class="h box">
                    <h1>GET IN TOUCH</h1>
                    <p>Have any questions or suggestions? Drop us a message</p>
                    <form>
                        <div class="row">
                            <div class="column">
                                <label for="name">Last Name</label>
                                <input type="text" id="name" placeholder="Enter your last name">
                            </div>
                            <div class="column">
                                <label for="email">First Name</label>
                                <input type="email" id="email" placeholder="Enter your first name">
                            </div>
                            <div class="column">
                                <label for="email">Middle Name</label>
                                <input type="email" id="email" placeholder="Enter your middle name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" placeholder="Your subject here">
                            </div>
                            <div class="column">
                                <label for="contact">Contact Number</label>
                                <input type="tel" id="contact" placeholder="Your phone number here">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="issue">Describe your issue</label>
                                <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                            </div>
                        </div> <center>
                        <button>Submit</button><center>
                    </form></div>
                    <div class="i box">
                        <h1>GET IN TOUCH</h1>
                        <p>Have any questions or suggestions? Drop us a message</p>
                        <form>
                            <div class="row">
                                <div class="column">
                                    <label for="name">Last Name</label>
                                    <input type="text" id="name" placeholder="Enter your last name">
                                </div>
                                <div class="column">
                                    <label for="email">First Name</label>
                                    <input type="email" id="email" placeholder="Enter your first name">
                                </div>
                                <div class="column">
                                    <label for="email">Middle Name</label>
                                    <input type="email" id="email" placeholder="Enter your middle name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" placeholder="Your subject here">
                                </div>
                                <div class="column">
                                    <label for="contact">Contact Number</label>
                                    <input type="tel" id="contact" placeholder="Your phone number here">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="issue">Describe your issue</label>
                                    <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                                </div>
                            </div> <center>
                            <button>Submit</button><center>
                        </form></div>
                        <div class="j box">
                        <h1>GET IN TOUCH</h1>
                        <p>Have any questions or suggestions? Drop us a message</p>
                        <form>
                            <div class="row">
                                <div class="column">
                                    <label for="name">Last Name</label>
                                    <input type="text" id="name" placeholder="Enter your last name">
                                </div>
                                <div class="column">
                                    <label for="email">First Name</label>
                                    <input type="email" id="email" placeholder="Enter your first name">
                                </div>
                                <div class="column">
                                    <label for="email">Middle Name</label>
                                    <input type="email" id="email" placeholder="Enter your middle name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" placeholder="Your subject here">
                                </div>
                                <div class="column">
                                    <label for="contact">Contact Number</label>
                                    <input type="tel" id="contact" placeholder="Your phone number here">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <label for="issue">Describe your issue</label>
                                    <textarea id="issue" placeholder="Describe your issue in detail here" rows="3"></textarea>
                                </div>
                            </div> <center>
                            <button>Submit</button><center>
                        </form></div>
    <div class="blue box">You have selected <strong>blue option</strong> so i am here</div>
    </div>
</body>
</html>