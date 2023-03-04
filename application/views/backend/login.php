<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url()?>assets/backend/assets/images/favicon.ico">

        <title></title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/backend/assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="<?php echo base_url()?>assets/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/responsive.css" rel="stylesheet" type="text/css" />
       <!-- <link href="<?php echo base_url()?>assets/backend/assets/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url()?>assets/backend/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/bootstrap-tokenfield.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/backend/assets/css/editor.css" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url()?>assets/backend/assets/js/modernizr.min.js"></script>

    </head>

<style>

/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form method="POST" action="<?=base_url("backend/proses_login")?>" id="login_form">
			<fieldset>
				<h2>Please Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="text" name="username" id="userid" class="form-control input-lg" placeholder="User ID">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
  <script>
            var resizefunc = [];
			
        </script>
 <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.min.js"></script>
		  <script src="<?php echo base_url()?>assets/backend/assets/js/jquery-ui.min.js"></script>
		  <script src="<?php echo base_url()?>assets/backend/assets/js/bootstrap-tokenfield.js"></script>
		  
		  
		<!--  <script src="<?php echo base_url()?>assets/backend/assets/js/editor.js"></script>--> 
		  <script src="<?php echo base_url()?>assets/backend/assets/js/nicEdit.js"></script>
		 
		  
        <script src="<?php echo base_url()?>assets/backend/assets/js/detect.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/waves.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url()?>assets/backend/assets/js/bootstrap.min.js"></script>
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo base_url()?>assets/backend/assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url()?>assets/backend/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
		<script src="<?php echo base_url()?>assets/backend/assets/plugins/morris/morris.js"></script>
		<script src="<?php echo base_url()?>assets/backend/assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo base_url()?>assets/backend/assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url()?>assets/backend/assets/js/jquery.app.js"></script>
       <!-- <script src="<?php echo base_url()?>assets/backend/assets/js/bootstrap-select.min.js"></script>-->
      
		<?php
		if(isset($footer))
		{
			echo $footer;
		}
		?>
	
<script>
$(function(){
	
	 
    $("#login_form").submit(function(e){
		e.preventDefault();
		if($("#login_form").hasClass("inSubmit")) {
            alert("Anda sedang dalam proses");
			//e.preventDefault();
			return false;
        } else {
            
           /* if($("#cek_kepesertaan").val() == 0 || $("#no_sep").val().trim() == '') {
                $('#no_sep').focus();
                //alert("Klik tombol VClaim untuk batal sep");
                return false;
            }*/
           
        }
        //var r = confirm("Apakah anda yakin?");
		//if (r == true) {
        //    /*ditutup dulu buat testing*/
        //    //$("#form-sep-irna").addClass("inSubmit");
		//} else {
        //    //e.preventDefault();
        //    return false;
		//}
        $('#loader-wrapper').show();
        $('#wrapper').addClass('pagx');
        $.ajax({
            type: "POST",
            url: '<?=base_url()?>backend/proses_login',
            data: $("#login_form").serialize(),
			dataType: "json",
            success: function(data) {
                console.log(data);
                //return false;
                //$('#loader-wrapper').hide();
                //$('#wrapper').removeClass('pagx');
                //console.log(data.msg);
                if(data.code == "200") {
                   
                    setTimeout(function() {
                        location.href = "<?=base_url()?>backend/index";
                    }, 800);
                } else {
                    alert(data.message);
                    $("#userid").val("");
                    $("#password").val("");
                    $("#password").focus();
                    //window.open(base_url +'pendaftaran/cetaksepranap/'+data.no_pend, '_blank');
                }
            },
            error: function() {
                //$('#loader-wrapper').hide();
                //$('#wrapper').removeClass('pagx');
            }
        });
        //alert('tes');
    });
    
   
	
	
});
</script>