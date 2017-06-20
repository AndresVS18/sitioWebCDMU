from naoqi import ALProxy
from naoqi import ALBroker
from naoqi import ALModule

import sys
import time
import almath

port = 9559
IP= "169.254.141.211"
IP2="169.254.199.42"
IP3="10.10.6.107"

proxy1=ALProxy("ALTextToSpeech",IP,port)
proxy2=ALProxy("ALTextToSpeech",IP2,port)
proxy3=ALProxy("ALTextToSpeech",IP3,port)

def habla1():
    proxy1.say("Diego, gracias por traernos a la UT Tehuacan")

def habla2():
    proxy2.say("Diego, gracias por traernos a la UT Tehuacan")

def habla3():
    proxy3.say("Diego, gracias por traernos a la UT Tehuacan")

h1 = Threading.Thread(target=habla1,name="hilo1")
h2 = Threading.Thread(target=habla2,name="hilo2")
h3 = Threading.Thread(target=habla3,name="hilo3")

h1.start()
h2.start()
h3.start()
