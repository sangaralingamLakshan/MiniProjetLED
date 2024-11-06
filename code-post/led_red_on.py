import RPi.GPIO as GPIO
import time

# Configuration de la broche pour la LED rouge
GPIO.setmode(GPIO.BCM)
GPIO.setup(26, GPIO.OUT)

# Allumer la LED rouge
GPIO.output(26, GPIO.HIGH)
time.sleep(1000)  # Garde la LED allumée pendant 5 secondes
GPIO.cleanup()
