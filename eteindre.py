import RPi.GPIO as GPIO

# Configuration des broches GPIO
RED_PIN = 13  
GREEN_PIN = 19  
BLUE_PIN = 26  

GPIO.setmode(GPIO.BCM)
GPIO.setup(RED_PIN, GPIO.OUT)
GPIO.setup(GREEN_PIN, GPIO.OUT)
GPIO.setup(BLUE_PIN, GPIO.OUT)

# Éteindre toutes les LED
GPIO.output(RED_PIN, GPIO.LOW)
GPIO.output(GREEN_PIN, GPIO.LOW)
GPIO.output(BLUE_PIN, GPIO.LOW)

print("LED éteinte.")
