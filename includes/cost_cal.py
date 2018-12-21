import mysql.connector

def cost(l,b,number,paper_type,gsm,lam):
    try:
        connection = mysql.connector.connect(host="localhost", user="root", passwd='', database="loginsystem")
        cursor = connection.cursor()
        query = "SELECT cost FROM job_card WHERE Name = (%s) AND gsm = (%s)"
        val = [paper_type, gsm]
        cursor.execute(query, val)
        result = cursor.fetchall()
        total = result[0][0] * l * b * number
        if lam == 1:
            return total +(5*number)
        else:
            return  total
    except:
        return 'error'