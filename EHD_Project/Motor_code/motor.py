#Code for raspberry Pi:


#FIRST RUN THE COMMAND ls /dev/tty* ON PI AND COPY THE RESULT


import RPi.GPIO as GPIO
import time
import serial

ser = serial.Serial('/dev/ttyACM0', 9600)  #PASTE THE RESULT IN THE FIRST PARAMETER
ser.write('1')

while 1:
    if ch=ser.readline():
        break


GPIO.setmode(GPIO.BCM)


enable_pin = 18
coil_A_1_pin = 4
coil_A_2_pin = 17
coil_B_1_pin = 23
coil_B_2_pin = 24


GPIO.setup(enable_pin, GPIO.OUT)
GPIO.setup(coil_A_1_pin, GPIO.OUT)
GPIO.setup(coil_A_2_pin, GPIO.OUT)
GPIO.setup(coil_B_1_pin, GPIO.OUT)
GPIO.setup(coil_B_2_pin, GPIO.OUT)


GPIO.output(enable_pin, 1)


def forward(delay, steps):
    for i in range(0, steps):
    setStep(1, 0, 1, 0)
    time.sleep(delay)
    setStep(0, 1, 1, 0)
    time.sleep(delay)
    setStep(0, 1, 0, 1)
    time.sleep(delay)
    setStep(1, 0, 0, 1)
    time.sleep(delay)


def backwards(delay, steps):
    for i in range(0, steps):
    setStep(1, 0, 0, 1)
    time.sleep(delay)
    setStep(0, 1, 0, 1)
    time.sleep(delay)
    setStep(0, 1, 1, 0)
    time.sleep(delay)
    setStep(1, 0, 1, 0)
    time.sleep(delay)


def setStep(w1, w2, w3, w4):
    GPIO.output(coil_A_1_pin, w1)
    GPIO.output(coil_A_2_pin, w2)
    GPIO.output(coil_B_1_pin, w3)
    GPIO.output(coil_B_2_pin, w4)


while True:
    delay = 100
    steps = ch
    forward(int(delay) / 1000.0, int(steps))
    total = 20        #INCLUDE TOTAL NUMBER OF STEPS AFTER COUNTING
    steps = total-steps
    forward(int(delay) / 1000.0, int(steps))
