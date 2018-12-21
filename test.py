import BinFitting
import recs_list
import sys

exe_obj = BinFitting.BannerFitting()

x = recs_list.Update_list("map")
print(exe_obj.Submit(400, 400, "3", "5", 1, "map" ))
print(x)
