import RPi.GPIO as GPIO
import time
import sys

BLUE_PIN = 26
GPIO.setmode(GPIO.BCM)
GPIO.setup(BLUE_PIN, GPIO.OUT)

# Vérifiez si une intensité a été passée en argument
if len(sys.argv) > 1:
    intensite = int(sys.argv[1])
    # Convertir l'intensité (0-255) en rapport cyclique (0-100%)
    duty_cycle = intensite / 255.0 * 100
    pwm = GPIO.PWM(BLUE_PIN, 1000)  # Fréquence de 1000 Hz
    pwm.start(duty_cycle)  # Démarrer PWM avec le rapport cyclique
    print(f"LED bleue allumée avec intensité : {intensite}")
    time.sleep(1)  # Maintenir la LED allumée pendant 1 seconde
    pwm.stop()  # Arrêter le PWM
else:
    print("Aucune intensité spécifiée.")
    
GPIO.cleanup()  # Nettoyer les GPIO
