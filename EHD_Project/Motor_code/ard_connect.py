#Code for raspberry Pi:


#FIRST RUN THE COMMAND ls /dev/tty* ON PI AND COPY THE RESULT

import time
import serial

ser = serial.Serial('/dev/ttyACM0', 9600)  #PASTE THE RESULT IN THE FIRST PARAMETER
ser.write('1')

ch = ser.readline()
print ch

while 1:
    if ch:
        break
        
print 'final' + ch
