import RPi.GPIO as GPIO
import time

BLUE_PIN = 26  
GPIO.setmode(GPIO.BCM)
GPIO.setup(BLUE_PIN, GPIO.OUT)

GPIO.output(BLUE_PIN, GPIO.HIGH)
print("LED bleue allumée.")
