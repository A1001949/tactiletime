# Haptic Timepiece written in CircuitPython
# Adrian Wong: Last Update Feb 28th, 2019
 
import time

# arrange time in digits as hour1 hour2 : minute1 minute2 so that it appears as 00:00 or 12:24 or 23:59
hour1 = 0
hour2 = 4
minute1 = 5
minute2 = 9

pt = 1000
spacing = 500

on_time = 0.3    # Vibration motor run time, in seconds
interval = 5   # Time between reminders, in seconds
 
start_time = time.time()
 
while True:
	alarmTime = "12:34"
	ah1 = str(alarmTime[0:1])
	ah2 = str(alarmTime[1:2])
	am1 = str(alarmTime[3:4])
	am2 = str(alarmTime[4:5])
	print ah1 + ah2 + ":" + am1 + am2
    