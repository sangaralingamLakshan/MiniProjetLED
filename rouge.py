import RPi.GPIO as GPIO
import time

RED_PIN = 13  
GPIO.setmode(GPIO.BCM)
GPIO.setup(RED_PIN, GPIO.OUT)

GPIO.output(RED_PIN, GPIO.HIGH)
print("LED rouge allumée.")
