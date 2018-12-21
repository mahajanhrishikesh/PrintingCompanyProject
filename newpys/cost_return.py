import cost_cal
import sys


#length ,breadth ,number of orders,paper type,gsm,lamination

length = int(sys.argv[1])    #INT
brdh = int(sys.argv[2])      #INT
ord_num = int(sys.argv[3])   #INT
paper_type = sys.argv[4]     #STRING
gsm = int(sys.argv[5])       #INT
lamination = int(sys.argv[6])#BOOL/INT(1/0)

#function call
x = (cost_cal.cost(length,brdh,ord_num,paper_type,gsm=gsm,lam=lamination))
if x == 'error':
    print("unexpected error")
else:
    print(x)

