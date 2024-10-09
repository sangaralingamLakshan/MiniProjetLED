import RPi.GPIO as GPIO
import time

GREEN_PIN = 19  
GPIO.setmode(GPIO.BCM)
GPIO.setup(GREEN_PIN, GPIO.OUT)

GPIO.output(GREEN_PIN, GPIO.HIGH)
print("LED verte allumée.")
