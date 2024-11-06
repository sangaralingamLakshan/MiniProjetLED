import RPi.GPIO as GPIO
# Configuration de la broche pour la LED bleue
GPIO.setmode(GPIO.BCM)
GPIO.setup(19, GPIO.OUT)

# Éteindre la LED bleue
GPIO.output(19, GPIO.LOW)
GPIO.cleanup()
