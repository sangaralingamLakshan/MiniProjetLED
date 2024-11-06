import RPi.GPIO as GPIO

# Configuration de la broche pour la LED rouge
GPIO.setmode(GPIO.BCM)
GPIO.setup(26, GPIO.OUT)

# Éteindre la LED rouge
GPIO.output(26, GPIO.LOW)
GPIO.cleanup()
