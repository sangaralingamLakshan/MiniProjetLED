import RPi.GPIO as GPIO
import time

# Configuration de la broche pour la LED bleue
GPIO.setmode(GPIO.BCM)
GPIO.setup(19, GPIO.OUT)

# Allumer la LED bleue
GPIO.output(19, GPIO.HIGH)
time.sleep(1000)  # Garde la LED allumée pendant 5 secondes
GPIO.cleanup()
