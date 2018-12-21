import job_card
import sys


#name,le,br,gsm,num,cst

jobcardname = sys.argv[1]       #STRING
length = int(sys.argv[2])       #INT
brdh = int(sys.argv[3])         #INT
gsm = int(sys.argv[4])          #INT
n_or = int(sys.argv[5])         #INT
cost = float(sys.argv[6])       #INT

x = job_card.job_card_insert(jobcardname, length, brdh, gsm, n_or, cost)

if x == 1:
    print("Created")
else:
    print("Unexpected error")

