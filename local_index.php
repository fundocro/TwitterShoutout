<!DOCTYPE html>
	<html>


	<head>

		<title>@Yugostorm Twitter Shoutout </title>
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="jquery-1.11.1.min.js"></script> 
	</head>

	<body>
        <!-- <div id="logo"></div><embed id="gta" id="gta4" src="gta4.mp3" loop="false" hidden="false" autostart="false">  -->
<!-- Shoutout users -->		
        
       
		<div id="nlist">
		
            <p>
                <span id="shtxt" style="font-size:large;font-weight:bold;font-family:'Comic Sans MS';color:#FF851B" ;maxlength="140">
                    Welcome to <a href="https://twitter.com/Yugostorm">@Yugostorm </a> Twitter ShoutOut! </br>Do you need a free ShoutOutS? You came to the right place:) ... <br />
					If you have a business, activity, advertise idea, 
                    news or you just want more followers?</br> Drop your twitter name (@YourTwitterName) and your message down below!</br>
                    I will review your message and give you a free shout out to my 10K Followers!
                </span>
            </p>
			
			<div id="hst1"></div>	
			

<!-- Enter twitter name -->			
            <form id="new_flw"><!--twitter id here !-->
                Your Twitter Name: <input id="inp1" onkeyup="countChar2(this)" type="text" name="fname" placeholder="@YourTwitterNameHere" value="@" /><br>
            </form>
			

            <div id="message">
<!-- Text Message -->		              
                <textarea id="tt" onkeyup="countChar(this)" style="font-size:large">
Example:(copy/paste your message here)
				</textarea>
				
            </div><!--end message-->

            <div id="charNum"></div>
			
<!-- Submit button  -->			
            <button id="send" onclick="save_name()"></button>
           
            <!--<input id="new_flw" type="submit" value="submit" autofocus="autofocus">!-->
		</div><!--end nlist-->

        <!--FOOT//////////////////////////////-->

        <div id="foot">

            <div class="foot1">
                <h5>CONTACT</h5>
            </div>
            <div class="info">
                <p>
                    <t>Adress:</t><br />
                    Somewhere in Croatia :)
                    
                </p>

                <p>
                    <t>Phone:</t><br />
                   Whats That? <br />
                </p>
            </div>

            <div class="right">
                <i class="fa fa-envelope">    <small>goggy25@gmail.com</small></i>
                <br><i class="fa fa-skype">    <small>superstark8</small></i><br>
                <a href="https://twitter.com/Yugostorm"><i class="fa fa-twitter">  <small>@Yugostorm</small></i></a>
                <br><a href="https://github.com/fundocro"><i class="fa fa-github">    <small>fundocro</small></i></a><br>
                <!--Twitter-->
                <a href="https://twitter.com/Yugostorm" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Yugostorm</a>
                <script>
                    !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');
                </script>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://fundocro.github.io/Website/" data-text="@Yugostorm Twitter Shout Out Tool" data-via="Yugostorm Shout Out!" data-size="large">Tweet</a>

            </div>
        </div>

<!--sTyLe!-->

<style>
html{background-image:url('img/sap.jpg');background-repeat:no-repeat;}
div,#mix{margin-left:60px;margin-top:5px;float:left;clear:left;}
#logo{display:inline-block;margin-top:40px;margin-left:350px;height:200px;width:370px;background-image:url('img/logoT.gif');background-repeat:no-repeat;}
#gta{float:right;height:60px;margin-top:20px;margin-right:20px;border-radius:10px;}

#hst1{float:right;margin-right:200px;margin-top:60px;font-size:large;color:red;}
#nlist{margin-left:310px;margin-top:50px;}/*MAIN*/
#new_flw{font-size:20px;color:red;margin-left:70px;margin-top:30px;}/*Twitter name*/
#inp1{height:20px;border:5px double;border-color:#367E96;}/*Twitter username input*/

#tt{min-height:220px;min-width:560px;margin-left:122px;margin-top:10px;border:5px double;border-color:#367E96;}/*message box*/
#charNum{margin-left:540px;margin-top:10px;padding-top:4px;height:20px;width:40px;text-align:center;font-size:large}/*char counter*/
#send{margin-left:590px;margin-top:-25px;background-image:url('img/tweet.gif');width:163px;height:42px;background-repeat:no-repeat;border-radius:10px;}
#foot{width:78%;border-top:2px solid ; border-color:#367E96;margin-left:325px;margin-top:30px;}
.foot1{margin-top:-10px;}
.info{margin-top:-30px;}
.right{float:right;margin-top:-120px;}
</style>
      	<!--sTyLe eNd!-->
		<script>
			//tweet message length
            function countChar(val) {
                var len = val.value.length;
                if (len > 140) {
                    window.alert("Max 140 characters");
                    val.value = val.value.substring(0, 140);
					
                } else {
                    $('#charNum').text(140 - len);
					
                }
				
            };
			//Twitter name length
            function countChar2(val) {
                var len1 = val.value.length;
				
				if (len1 > 15){
					window.alert("Max 15 characters");
					val.value = val.value.substring(0, 15);
				}
			
            };
			
		
			function save_name(){
				var xmlhttp;
				if(window.XMLHttpRequest){
					xmlhttp=new XMLHttpRequest();
				}else{
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				
				//saving twitter name to tname
				var tname=document.getElementById('inp1').value;
				var tmessage=document.getElementById('tt').value;
				

				xmlhttp.onreadystatechange=function(){
				
					if(xmlhttp.readyState==4){
					//return text messages
						document.getElementById('hst1').innerHTML=xmlhttp.responseText;
						
					}
				}
				
				url="local_save_name.php?inp1="+tname+"& tt="+tmessage;
				//url="save_name.php?inp1="+tname+"& tt="+tmessage;
				
				xmlhttp.open("GET",url,true);
				xmlhttp.send();
				$("#tt").val('');

				//SENDING TO PHP /defining values that we will send to php file
				
			}

		
		</script>
	</body>
    
</html>
