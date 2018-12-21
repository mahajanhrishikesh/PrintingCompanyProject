import mysql.connector
import pdb

#TO update the list of rectangles
def Update_list(paper_type,gsm):
    try:
        connection = mysql.connector.connect(host="localhost",user="root",passwd='',database="loginsystem")
        cursor = connection.cursor()
        query = "SELECT order_id,length,width,num_of_copies FROM printing_request WHERE master_printer_job = 1 AND jobcard_type = (%s) AND gsm = (%s)"
        val =[paper_type,gsm]
        cursor.execute(query,val) #Fetching the order_details from the db
        myresult = cursor.fetchall()
        ret_list = []
        #CREATING THE RETURN LIST
        for or_id,length,width,num in myresult:
            for x in range(num):
                ret_list.append((or_id,length,width))
        #SORTING THE LIST FOR THE BIN-FITTING ALGORITHM (BUBBLE SORT)
        for x in range(len(ret_list)-1,0,-1):
            for y in range(x):
                if ret_list[y][1]*ret_list[y][2] < ret_list[y+1][1]*ret_list[y+1][2]:
                    temp = ret_list[y]
                    ret_list[y] = ret_list[y+1]
                    ret_list[y+1] = temp
                
        return ret_list
        
    except:
        return 3
    

#TO UPDATE THE BIN LIST
def Update_bin(paper_type,gsm):
    try:
        #FETCHING THE DETAILS FOR THE DB
        connection = mysql.connector.connect(host="localhost",user="root",passwd='',database="loginsystem")
        cursor = connection.cursor()
        query = "SELECT length,width,num_of_cards FROM job_card WHERE Name = (%s) AND gsm = (%s)"
        val =[paper_type,gsm]
        cursor.execute(query,val)
        myresult = cursor.fetchall()
        ret_bin = []
        #CREATING THE RETURN BIN
        for l,w,num in myresult:
            for x in range(num):
                ret_bin.append((l,w))
        return ret_bin
    except:
        #FOR DATABASE CONNECTIVITY ERRORS
        return 3
