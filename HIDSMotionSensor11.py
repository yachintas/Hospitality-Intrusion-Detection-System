import time
import RPi.GPIO as GPIO
import datetime
import picamera

pir = 13
buzzer= 26

GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(pir,GPIO.IN)
GPIO.setup(buzzer,GPIO.OUT)
current_state=0

def capture_image():
	filename = datetime.datetime.now().strftime("%Y_%m_%d|%H:%M:%S")
	camera.start_preview()
	time.sleep(5)
	print filename
	camera.capture('/home/pi/Documents/CM0645/Captures/'+filename+'.jpg')
	camera.stop_preview()
	time.sleep(2)

camera= picamera.PiCamera()
camera.rotation=180
camera.awb_mode='auto'
camera.brightness=55

try:
	while True:
		time.sleep(0.1)
		print ("Standby to detect intrusion.")
		current_state=GPIO.input(pir)
		if current_state==1:
			date=datetime.datetime.now()
			print ("Intrusion has been detected at ")
			print date.strftime("%Y-%m-%d %H:%M:%S")
			GPIO.output(buzzer,True)
			capture_image()
			print ("Image of the intruder has been captured.")
			time.sleep(3)
                        GPIO.output(buzzer,False)
			time.sleep(5)
except KeyboardInterrupt:
    pass
finally:
    GPIO.output(buzzer,False)
    GPIO.cleanup()

