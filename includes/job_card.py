import mysql.connector
import pdb
import os


#Function to create a folder
def createFolder(directory):
    try:
        #checks if the folder exists
        if not os.path.exists(directory):
            os.makedirs(directory)
    except OSError:
        return 3
		
		
def job_card_insert(name,le,br,gsm,num,cst):
    try:
        #Connecting to the database
        conn = mysql.connector.connect(host="localhost",user="root",passwd='',database="loginsystem")
        cursor = conn.cursor()
        query = "INSERT INTO job_card (Name,gsm,length,width,num_of_cards,cost) VALUES (%s,%s,%s,%s,%s,%s)"
        val =[name,gsm,le,br,num,cst]
        cursor.execute(query,val)
        conn.commit()
        #Creating the folder for the job card orders
        folder_name = "Master/"+name+"_"+str(gsm)+"_("+str(int(le))+"x"+str(int(br))+")"
        #Checking if the folder was created successfully
        if createFolder(folder_name) == 3:
            return 3
        else:
            return 1
    except:
        #For unexpected error
        return 3

