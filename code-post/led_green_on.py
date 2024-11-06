import RPi.GPIO as GPIO
import time

# Configuration de la broche pour la LED verte
GPIO.setmode(GPIO.BCM)
GPIO.setup(13, GPIO.OUT)

# Allumer la LED verte
GPIO.output(13, GPIO.HIGH)
time.sleep(1000)
GPIO.cleanup()