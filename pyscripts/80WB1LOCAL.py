import os
stream = os.popen('echo \'^]\' | telnet 192.168.1.203 80;')
output = stream.read()
stream.close()
if "Connected" in output:
    print("80WB1LOCAL SUCCESS")
else: 
    print("80WB1LOCAL FAIL")


