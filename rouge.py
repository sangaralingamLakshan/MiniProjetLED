import RPi.GPIO as GPIO
import sys
import time

# Configuration des broches GPIO
RED_PIN = 13  

# Configuration GPIO
GPIO.setmode(GPIO.BCM)
GPIO.setup(RED_PIN, GPIO.OUT)

# Lire l'intensité à partir des arguments
intensite = int(sys.argv[1]) if len(sys.argv) > 1 else 0

# Configurer le PWM
pwm = GPIO.PWM(RED_PIN, 100)  # Fréquence à 100 Hz
pwm.start(0)  # Démarre à 0% de la largeur d'impulsion

# Définir l'intensité
pwm.ChangeDutyCycle(intensite / 255 * 100)  # Convertir en pourcentage

# Garder la LED allumée pendant un certain temps
time.sleep(2)  # Garder la LED allumée pendant 2 secondes

# Nettoyer
pwm.stop()
GPIO.cleanup()
