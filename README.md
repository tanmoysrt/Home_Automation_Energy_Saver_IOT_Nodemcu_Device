# Home_Automation_Energy_Saver_IOT_NODEMCU_Device
Home Automation &amp; Energy Saver Device . This include Nodemcu Full Code , Website Installation Files and Android Application with Nodemcu Esp8266 based Fully Free IOT System

## Getting Started

Fully Home Automation System.........
Let's Start......
### Prerequisites

What things you need to install the software and how to install them

```
1. Arduino IDE
2. Nodemcu
3. Files from Github Respiratory
4. 000webhost.com free or paid hosting (Your Wish)
```
### Essential Links
#### 1. [000webhost.com For free webhosting](https://000webhost.com)
#### 2. [Arduino IDE Download](https://www.arduino.cc/en/Main/Software)
#### 3. [MIT App Inventor](http://ai2.appinventor.mit.edu)
#### 4. [Github Respirartory](https://github.com/Tanmoy741127/Home_Automation_Energy_Saver_IOT_Nodemcu_Device)
### Installing

##### A Step By Step Installation Guide

###### Website Installation

1. Download the code from [github respiratory](https://github.com/Tanmoy741127/Home_Automation_Energy_Saver_IOT_Nodemcu_Device)
2. Create free hosting account at [000webhost.com](https://000webhost.com)
3. Create Database
4. Go to phpMyadmin from 000webhost dashboard
5. Open [MySql_Sample.sql](https://github.com/Tanmoy741127/Home_Automation_Energy_Saver_IOT_Nodemcu_Device/blob/master/MySql_Sample.sql) file in any text editor
6. Replace the 'id11628615_data' with your database name
7. Import the MySql_Sample.sql file in database
8. Upload all the files in your website
9. Edit the Config.php file & Save It
```
//Config.php File

//Replace ""id11628615_data"" with your website database name & replace ""password"" with website's password

<?php
	$con = mysqli_connect("localhost","id11628615_data","password","id11628615_data",3306);
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
?>
```
##### Flash the code in Nodemcu

1. Download the code
2. Open it with Arfduino IDE
3. Change the Wifi-SSID & Password
4. Replace ""EXAMPLE.COM"" with your website name
5. Flash the Code

##### Generate Android App

1. Download [Home_Automation_Android_App.aia](https://github.com/Tanmoy741127/Home_Automation_Energy_Saver_IOT_Nodemcu_Device/blob/master/Android%20App/Home_Automation_Android_App.aia)
2. Login to [MIT App Inventor](http://ai2.appinventor.mit.edu)
3. Import the file
4. From Coding Window, change ""EXAMPLE.COM"" with your website address
5. Save the project
6. Click on Generate
7. Save the .apk file
8. Install the android app in your smartphone


## Checking

1. Add all the sensor , led, relay to Nodemcu's respective pin
2. Start Nodemcu
3. Type your website name in browser
4. If you see something like that , then you are done....


![alt text](https://github.com/Tanmoy741127/Home_Automation_Energy_Saver_IOT_Nodemcu_Device/blob/master/Website%20Code/screenshot.PNG)
5. Now Enjoy It


## Authors

* **Tanmoy Sarkar** - *Initial work* - [Tanmoy741127](https://github.com/Tanmoy741127)

## License

This project is licensed under the GNU License - see the [LICENSE.md](LICENSE.md) file for details


