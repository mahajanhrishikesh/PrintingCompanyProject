import BinFitting
import sys


#length -> breadth-> user -> store_id -> lamination bool -> job card type -> gsm ->number of order

length = int(sys.argv[1])       #INT
brdh = int(sys.argv[2])         #INT
user_id = sys.argv[3]           #STRING
store_id = sys.argv[4]          #STRING
lamination = int(sys.argv[5])   #BOOL/INT(1/0)
job_card = sys.argv[6]          #STRING
gsm = int(sys.argv[7])          #INT
n_or = int(sys.argv[8])         #INT


exe_obj = BinFitting.BinFitting()

x = exe_obj.Submit(length, brdh,gsm,n_or , user_id, store_id, lamination, job_card )


#Printing the execution status
if x ==0:
    print("Order unsuccessful")
elif x ==1:
    print("Order successful")
elif x == 3:
    print("An unexpected error has occured")
elif x == 4:
    print("Order folder not found/missing")
