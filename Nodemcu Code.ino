//This Code is built by Github User,Tanmoy741127
//Code is free to use
//This Code mainly focusing on making a Security, Home Survailance
// & Automatic Energy Saving Device 

//Requirements : Nodemcu
#include <ArduinoJson.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <NewPingESP8266.h>
#define TRIGGER_PIN  14
#define ECHO_PIN     12
#define MAX_DISTANCE 30
#define s_pin 5
#define out_pin 4
#define sc 2 //d4
NewPingESP8266 sonar(TRIGGER_PIN, ECHO_PIN, MAX_DISTANCE);
#define PU_PIN 13
const int tank_height= 20;
float level;
boolean pump_data;
boolean security_ss;
const char *ssid = "Your Router's SSID";
const char *password = "Your Router's Password";
boolean pu_data;
boolean ss_data;
int ss_final;
boolean out_data;
int n;
void setup() {
  Serial.begin(115200);
  pinMode(PU_PIN,OUTPUT);
  pinMode(s_pin,INPUT);
  pinMode(out_pin,INPUT);
  pinMode(sc,OUTPUT);
  WiFi.mode(WIFI_OFF);
  delay(1000);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.println(".");
  }
}

void loop() {
getdata();
getdataonline();
takeaction();
senddata();
}
void getdataonline(){
  HTTPClient http1;
  String link1 = "http://EXAMPLE.COM/arduinodata.php"; //Replace EXAMPLE>COM with your website address
  http1.begin(link1);
  int httpCode1 = http1.GET();
  String payload1 = http1.getString();
  if (httpCode1 == 200) {
    const size_t bufferSize1 = JSON_OBJECT_SIZE(2) + 30;
    DynamicJsonBuffer jsonBuffer1(bufferSize1);
    JsonObject& root1 = jsonBuffer1.parseObject(payload1);
    pump_data = root1["pump"];
    security_ss = root1["security_ss"];
   /* Serial.print("PUMP:");Serial.println(pump_data);
    Serial.print("SECURITY MODE:");Serial.println(security_ss);
  */ //DEBUG
  }
  else {
    Serial.println("ERROR");
  }
  http1.end();
}
void getdata(){
  ////////////////////////Tank///////////////////////
  float  distance= sonar.ping_cm();
  float  a = distance / tank_height;
  float  b = 1 - a;
  level = b * 100;
  /*Serial.print("Water Percentage :");Serial.print(level);Serial.println(" %");
  */ ///DEBUG
}
void takeaction(){
  /*******************Water and Pumping System********************/
  if (level <= 20) {
    pu_data = 1;
  }
  else if (level >= 90) {
    pu_data = 0;
  } else if (level > 20 && level < 90) {
    if (pump_data == 0) {
      pu_data = 0;
    } else if (pump_data == 1) {
      pu_data = 1;
    }
  }
  if (pu_data == 0) {
    digitalWrite(PU_PIN, LOW);
  } else   if (pu_data= 1) {
    digitalWrite(PU_PIN, HIGH);
  }
  /***************************END*************************************/
  /*-------------------------------------------------------------------*/
  /****************************OUT LIGHT********************************/
  out_data=digitalRead(out_pin);
  /*****************************END***********************************/
  /*****************************SECURITY******************************/
  if(security_ss==1){
    digitalWrite(sc,HIGH);
  }else if (security_ss==0){
    digitalWrite(sc,LOW);
  ss_data=digitalRead(s_pin);
  /*******************************END*********************************/
  
if(security_ss==0){
  ss_final=0;
}else if(security_ss==1){
  if(ss_data==0){
    ss_final=1;
  }else if (ss_data==1){
    ss_final=2;
  }
}
}}
void senddata(){
  String linkdata, link2;
  HTTPClient http2;
  linkdata = "/send.php";
  linkdata += "?d1=";
  linkdata += level;
  linkdata += "&d2=";
  linkdata += ss_final;
  linkdata += "&d3=";
  linkdata += out_data;
  linkdata += "&d4=";
  linkdata += pu_data;
  link2 = "http://EXAMPLE.COM" + linkdata; //Replace EXAMPLE>COM with your website address
  http2.begin(link2);
  int httpCode2 = http2.GET();
  //Serial.println(link2);
  String payload2 = http2.getString();
  http2.end();
}
