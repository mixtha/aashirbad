<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

  <style>
  	#contactbody{
      margin-top: 70px;
    }

    #message{
      margin-top: 20px;
      
    }

  </style>
</head>


  <?php include "header.php";?>

  <body>

    <div id="contactbody">
        <div class="container">
            <div class="row">
                <div class= "col-lg-4 col-md-4">
                  <h4>Sitapaila, Kathmandu</h4>
                  <h6> aashish@buildupnepal.com</h6>
                  <h6> 9802055791</h6>

                </div>
                <div class="col-lg-8 col-md-8">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28256.737941000123!2d85.27259590000001!3d27.714438099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1882a40441d5%3A0xb78abafbac008ba5!2sSitapaila%2C%20Nagarjun%2044600!5e0!3m2!1sen!2snp!4v1611995487460!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
        </div>
    </div>


    <div id="message" class="container">

        <h3 style="text-align: center"> Leave Your Message here</h3>

        <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="email" class="form-control"  aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Queries / Suggestion</label>
                <input type="text" class="form-control" >
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
  </body>

  <?php include "footer.php";?>
	
