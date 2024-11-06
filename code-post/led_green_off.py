import RPi.GPIO as GPIO
# Configuration de la broche pour la LED verte
GPIO.setmode(GPIO.BCM)
GPIO.setup(13, GPIO.OUT)

# Éteindre la LED verte
GPIO.output(13, GPIO.LOW)
GPIO.cleanup()
