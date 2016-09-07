<!DOCTYPE HTML>
<html>

<head>
  <title>Linux AutoBuild</title>
  <meta name="linux" content="Linux build site" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
   <script type="text/javascript" src="js/jquery.min.js"> </script>  
   <script type="text/javascript" src="js/gencd.js"> </script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Linux <span class="logo_colour">AutoBuild</span></a></h1>
          <h2>Lal pasha - Linux Build site</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="user.php">User Reports</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>Web API Launched</h4>
        <h5>August 5th, 2016</h5>
        <p>Web API developed for Linux Administrators, which can be used to create bootable images . <br /><a href="#">Read more</a></p>
        <p></p>
        <h3>Useful Docs</h3>
        <ul>
          <li><a href="docs/ldap.pdf">LDAP Guide</a></li>
          <li><a href="docs/prep.pdf">Build Server Prep</a></li>
          <li><a href="docs/autobuild.pdf">Autobuild Guide</a></li>
          <li><a href="docs/vmware.pdf">Vm Template Guide</a></li>
        </ul>
      </div>
      <div id="content">
        <!-- insert the page content here -->
      <h1> Welcome to Autobuild site </h1>
      <p>
       <br>
      You can use this form to generate bootable iso images.
      Please provide the sever name , ip address  and gateway of the new sever you are going to build <br>
      </p>
      <p>This Build currently provides Oracle Enterprise Linux 7.2 images.
      When you provide the server details, This API will generate a kick start file.
      Linux Administrators can use this image and mount on the server and boot it to start the installation<br> 
      </p>
        <h2>Enter Server details</h2>
        <span id="error" style="color:red;"></span>
       
        <form>
          <div class="form_settings">
            <p><span>Server Name</span><input id="hostname" type="text" name="name" placeholder="hostname" /></p>
            <p><span>Ip address</span><input id="ip"  type="text" name="ip" placeholder="192.168.1.123"></input></p>
            <p><span>Netmask(CIDR)</span><input id="mask" type="text" name="mask" placeholder="24"></input></p>
            <p><span>Operating System</span><select id="os" name="os"><option value="1">Oracle Enterprise Linux 7.2 64bit</option><option value="2">Oracle Enterprise Linux 7.2 32bit</option></select></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input id="isobutton" class="submit" type="button" name="name" value="Build ISO" /></p>
          </div>
        </form>
         <br><br>
        <p class='showprogress' id='result'>
        </p>
        
        
       <!--content ends here -->
       </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Lal Pasha Shaik
    </div>
  </div>
</body>
</html>
