
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import USD
import sys
import os
import requests
import random

a = {'a','b'}
c = 0
count = 0

def Executablitation():
	# Usa el chromedriver.exe para ir a instagram.com y automatizar tareas
	driver = webdriver.Chrome(executable_path=r"C:\chromedriver.exe")
	driver.get("https://www.instagram.com")
	#all_cookies = driver.get_cookies() 
	#print(all_cookies)z
	#Click en Aceptar Cookies de Instagram
	element = driver.find_element_by_xpath("//button[@class='aOOlW  bIiDR  ']")
	element.click()
	time.sleep(5)
	#busca el elemento con nombre username y escribe el nombre de usuario
	usuario = driver.find_element_by_name("username")
	usuario.send_keys(USD.username[count])
	contrasenya = driver.find_element_by_name("password")
	contrasenya.send_keys(USD.password[count])
	usuario.send_keys(Keys.TAB)
	usuario.send_keys(Keys.ENTER)
	time.sleep(10)
	URL = "https://instagram.com/p/"
	getuser = URL + link
	driver.get(getuser)
	if pri =="private":
		seguir = driver.find_element_by_xpath("/html/body/div[1]/section/main/div/div[1]/article/div[3]/section[1]/span[1]/button")
	elif pri =="public":
		seguir = driver.find_element_by_xpath("/html/body/div[1]/section/main/div/div[1]/article/div[3]/section[1]/span[1]/button")
	randnum = random.uniform(1, 5)
	time.sleep(randnum)
	seguir.send_keys(Keys.SPACE)
	time.sleep(5)
	driver.quit()

	print(USD.username[count],' has been added to the following list!')

full_cmd_arguments = sys.argv
argument_list = full_cmd_arguments[1:]
ga = 0
la = ga
for x in argument_list:
  la = la + 1

lau = argument_list[0]
lau = str(lau)
helpus = 'Do you need more arguments. Check \"python pybot.py -h or --help\"'
if la == 1:
	if lau == "-h" or "--help":
		print("python pybot.py -u <username> -f <number_of_new_followers> <public/private>")
	else:
		print(helpus)
	print(la)

elif la ==2:
	link = argument_list[1]
	print(link,lau)
	print(helpus)
	print(la)

elif la ==3:
	link = argument_list[1]
	efe = argument_list[2]
	print(helpus)
	print(la)

elif la ==4:
	link = argument_list[1]
	efe = argument_list[2]
	efe = argument_list[3]
	print(helpus)
	print(la)

elif la ==5:
	link = argument_list[1]
	efe = argument_list[2]
	max_count = argument_list[3]
	pri = argument_list[4]
	max_count = int(max_count)
	print(la)
	if lau == "-u":
		if efe =="-f":
			if max_count >= 1:
				while count != max_count:
					Executablitation()
					#print(USD.username[count])
					#print(USD.password[count])
					count +=1
					print(count)
				os.system('taskkill /F /IM cmd.exe')
			else:
				print('Escoja un valor superior a 0')
		else:
			print(helpus)
	else:
		print(helpus)
