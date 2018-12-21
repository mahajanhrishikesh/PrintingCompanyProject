import BinFitting
import sys


#length -> breadth -> user -> store_id -> lamination bool -> job card type

length = int(sys.argv[1])    #INT
brdh = int(sys.argv[2])      #INT    
user_id = str(sys.argv[3]) 	 #INT
store_id = str(sys.argv[4])  #INT
lamination = int(sys.argv[5])#BOOL/INT(1/0)
job_card = str(sys.argv[6])  #STRING


exe_obj = BinFitting.BannerFitting()

x = exe_obj.Submit(length, brdh, user_id, store_id, lamination, job_card )

if x ==0:
    print("Order unsuccessful")
elif x ==1:
    print("Order successful")
else:
    print("An unexpected error has occured")
