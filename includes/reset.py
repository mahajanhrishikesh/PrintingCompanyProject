import sys
import mysql.connector
import shutil
import os

def createFolder(directory):
	try:
		if not os.path.exists(directory):
			os.makedirs(directory)
	except OSError:
		return 3


def Reset():
	'''
	To reset the database and the saved status pictures on admin command
	--Only accessible by the admin user
	'''
	try:
#Code block to truncate the table
		query1 = "TRUNCATE printing_request"
		query2 = "TRUNCATE job_card"
		connection = mysql.connector.connect(host = "localhost",user = "root",password = '',database = 'loginsystem')
		cursor = connection.cursor()
		cursor.execute(query1)
		connection.commit()
		cursor.execute(query2)
		connection.commit()
		shutil.rmtree('./Master')
		createFolder("Master")
		return 1
	except:
		return 3