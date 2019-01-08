<?php

$platform = $_POST['platform'];
$platformFinal = $_POST['platformFinal'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pincode = $_POST['pincode'];
$skype = $_POST['skype'];
$company = $_POST['company'];
$fname = $_POST['fname'];
$nda = $_POST['nda'];

$firstname = explode(" ", $fname);

$project = $_POST['project'];
$budget = $_POST['budget'];
$budgetFinal = $_POST['budgetFinal'];
$startdate = $_POST['startdate'];
$dateFinal = $_POST['dateFinal'];

$filename1 = $_FILES['uploaddata']['tmp_name'];

$filename1 = $_FILES['uploaddata']['name'];
$destination = "upload/" . $filename1;
move_uploaded_file($_FILES['uploaddata']['tmp_name'], $destination);

$body = '
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no" />
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <!-- disable auto telephone linking in iOS test -->
    <style type="text/css">
        .row {
            width: 100%;
            display: flex;
            margin-bottom: 20px;
        }

        .fakebg {
            background-image: url("http://test.terasol.in/nitin/enquiryform/img/mailbg.jpg");
            background-repeat: no-repeat;
            background-size: 150%;
            padding: 2.5rem 0;
        }

        .col-50 {
            display: inline-block;
            width: 50%;
        }
        .col-100 {
            display: inline-block;
            width: 100%;
        }

        .mailbody {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
        }

        .mailtitle {
            background-color: #26cad3;
            text-align: center;
            padding: 1.5rem;
            border-radius: 10px 10px 0 0;
        }

        .mailtitle p {
            color: #fff;
            font-size: 1.3rem;
            font-weight: bold;
        }

        .form-cont {
            padding: 2rem 4rem;
        }

        .fields {
            text-transform: uppercase;
        }

        .label {
            color: #555555;
            font-size: 12px;
        }

        .response {
            line-height: 1.2em;
            word-wrap: break-word;
        }

        .seperator {
            height: 1px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        @media only screen and (max-width: 600px) {
            .mailbody {
                margin-top: 85px;
            }

            .col-50 {
                display: block;
                margin-bottom: 20px;
            }
            .col-100 {
                display: block;
                margin-bottom: 20px;
            }

            .form-cont {
                padding: 2rem 2rem;
            }

            .mailbody {
                width: 90%;
            }

            .fakebg {
                background-size: 750%;
            }
        }
    </style>
    <title>Request</title>
</head>

<body style="padding: 0; margin: 0; font-family: "Play", sans-serif;">
    <div class="fakebg">
        <div class="mailbody">
            <div class="mailtitle">
                <img src="http://test.terasol.in/nitin/enquiryform/img/mail.jpg">
                <p style="font-size: 17px;">Hi '.$firstname[0].',</p>
                <p style="font-size: 15px; font-weight: lighter;">Here is your data from the Enquiry Form</p>
            </div>
            <div class="form-cont">
                <div class="row">
                    <div class="col-50">
                        <div class="label">Name</div>
                        <div class="response">'.$fname.'</div>
                    </div>
                    <div class="col-50">
                        <div class="label">Email</div>
                        <div class="response">'.$email.'</div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-50>
                        <div class="label">Phone Number</div>
                        <div class="response"> + '.$pincode.' '.$phone.'</div>
                    </div>
                    <div class=col-50>
                        <div class="label">Skype ID / Whatsapp Number</div>
                        <div class="response">'.$skype.'</div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-50>
                        <div class="label">Platform</div>
                        <div class="response">'.$platformFinal.'</div>
                    </div>
                </div>
                <div class="seperator"></div>
                <div class="row">
                    <div class="col-50">
                        <div class="label">Budget</div>
                        <div class="response">'.$budgetFinal.'</div>
                    </div>
                    <div class="col-50">
                        <div class="label">Initiation Date</div>
                        <div class="response">'.$dateFinal.'</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-100">
                        <div class="label">Project Description</div>
                        <div class="response">'.$project.'</div>
                    </div>
                </div>
                <div class="seperator" style="background-color: #26cad347; margin-top: 35px; height: 2px"></div>
                <p style="margin: 0; text-align: center;">Thank you for contacting us. A member from our team will get in touch with you shortly.</p>
            </div>
        </div>
    </div>
</body>';

$subject1 = $platformFinal.' request from '.$fname.' | Terasol Technologies';

require 'vendor/autoload.php';
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<body style="font-family: serif; font-size: 15px; overflow-x: hidden;">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<img src="logo.png" width="25%" style="margin-top: 15px;">
<h4 style="text-align: center; margin: 70px 0 80px 0;">MUTUAL NON-DISCLOSURE AGREEMENT</h4>
<p style="text-indent: 90px; text-align: justify;">This Agreement is made and entered into as of the last date signed below ("The Effective Date") by and between <b>Terasol Technologies Pvt. Ltd</b>("The Company"/ "The Receiving Party") and <u><b>'.$company.'</b></u>(the "Second Party"/ "The Disclosing Party").</p>
<p style="text-indent: 90px; text-align: justify;">WHEREAS The Company and the Second Party (The "Parties") have an interest in participating in discussions wherein either Party might share information with the other that the disclosing Party considers to be proprietary and confidential to itself ("Confidential Information"); and</p>
<p style="text-indent: 90px; text-align: justify;">WHEREAS the Parties agree that Confidential Information of a Party might include, but not be limited to that Party: (1) business plans, methods, and practices; (2) personnel, customers, and suppliers; (3) inventions, processes, methods, products, patent applications, and other proprietary rights; or (4) specifications, drawings, sketches, graphics, illustrations, models, samples, tools, computer programs, technical information, or other related information;</p>
<p style="text-indent: 90px; text-align: justify;">NOW, THEREFORE, the Parties agree as follows:</p>
<ol style="padding-inline-start: 15px;">
	<li style="text-align: justify; text-indent: 50px;">Either Party may disclose Confidential Information to the other Party in confidence provided that the disclosing Party identifies such information as proprietary and confidential either by marking it, in the case of written materials, or, in the case of information that is disclosed orally or written materials that are not marked, by notifying the other Party of the proprietary and confidential nature of the information, such notification to be done orally, by e-mail or written correspondence, or via other means of communication as might be appropriate.</li>
	<li style="text-align: justify; text-indent: 50px;">When informed of the proprietary and confidential nature of Confidential Information that has been disclosed by the other Party, the receiving Party (“Recipient”) shall, for a period of three (3) years from the date of disclosure, refrain from disclosing such Confidential Information to any contractor or other third party without prior, written approval from the disclosing Party and shall protect such Confidential Information from inadvertent disclosure to a third party using the same care and diligence that the Recipient uses to protect its own proprietary and confidential information, but in no case less than reasonable care.  The Recipient shall ensure that each of its employees, officers, directors, or agents who has access to Confidential Information disclosed under this Agreement is informed of its proprietary and confidential nature and is required to abide by the terms of this Agreement.  The Recipient of Confidential Information disclosed underthis Agreement shall promptly notify the disclosing Party of any disclosure of such Confidential Information in violation of this Agreement or of any subpoena or other legal process requiring production or disclosure of said Confidential Information.</li>
	<li style="text-align: justify; text-indent: 50px;">All Confidential Information disclosed under this Agreement shall be and remain the property of the disclosing Party and nothing contained in this Agreement shall be construed as granting or conferring any rights to such Confidential Information on the other Party.  The Recipient shall honor any request from the disclosing Party to promptly return or destroy all copies of Confidential Information disclosed under this Agreement and all notes related to such Confidential Information.  The Parties agree that the disclosing Party will suffer irreparable injury if its Confidential Information is made public, released to a third party, or otherwise disclosed in breach of this Agreement and that the disclosing Party shall be entitled to obtain injunctive relief againsta threatened breach or continuation of any such breach and, in the event of such breach, an award of actual and exemplary damages from any court of competent jurisdiction.</li>
	<li style="text-align: justify; text-indent: 50px;">The terms of this Agreement shall not be construed to limit either Party’s right todevelop independently or acquire products without use of the other Party’s Confidential Information. The disclosing party acknowledges that the Recipient may currently or in the future be developing information internally, or receiving information from other parties, that is similar to the Confidential Information. Nothing in this Agreement will prohibit the Recipient from developing or having developed for it products, concepts, systems or techniques that are similar to or compete with the products, concepts, systems or techniques contemplated by or embodied in the Confidential Information provided that the Recipient does not violate any of its obligations under this Agreement in connection with such development.</li>
	<li style="text-align: justify; text-indent: 50px;">Notwithstanding the above, the Parties agree that information shall not be deemed Confidential Information and the Recipient shall have no obligation to hold in confidence such information, where such information:
		<ol type="a">
			<li style="text-align: justify">Is already known to the Recipient, having been disclosed to the Recipient by a third party without such third party having an obligation of confidentiality to the disclosing Party; or</li>
			<li style="text-align: justify">Is or becomes publicly known through no wrongful act of the Recipient, its employees, officers, directors, or agents; or</li>
			<li style="text-align: justify">Is independently developed by the Recipient without reference to any Confidential Information disclosed hereunder; or</li>
			<li style="text-align: justify">Is approved for release (and only to the extent so approved) by the disclosing Party; or</li>
			<li style="text-align: justify">Is disclosed pursuant to the lawful requirement of a court or governmental agency or where required by operation of law.</li>
		</ol>
	</li>
	<li style="text-align: justify; text-indent: 50px;">Nothing in this Agreement shall be construed to constitute an agency, partnership, joint venture, or other similar relationship between the Parties.</li>
	<li style="text-align: justify; text-indent: 50px;">Neither Party will, without prior approval of the other Party, make any public announcement of or otherwise disclose the existence or the terms of this Agreement.</li>
	<li style="text-align: justify; text-indent: 50px;">This Agreement contains the entire agreement between the Parties and in no way creates an obligation for either Party to disclose information to the other Party or to enter into any other agreement.</li>
	<li style="text-align: justify; text-indent: 50px;">This Agreement shall remain in effect for a period of two (2) years from the Effective Date unless otherwise terminated by either Party giving notice to the other of its desire to terminate this Agreement.  The requirement to protect Confidential Information disclosed under this Agreement shall survive termination of this Agreement.</li>
</ol>
<p style="text-indent: 90px; text-align: justify; margin: 30px 0 100px 0;">IN WITNESS WHEREOF:</p>

<p style="margin-bottom: 0px;">
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;"><b>DISCLOSING PARTY</b></p>
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;"><b>RECIEVING PARTY</b></p>
</p>
<p style="margin-bottom: 0px;">
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;"><b>'.$company.'</b></p>
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;"><b>TERASOL TECHNOLOGIES</b></p>
</p>
<p style="margin-bottom: 0px;">
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;">Date: </p>
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;">Date: '.date("d/m/Y").'</p>
</p>
<p style="margin-top: 70px; margin-bottom: 0;">
	<p style="width: 50%; display: inline-block;padding-top: 60px;">Signature: </p>
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;"><img src="sign.png" width="35%"><br/>Signature: </p>
</p>
<p style="margin-bottom: 0px;">
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;">Name: '.$fname.'</p>
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;">Name: Aparajita</p>
</p>
<p style="margin-bottom: 0px;">
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;">Title: </p>
	<p style="width: 50%; display: inline-block;margin-bottom: 10px;">Title: Legal & Operations Manager </p>
</p>

</body>';

$dompdf->loadHtml($html);

$dompdf->render();

$output = $dompdf->output();

if($nda == 'on'){

    function sendMail($to, $from, $fromName, $subject, $bodyOfEmail, $attachment1, $output) {
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'terasoltechnologies@gmail.com';
    $mail->Password = 'hvqwcyquwkbketec';
    $mail->setFrom($from, 'Terasol');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    //   $mail->AddCC('hustler@terasol.in');
    //   $mail->AddBCC('terasoltechnologies@gmail.com'); 
    $mail->isHTML(true);
    $mail->Body = $bodyOfEmail; 
    $mail->addAttachment("upload/{$attachment1}", $attachment1);
    $mail->addStringAttachment($output, 'Free Quote.pdf');
    $mail->AltBody = "Hello, my friend! This message uses plain text !";
    $mail->send();
    return true;
    }

    sendMail($email, 'nitinchotia2014@gmail.com', $fname, $subject1, $body, $filename1, $output);
}

else {
    
    function sendMail($to, $from, $fromName, $subject, $bodyOfEmail, $attachment1) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'terasoltechnologies@gmail.com';
        $mail->Password = 'hvqwcyquwkbketec';
        $mail->setFrom($from, 'Terasol');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        //   $mail->AddCC('hustler@terasol.in');
        //   $mail->AddBCC('terasoltechnologies@gmail.com'); 
        $mail->isHTML(true);
        $mail->Body = $bodyOfEmail; 
        $mail->addAttachment("upload/{$attachment1}", $attachment1);
        $mail->AltBody = "Hello, my friend! This message uses plain text !";
        $mail->send();
        return true;
    }

    sendMail($email, 'nitinchotia2014@gmail.com', $fname, $subject1, $body, $filename1);
}

header('Location: confirmation.html?s=1');

?>