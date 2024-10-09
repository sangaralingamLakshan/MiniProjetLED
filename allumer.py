import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setup(130, GPIO.OUT)

GPIO.output(130, GPIO.HIGH)
print("LED allumée.")