
'''

for x in range(3):
    l = int(input("L-Value"))
    b = int(input("B-Value"))
'''
'''
l = int(input("L"))
b = int(input("B"))
jc = input("Job_card: ")
'''
import sys 
sys.path.append('..')
import BinFitting
import recs_list
import job_card

#job_card.job_card_insert("gloss_card_v",20,30,60,10,25)
ob = BinFitting.BinFitting()
print(ob.Submit(5,5,60,5,5,5,1,"gloss_card_v"))
