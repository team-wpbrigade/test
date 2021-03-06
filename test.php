<!DOCTYPE html>
<html>
<head>
	<title>API</title>
	<style type="text/css">
	.wrap{
		background: #CCC;
	}
	.heading {
		text-align: center;
		padding-bottom: 0px;
		border-bottom: 1px solid #ccc;
		margin-bottom: 25px;
	}
	.follow {
	    font: normal 18px 'Roboto', Arial, Helvetica, sans-serif;
	    line-height: 1.4;
	    color: #000;
	    font-weight: 300;
	    padding-left: 40px;
	}
	.aligncenter {
	  height: auto;
	  width: 800px;
	  margin: auto;
	  display: block;
	  padding: 3px;
	  border: 1px solid #ccc;
	  margin-top: 10px;
	  margin-bottom: 10px;
	}
	</style>
</head>
<body>
<div class="wrap">
	<div class="heading">
		<h2>
		Get Client ID, Client Secret and Developer API Key for Google Developers Console Application
		</h2>
	</div>
	<div class="follow">
		<p>
			Following are the simple steps which can help you to get your Client ID, Client Secret and Developer API Key.
		</p>
		<ol>
			<li>
				You need to create a Project in Google Developer Console. Click 
				<a title="https://console.developers.google.com/project" href="https://console.developers.google.com/project" target="_blank">here </a>to go to Console page. It will ask you to login with your Google Account if you are not logged in already. If you have created Projects in Google Developers Console before you will see list of already created projects. If not, below screen will appear.
				<br>
				<img class="aligncenter" src="1- Create Project.png">
			</li>
			<li>
				In both scenarios, Click on <b>Create</b> Project button.
			</li>
			<br>
			<li>
				A popup will appear, where you will enter <b>Project Name</b> and <i>Project ID</i> which will help you to recognize your project in console.
				<br>
				<img class="aligncenter" src="2- ID.png">
			</li>
			<li>
				By clicking on Create button, Your project will be created and redirects you to your projects list in Console.
			</li>
			<br>
			<li>
				Clicking on the project name which you have recently created will take you to your Project Dashboard.
			</li>
			<br>
			<li>
				See left side navigation menu. Go to APIs & auth -> APIs and Select Analytics API.
				<br>
				<img class="aligncenter" src="3- Ananlytics API.png">
			</li>
			<li>
				Enable it by pressing the button <b>Enable API</b>.
			</li>
			<br>
			<li>
				Next, Go to APIs & Auth -> Credential and press the button Add Credential with OAuth 2.o Client ID option.
				<br>
				<img class="aligncenter" src="5- Add Credential (2).png">
				
			</li>
			<li>
				Next, press the button Config Consent Screen, fill the form and save it. After Save Select other for create Client ID.
				<br>
				<img class="aligncenter" src="8- Client ID.png">
			</li>
			<br>
			<li>
				Hoho, here you'll get Client ID.
				<br>
				<img class="aligncenter" src="9- OAuth Client (2).png">
			</li>
			<li>
				For getting API Key you'll click ADD Credential button and select API Key option.
				<br>
				<img class="aligncenter" src="11- API Key Req.png">
				Create a new key as per options and you'll get it.
				<br>
				<img class="aligncenter" src="14- Final.png">
			</li>
		</ol>
	</div>
</div>
</body>
</html>