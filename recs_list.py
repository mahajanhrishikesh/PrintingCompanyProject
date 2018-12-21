import mysql.connector



def Update_list(paper_type):
    try:
        connection = mysql.connector.connect(host="localhost",user="root",passwd='',database="hello")
        cursor = connection.cursor()
        query = "SELECT order_id,length,width FROM printing_request WHERE master_printer_job = 1 AND jobcard_type LIKE (%s)"
        val =[paper_type+'%']
        cursor.execute(query,val) #Fetching the mail IDS from the db
        myresult = cursor.fetchall()
        for x in range(len(myresult)-1,0,-1):
            for y in range(x):
                if myresult[y][1]*myresult[y][2] < myresult[y+1][1]*myresult[y+1][2]:
                    temp = myresult[y]
                    myresult[y] = myresult[y+1]
                    myresult[y+1] = temp
                
        return myresult
        
    except:
        return 3
    


